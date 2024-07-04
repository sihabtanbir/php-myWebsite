<?php
    include '../library/database.php';
    include '../helpers/format.php';


        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require '../PHPMailer/src/Exception.php';
        require '../PHPMailer/src/PHPMailer.php';
        require '../PHPMailer/src/SMTP.php';

        class Register{
            public $db;
            public $fr;
            public function __construct(){
                $this->db = new Database();
                $this->fr = new Format();
            }

            public function addUser($data){
                // function sendmail_verify($name, $email, $v_tocken){
                //     $mail = new PHPMailer(true);
                //     $mail->isSMTP();
                //     $mail->SMTPAuth   = true; 

                //     $mail->Username   = 'sihab.cse@gmail.com';                     //SMTP username
                //     $mail->Password   = '12Sihab12@';                               //SMTP password
                //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                //     $mail->Port       = 465;   

                //     $mail->isHTML(true);                                  //Set email format to HTML
                //     $mail->Subject = 'Here is the subject';
                //     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                //     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                
                //     $mail->send();
                //     echo 'Message has been sent';


                // }

                $name = $this->fr->validation($data['name']);
                $number = $this->fr->validation($data['number']);
                $email = $this->fr->validation($data['email']);
                $password = $this->fr->validation($data['password']);
                $v_token = md5(rand());


               

                if(empty($name) || empty($number) || empty($email) || empty($password) || empty($v_token)){
                    $error ="Field must not be empty";
                    return $error;
                }
                else{
                    $e_query = "SELECT * FROM user WHERE email='$email' " ;
                    $check_email = $this->db->select($e_query) ;
    
                    if($check_email == true ){
                        $error= "this email allready exist";
                        return $error;  
                        // header("location:register.php");
                    }
                    else{   
                        $insert_query = "INSERT INTO user(user_name, email, phone, password, v_token) VALUES('$name', '$email', '$number', '$password', '$v_token')";

                        $insert_row = $this->db->insert($insert_query) ;
                        if($insert_row ){
                            // sendmail_verify($name, $email,$v_token); 
                            $success = " Registation successful. please check your email. your email is $email ";
                            return $success;
                        }else{
                            $error = "Registation failed";
                            return $error;
                        }
                    }
                }
            }
    }
?>