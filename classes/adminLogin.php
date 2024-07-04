<?php

    include("../library/session.php");
    include("../library/database.php");
    include("../helpers/format.php");

    Session::loginCheck();
    

    class adminLogin{
        private $db;
        private $fr;
        public function __construct(){
            $this->db = new database();
            $this->fr = new format();
        }
        public function loginUser($email, $password){

            $email = $this->fr->validation($email);
            $password = $this->fr->validation($password);
        
            if(empty($email) || empty($password)){
                $error = "Field must not be empty";
                return $error;
            }else{
                $select = "SELECT * FROM user WHERE email= '$email' AND password = '$password' ";
                $result = $this->db->SELECT($select);
                

                if($result == true){
                    
                    $row = mysqli_fetch_assoc($result);
                    if($row['v_status'] == 1){
                        Session::set('login', true);
                        Session::set('user_name', $row['user_name']);
                        header('location:index.php');
                        echo "succefully login";
                    }else{
                    $error = ' please verify your email';
                    return $error;
                    }
                }
                else{
                    $error = "Invalid pass or email";
                    return $error;
                }
            }
        }
            
    }
?>