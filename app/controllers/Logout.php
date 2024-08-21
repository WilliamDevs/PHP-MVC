<?php


class Logout {

  
    use Controller;
    public function index(){
       $data = [];
        if(!empty($_SESSION['USER']))
        {
            unset($_SESSION['USER']);
        }
        
       redirect("home");
       
    }
}