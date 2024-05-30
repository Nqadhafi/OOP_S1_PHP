<?php
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){

    class prosesLogin462{
        var $userpass = ["2212030462", "462"];

        public function login($user,$password){
          if($user == $this->userpass[0] && $password == $this->userpass[1]){
            $_SESSION ['userid'] = "Haikal";
            header("Location: ./index.php");
            exit;
          }
          else{
            
            echo "Login Gagal";
            return ;
          }
      }

    }
$obj = new prosesLogin462;
$obj->login($_POST['userID'],$_POST['password']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>

<div class="container bg-light my-5 py-4 rounded mx-auto">

    <form method="POST">
        <div class="mx-5 px-5">
            <h1 class="text-center">Login</h1>
            <div class="mb-3 ">
            <label for="userID" class="form-label">User ID</label>
            <input type="text" class="form-control" name="userID">
          </div>
          <!-- Password -->
          <div class="mb-3 ">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          </div>
          <div class="text-center mt-5 mb-3">
          <button type="submit" class="btn btn-primary px-5 py-3">Login</button>
          </div>
        </div>
    </form>
</div>
</body>
</html>