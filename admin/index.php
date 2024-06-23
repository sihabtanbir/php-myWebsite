
<?php include 'connect.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
</head>
<body class="row">
    <div class="admin-aside col-3 col-lg-2 hv-100 bg-light">
        <ul>
            <li>Dashboard  <i class="fa-solid fa-signature "></i></li>
            <li>Layout  <i class="fa-solid fa-signature"></i></li>
        </ul>
    </div>
    <div class="admin-main col-9 col-lg-10">
    <header class=" admin-header d-flex bg-light">
        <div class="search d-flex ">
            <input type="text" placeholder="search...">
        </div>
        <div class="profile d-flex ">
            <div class="profile-notification px-2">
            <i class="fa-regular fa-bell"></i>
            </div>
            <div class="profile-img px-2">
            <i class="fa-solid fa-user"></i>
            </div>
            <div class="profile-name">
                <h5>User Name</h5>
            </div>
        </div>
    </header>


    </div>
    <script src="./js/bootstrap.bundle.js"></script>
</body>
</html>