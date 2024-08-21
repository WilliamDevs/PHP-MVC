<?php 


class Home {
    use Controller;
    public function index($a = '',$b = '',$c = ""){
        $user = new User;
        
        // $result = $user->findAll();

        // $result = $user->where(['id'=>1,'name'=>'william']);
        // show($result);
        // $arr['name'] = "Phil";
        // $arr['age'] = 25;
        // $result = $user->insert($arr);

        // $result = $model->delete(3);
        
        // $arr['name'] = "William";
        // $arr['age'] = 31;
        // $result = $model->update(1,$arr);
        

        // show($result);

        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;
       

        $this->view('home',$data);
    }


    function edit($a = '',$b = '',$c = ""){
       



        $this->view('home');

    }

   
}

