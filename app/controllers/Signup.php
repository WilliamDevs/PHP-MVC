<?php


class Signup {

   
    use Controller;
    public function index(){
        $user = new User();
        if($_SERVER['REQUEST_METHOD'] == "POST"){
           
            if($user->validate($_POST)){
                $user->insert($_POST);    
                redirect('Login');
            }
            
        }
        $data['errors'] = $user->errors;
        $this->view('signup',$data);
    }
}