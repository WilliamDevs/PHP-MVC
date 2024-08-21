<?php




Trait Database{

    private function connect(){
        $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
        $con = new PDO($string,DBUSER,DBPASS);
        return $con;
    }

    public function query ($query , $data =[]){
        $con  = $this->connect();
        $statement = $con->prepare($query);

        $check = $statement->execute($data);
        if($check){
            $result = $statement->fetchALL(PDO::FETCH_OBJ);
            if(is_array($result) && count($result))
            {
                return $result;
            } 
        }

        return false;
        
    }

    public function get_row($query , $data =[]){
        $con  = $this->connect();
        $statement = $con->prepare($query);

        $check = $statement->execute($data);
        if($check){
            $result = $statement->fetchALL(PDO::FETCH_OBJ);
            if(is_array($result) && count($result))
            {
                return $result[0];
            } 
        }

        return false;
        
    }


}