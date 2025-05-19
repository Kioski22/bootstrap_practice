<?php
require ('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
        body{
            font-family: Poppins, Helvetica, sans-serif !important;
         
        }

        input{
            max-width: fit-content;
        }
        #LoginForm{
            background-color: burlywood;
            margin-left: 500px;
            padding: 200px;
            border-radius: 20px !important;
        }
    </style>
</head>

<body>
    <div class="nav-container">
        <ul class="nav nav-pills gap-2 p-2 small bg-primary rounded-5 shadow-sm" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
            <li class="btn btn-primary" id="profile-tab">
                <button class="nav-link rounded-5 text-white" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Profile</button>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-11 col-lg-6 d-flex justify-content-center">
                <form method="post" action="login_process.php" class="w-60 mt-5 ml-3  text-white rounded-2 " id="LoginForm">
                    <h1 class="text-center">Login</h1>
                    <label for="username">Username</label>
                    <input type="text" placeholder="Juan123" id="username" name="username" class="form-control">

                    <label for="password" class="label">Password</label>
                    <input type="password" id="password" name="password" placeholder="*********" class="form-control">

                    <button class="btn btn-success mt-3" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>