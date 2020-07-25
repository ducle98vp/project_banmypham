<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';

class HomeController extends Controller {
    public function index() {

        //lấy các sản phẩm để hiển thị ra view
        $product_model = new Product();
       
        $products = $product_model->getAll();
       
        //truyền biến $product ra view
        $this->content =
            $this->render('views/homes/index.php', [
                'products' => $products
            ]);
        require_once 'views/layouts/product_page.php';
    }
}