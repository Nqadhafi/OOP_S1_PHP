<?php
session_start(); 

//Jika session['userid'] sudah ada, maka akan mengarahkan ke index.php
if(isset($_SESSION['userid'])){
  header("Location: index.php");
  exit;
}

// //Jika method POST / jika tombol login dipicu maka akan menjalankan kode di dalamnya
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     class ProsesLogin { //class proses login
//         private $haikal = ["2212030462", "462"]; //property menampung info login 462
//         private $david = ["2212030469", "469"]; //property menampung info login 469

//         //method login 462
//         public function login462($user, $password) { //menggunakan 2 parameter input
//             if ($user == $this->haikal[0] && $password == $this->haikal[1]) { //jika inputan parameter sama dengan array propery haikal, maka akan membuat sesi
//                 $_SESSION['userid'] = "Haikal";
//                 header("Location: ./index.php");
//                 exit;
//             } else {
//                 return "Username & Password Salah"; //jika inputan tidak sama dengan array, maka mengembalikan pesan errror
//             }
//         }

//          //method login 469
//         public function login469($user, $password) { //menggunakan 2 parameter input
//             if ($user == $this->david[0] && $password == $this->david[1]) { //jika inputan parameter sama dengan array propery david, maka akan membuat sesi
//                 $_SESSION['userid'] = "David";
//                 header("Location: ./index.php");
//                 exit;
//             } else {
//                 return "Username & Password Salah"; //jika inputan tidak sama dengan array, maka mengembalikan pesan error
//             }
//         }
//     }

//     $prosesLogin = new ProsesLogin(); //membuat objek prosesLogin dari class ProsesLogin

//     //percabangan untuk memilih method mana yang akan dieksekusi menurut inputan yang benar
//     if ($_POST['userID'] == "2212030462") {
//         $response = $prosesLogin->login462($_POST['userID'], $_POST['password']);
//     } elseif ($_POST['userID'] == "2212030469") {
//         $response = $prosesLogin->login469($_POST['userID'], $_POST['password']);
//       } 
//       else {
//         $response = "Username & Password Salah";
//     }
// }
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

    <form action="index.php" method="POST">
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