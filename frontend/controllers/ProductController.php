<?php 
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';

class ProductController extends Controller{
	public function index() {

        //lấy các sản phẩm để hiển thị ra view
        $product_model = new Product();
        $category_model=new Category();
        $categories=$category_model->getAll();
        $products = $product_model->getAll();
        
        //truyền biến $product ra view
        $this->content =
            $this->render('views/homes/index.php', [
                'products' => $products,
                'categories'=>$categories
            ]);
        require_once 'views/layouts/product_page.php';
    }
	public function detail() {
        //ko cần validate id vì khi rewrite url đã bắt case này r
        $id = $_GET['id'];
        //gọi model để lấy product tương ứng dựa vào id vừa lấy đc
        $product_model = new Product();
        $product = $product_model->getById($id);
        $category_model=new Category();
        $categories=$category_model->getAll();
        //lấy nội dung view chi tiết tương ứng
        $this->content =
            $this->render('views/products/detail.php', [
                'product' => $product,
                'categories'=>$categories
            ]);
        //gọi layout để hiển thị ra nội dung view
        require_once 'views/layouts/product_page.php';
    }
    public function filtercategory()
    {
        $id=$_GET['id'];
        $category_model=new Category();
        $categories=$category_model->getAll();
        $product_model = new product();
        $products=$product_model->getByIdCategory($id);
        $this->content=$this->render('views/homes/index.php',[
            'categories'=>$categories,
            'products' => $products
        ]);
        require_once 'views/layouts/product_page.php';
    }
    public function filterprice()
    {
        $id=$_GET['id'];
        $category_model=new Category();
        $categories=$category_model->getAll();
        $product_model = new product();
        $str_price="";
        switch ($id) {
                        //tích vào checkbox Dưới 1 triệu
            case 1: $str_price .="products.price < 100000";
            break;
                        //checkbox Từ 1 - 2tr
            case 2:
            $str_price .="products.price BETWEEN 100000 AND 200000";
            break;
                        //checkbox từ 2 - 3tr
            case 3:
            $str_price .="products.price BETWEEN 200000 AND 400000";
            break;
            case 4:
            $str_price .="products.price BETWEEN 400000 AND 600000";
            break;
                        //checkbox > 3tr
            case 5:
            $str_price .="products.price > 600000";
            break;
        }
        $str_price ="($str_price)";
        $products=$product_model->getByIdPrice($str_price);
        $this->content=$this->render('views/homes/index.php',[
            'categories'=>$categories,
            'products' => $products
        ]);
        require_once 'views/layouts/product_page.php';

    }

}
?>
