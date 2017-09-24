<?php
namespace app\teacher\controller;
use think\Controller;
use app\teacher\model\TeacherUsers;
use think\Request;
class Index extends Controller{

    public function index(){
        return $this->fetch();
    }
    public function login(Request $request){
       
        $name=$request->param('username');
        $pwd=$request->param('password');
        $user=new TeacherUsers();
        $result=$user->get(['name'=>$name,'password'=>$pwd]);      
        if($result){
            return "teacher";
        }else{
            return "false";
        }
    }
}