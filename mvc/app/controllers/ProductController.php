<?php

class ProductController
{
    public function index(){
        $db = new Product();
        $data['patient'] = $db->getAllProducts();
        view::load('product/index',$data); 
    }
    
}