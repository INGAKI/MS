<?php
namespace app\index\controller;
use think\Controller;

class Main extends Controller{
    public function index(){
        return $this->fetch();
    }
}