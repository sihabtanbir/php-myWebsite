<?php
 include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login site</title>
</head>
<body>
    
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Login Form</h5>
                    <div class="card-body">

                    <form>
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
                        <button type="submit" class="btn btn-success">Login</button>
                        <a href="" class="btn btn-primary">Sign up</a>
                        <a href="" class="float-right">Forget your password</a>
                        </form>

                        <hr>
                        <h5>Did not email? <a href="#"> Resend</a></h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>