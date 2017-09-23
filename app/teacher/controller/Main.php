<?php
namespace app\teacher\controller;

use think\Controller;

class Main extends Controller{
    public function index(){
        return $this->fetch();
    }
}