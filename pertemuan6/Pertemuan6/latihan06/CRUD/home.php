<?php
session_start();
include("konfigurasi.php");

if(isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM tbuser WHERE username='$username' AND passkey='$password'";
  $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("gagal konfigurasi");
  $result = mysqli_query($cnn, $query);

  if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['iduser'] = $row['iduser'];
    $_SESSION['nama'] = $row['nama'];
    header("Location: home.php");
    exit();
  } else {
    $error_msg = "Username atau password salah!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>

  <?php if(isset($error_msg)) { ?>
    <div><?php echo $error_msg; ?></div>
  <?php } ?>

  <form action="" method="POST">
    <div>
      Username:<br>
      <input type="text" name="username">
    </div>
    <div>
      Password:<br>
      <input type="password" name="password">
    </div>
    <div>
      <button type="submit" name="login">Login</button>
    </div>
  </form>

  <a href="registrasi.php">Registrasi</a>

</body>
</html>
