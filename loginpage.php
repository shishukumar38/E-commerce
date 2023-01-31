<?php
session_start();
error_reporting();
include 'withoutsectionheader.php';
include 'database_conn.php';
 ?>
<p class="addproduct-hadding text-center shadow-lg mt-3 bg-success text-white text-capitalize">login_as admin</p>
<div id="login_error" class="m-auto text-center bg-warning text-danger container">
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 m-auto">
    <form class="form" action="loginpage.php" method="post">
      <table class="table">
        <tr>
          <td class="text-uppercase ">user name <i class="fas fa-user fa-1x"> </td>
          <td><input type="text" name="user_name" class="form-control" placeholder="username" required autocomplete="off">
          </td>
        </tr>
        <tr>
          <td class="text-uppercase ">password</td>
          <td><input type="password" name="password"  class="form-control" placeholder="password" required>
          </td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="login" class="btn btn-success m-2">
              <input type="reset" name="reset" value="Reset" class="btn btn-outline-dark border-white">
          </td>
        </tr>
      </table>
    </form>
 </div>
 </div>
</div>
<?php
 if (isset($_POST['submit'])) {
   $user_name = $_POST['user_name'];
   $_SESSION['user_name'] = $user_name;
   $password = $_POST['password'];
   $q = "SELECT * from $login_tbl where user_name = '$user_name' && password = '$password'";
   $data = mysqli_query($conn, $q);
   $total = mysqli_num_rows($data);

   if ($total==1) {?>
     <?php
     if($_SESSION['user_name']){
       ?>
       <script>
       window.location.href = "addproduct.php";
       </script>
      <?php

     }
     else {
       ?>
       <script>
       window.location.href = "loginpage.php";
       </script>
      <?php
     }

   // code...
 }else {?>
   <script>
      document.getElementById("login_error").innerHTML = "wrong username & password";
  </script>
   <?php
 }
}
 ?>
 <?php include 'withoutfooter.php'; ?>
