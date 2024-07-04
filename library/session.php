
<?Php

        class session{
            public static function intit(){
                session_start();
            }
            public static function set($key,$value){
                $_SESSION[$key] = $value;

            }
            public static function get($key){
                if(isset($_SESSION[$key])){
                    return $_SESSION[$key];
                }
                else{
                    return false;
                }
            }

            public static function loginCheck(){
                self::intit();
                if(self::get('login') == 'true'){
                    header('location:index.php');
                }
            }

            public static function checkSession(){
                self::intit();
                if(self::get('login') == 'false'){
                    header('location:login.php');
                }
            }
            
            public static function destroy(){
                session_destroy();
                header('location:login.php');
            }
        }
?>