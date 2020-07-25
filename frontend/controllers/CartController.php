<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/Order.php';
require_once 'models/OrderDetail.php';

class CartController extends Controller {
    public function add() {
        $id=$_GET['id'];
        $product_model= new Product();
        $product=$product_model->getById($id);
        $cart = [
        'id'=>$id,
        'name' => $product['title'],
        'price' => $product['price'],
        'avatar' => $product['avatar'],
            //mặc định mỗi lần thêm chỉ thêm 1 sản phẩm
        'quality' => 1
        ];
        if (!isset($_SESSION['cart'])) {
            //khởi tạo giỏ hàng và thêm mới sản phẩm vào giỏ
            //cấu trúc các phần tử của giỏ hàng:
            // key chính là id của sản phẩm
            //value chính là mảng các thông tin của sản phẩm đó
            $_SESSION['cart'][$id] = $cart;
        } else {
            //nếu sp thêm vào chưa tồn tại trong giỏ hàng, thì
            //thực hiện thêm mới
            //tương đương id của sp khi thêm ko tồn tại trong
            // danh sách các key của giỏ hàng
            if (!array_key_exists($id, $_SESSION['cart'])) {
                $_SESSION['cart'][$id] = $cart;
            } else {
                //trường hợp id sp đã tồn tại trong danh sách các
                //key của mảng giỏ hàng, thì chỉ cập nhật số lương
                //cho phần tử đó trong giỏ hàng
                $_SESSION['cart'][$id]['quality']++;
            }

        }
        // $order_detail_model= new Cart();
        // $order_detail=$order_detail_model->creat($id,);
        $url_redirect = $_SERVER['SCRIPT_NAME'] . '/gio-hang-cua-ban';
        header("Location: $url_redirect");
        exit();

       
    }
    public function index()
    {
        $category_model=new Category();
        $categories=$category_model->getAll();
        
        if (isset($_POST['submit'])) {
           
            # code...
            foreach ($_SESSION['cart'] as $product_id => $cart) {
                $_SESSION['cart']["$product_id"]["quality"]=$_POST["$product_id"];
                # code...
            }
        }
        if (isset($_POST['submit2'])) {
            $order_model= new Order();
            $order_model->fullname=$_POST['fullname'];
            $order_model->address=$_POST['address'];
            $order_model->mobile=$_POST['mobile'];
            $order_model->email=$_POST['email'];
            $order_model->note=$_POST['note'];
            $price_total = 0;
                //lặp giỏ hàng, cộng dồn biến $price_total này với giá
                //thành tiền của các sản phẩm tương ứng trong giỏ
                foreach ($_SESSION['cart'] AS $cart) {
                    $price_item = $cart['price'] * $cart['quality'];
                    $price_total += $price_item;
                }
            $order_model->price_total=$price_total;
            $order_id = $order_model->insert();
            if ($order_id > 0) {
                    //lưu các thông tin vào bảng order_details
                    //lặp giỏ hàng để lưu thông tin từng phần tử
                    //vào bảng
                    $order_detail_model = new OrderDetail();
                    $order_detail_model->order_id = $order_id;
                    foreach ($_SESSION['cart'] AS $product_id => $cart) {
                        $order_detail_model->product_id = $product_id;
                        $order_detail_model->quality = $cart['quality'];
                        $is_insert = $order_detail_model->insert();
                        
                    }
                $_SESSION['success']='Thanh toán thành công cảm ơn bạn đã mua hàng';
            }
            # code...
        }
        $this->content =$this->render('views/carts/index.php',['categories'=>$categories]);
        require_once 'views/layouts/product_page.php';
    }
    public function clearAll()
    {
        unset($_SESSION['cart']);
        $url_redirect = $_SERVER['SCRIPT_NAME'] . '/gio-hang-cua-ban';
        header("Location: $url_redirect");
        exit();
    }
    public function delete()
    {
        $id=$_GET['id'];
        unset($_SESSION['cart'][$id]);
        $url_redirect = $_SERVER['SCRIPT_NAME'] . '/gio-hang-cua-ban';
        header("Location: $url_redirect");
        exit();

    }
}