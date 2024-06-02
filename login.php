<?php
session_start(); 

//Jika session['nama'] sudah ada, maka akan mengarahkan ke index.php
if(isset($_SESSION['nama'])){
  header("Location: index.php");
  exit;
}

    class ProsesLogin { //class proses login
        private $haikal = ["2212030462", "462"]; //property menampung info login 462
        private $david = ["2212030469", "469"]; //property menampung info login 469

        //method login 462
        public function login462($user, $password) { //menggunakan 2 parameter input
            if ($user == $this->haikal[0] && $password == $this->haikal[1]) { //jika inputan parameter sama dengan array propery haikal, maka akan membuat sesi
              $_SESSION['nama'] = "Haikal";
              $_SESSION['nim'] = "2212030462";
              $_SESSION['foto'] = "./assets/haikal.jpeg";
                header("Location: ./index.php");
                exit;
            } else {
                return false; //jika inputan tidak sama dengan array, maka mengembalikan pesan errror
            }
        }

         //method login 469
        public function login469($user, $password) { //menggunakan 2 parameter input
            if ($user == $this->david[0] && $password == $this->david[1]) { //jika inputan parameter sama dengan array propery david, maka akan membuat sesi
              $_SESSION['nama'] = "David";
              $_SESSION['nim'] = "2212030469";
              $_SESSION['foto'] = "./assets/david.jpeg";
                header("Location: ./index.php");
                exit;
            } else {
              $_SESSION['error'] = "User ID atau password salah.";
              header("Location:login.php");
              exit; //jika inputan tidak sama dengan array, maka mengembalikan pesan error
            }
        }
    }
//Jika method POST / jika tombol login dipicu maka akan menjalankan kode di dalamnya
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prosesLogin = new ProsesLogin(); //membuat objek prosesLogin dari class ProsesLogin


    // jika method login462 mengembalikan nilai false, maka proses akan menjalankan method login462
    if($prosesLogin->login462($_POST['userID'], $_POST['password']) == false){
      $prosesLogin->login469($_POST['userID'], $_POST['password']);
    }
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
            <?php
        if (isset($_SESSION['error'])) {
            echo "<div class='alert alert-danger' role='alert'>" . $_SESSION['error'] . "</div>";
            unset($_SESSION['error']);
        }
        ?>
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