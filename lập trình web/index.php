<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">

  <!-- Connect DB -->
    <?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password, "quanlythuvien");

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully<br>";
  ?>
<!-- Connect DB -->

<!-- Insert DB -->
<!-- Insert DB -->

<!-- Show DB -->
  <?php
  $sql = "SELECT MaSach,	TenSach, TacGia,	NhaXuatBan,	NgayPhatHanh FROM sach";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["MaSach"]. " - Name: " . $row["TenSach"]. " " . $row["TacGia"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  ?>
<!-- Show DB -->
</head>
<body>
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="InputEmail">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="OutputPassword">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
  <button type="reset" class="btn btn-primary" value="Reset">Reset</button>
</form>
<!-- Link Sign up -->
<form>
  <button type="submit" class="btn btn-primary" formaction="http://localhost/SignUp.php">SignUp</button>
</form>
<!-- Link SIgn up -->

<!-- Check account -->
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "SELECT * FROM quantri";
    $result = $conn->query($sql);
    // collect value of input field
    $name = $_POST['InputEmail'];
    $password = $_POST['OutputPassword'];
    $checkLogin = false;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
         if ($name===$row["TaiKhoan"] && $password === $row["MatKhau"]) {
          echo "Dang nhap thanh cong";
          $checkLogin=true;
          header("Location: http://localhost/homepage.php");
          break;
        }
      }
    }
    if($checkLogin==false) {echo "Sai tai khoan hoac mat khau";}
  }
?>
<!-- Check account -->
  <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>
</html>