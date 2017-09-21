<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $this->view->replace([
            '__IMAGES__'    =>  '/MS/public/static/images',
        ]);
        return  $this->fetch();
    }
    public function login(){
        print_r($_POST);
    }
}
