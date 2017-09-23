<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\StudentUsers;


class Index extends Controller
{
    public function index()
    {
        $this->assign('stuurl',url('login'));
        $this->assign('teacherurl',url('teacher/index/login'));
        $this->assign('stumainurl',url('main/index'));
        $this->assign('teachermainurl',url('teacher/main/index'));        
        $this->view->replace([
            '__IMAGES__'    =>  '/MS/public/static/images',
        ]);
        return  $this->fetch(); 
    }
    public function login(Request $request){
        $name=$request->param('username');
        $pwd=$request->param('password');
        $user=new StudentUsers();
        $result=$user->get(['number'=>$name,'password'=>$pwd]);
        if($result){
           return json_encode("student");
        }else{
            return json_encode("false");
        }
    }
   
}       
