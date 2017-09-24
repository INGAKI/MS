<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\StudentUsers;


class Index extends Controller
{
    public function index()
    {
        $this->assign('stuurl','/MS/public/index.php/index/index/login.html');
        $this->assign('teacherurl','/MS/public/index.php/teacher/index/login.html');
        $this->assign('stumainurl','/MS/public/index.php/index/main/index.html');
        $this->assign('teachermainurl','/MS/public/index.php/teacher/main/index.html');        
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
