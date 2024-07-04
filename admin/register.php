<?php
 include 'connect.php';
 include '../classes/register.php';
 $re = new Register();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $addUser =$re-> addUser($_POST);
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Sign-up site</title>
</head>
<body>
    
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 m-0" >

                <span>
                    <?php
                     if(isset($addUser)){
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        
                        <?=$addUser?>
                        
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php 
                     }
                    ?>
                </span>

                <div class="card">
                    <h5 class="card-header">Registration Form</h5>
                    <div class="card-body">

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" name="name"   >

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="exampleInputNumber" name="number"   >

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"   >

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-success">Sign up</button>
                       
                        </form>

                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>