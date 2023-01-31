<?php
session_start();
if (!isset($_SESSION['user_name'])){
  ?>
  <script>
  window.location.href = "loginpage.php";
  </script>
 <?php
}
include 'withoutsectionheader.php';
include 'database_conn.php';
?>
<p class="addproduct-hadding text-center shadow-lg mt-3 bg-success text-white text-uppercase">Add your products</p>
<div id="pic_formate_error" class="m-0 m-auto text-danger text-center text-capitalize bg-warning container">
</div>
<div id="pic_add_success" class="m-0 m-auto text-white text-capitalize text-center bg-success container">
</div>
<form class="" action="addproduct.php" method="POST" enctype="multipart/form-data">
 <div class="container">
   <div class="row">
     <div class="col-sm-12 col-md-6 col-lg-6 m-auto">
       <table class="table table-sm table-hover">
         <tr >
           <td class="text-uppercase ">Choose product</td>
           <td><input type="file" name="file_upload"  class="form-control" placeholder="Procduct image" required>
           </td>
         </tr>
         <tr>
           <td class="text-uppercase ">Product name</td>
           <td>
             <input type="text" name="p_name"  id="text" class="form-control" placeholder="ex. pant,sharee etc" required>
           </td>
         </tr>
         <tr>
           <td class="text-uppercase ">Product catagory</td>
           <td>
             <!-- <input type="text" name="p_catagory"  id="text" class="form-control" placeholder="ex. pant,sharee etc" required> -->
             <select name="p_catagory" class="form-select" aria-label="Default select example" required placeholder="select catagory">
               <option></option>
               <option value="Man">Man</option>
               <option value="women">Women</option>
               <option value="baby">baby</option>
               <option value="mobiles">mobile</option>
               <option value="watchs">watchs</option>
               <option value="laptops">laptop</option>
               <option value="kitchen">kitchen</option>
               <option value="furniture">furniture</option>
               <option value="other">other</option>
             </select>
           </td>
         </tr>
         <tr>
           <td class="text-uppercase ">product price</td>
           <td>
             <div class="row">
               <div class="col-6">
                 <input type="text" name="p_price"  id="text" class="form-control"  title="accept numeric value only" placeholder="product price" required>
               </div>
               <div class="col-6">
                 <input type="text" name="p_dprice"  id="text" class="form-control" title="accept numeric value only" placeholder="cutting price" required>
               </div>
             </div>
           </td>
         </tr>
         <tr>
           <td class="text-uppercase ">product size</td>
           <td><input type="text" name="p_size"  id="text" class="form-control" placeholder="ex. 32,34,40 s m l xl" required>
           </td>
         </tr>
         <tr>
           <td class="text-uppercase  ">product Quality</td>
           <td><input type="text" name="p_quality"  id="text" class="form-control" placeholder="ex. all about of product" required>
           </td>
         </tr>
         <tr>
           <td class="text-uppercase">product waranty</td>
           <td><input type="text" name="p_waranty"  id="text" class="form-control" placeholder="waranty duration">
           </td>
         </tr>
         <tr>
           <td class="text-uppercase ">Product ID</td>
           <td><input type="text" name="p_id"  id="text" class="form-control" placeholder="enter product id" required>
           </td>
         </tr>
         <tr>
           <td></td>
           <td><input type="submit" name="submit" value="Add.." class="btn btn-success m-2">
               <input type="reset" name="submit1" value="Reset" class="btn btn-outline-dark border-white">
           </td>
         </tr>
       </table>
     </div>
   </div>
 </div>
</form>
<!-- php coding -->
<?php
if (isset($_POST['submit'])) {
  // code...
  $p_img = $_FILES['file_upload'];
  $p_id = $_POST['p_id'];
  $p_name = $_POST['p_name'];
  $p_catagory = $_POST['p_catagory'];
  $p_price = $_POST['p_price'];
  $p_dprice = $_POST['p_dprice'];
  $p_size = $_POST['p_size'];
  $p_quality = $_POST['p_quality'];
  $p_waranty = $_POST['p_waranty'];
  // thapa coading
  $filename = $p_img['name'];

  $fileerror = $p_img['error'];
  $filetmp = $p_img['tmp_name'];
  $fileext = explode('.',$filename);
  $filecheck = strtolower(end($fileext));
  $fileextstore = array('png','jpg','jpeg','webp');
  if (in_array($filecheck,$fileextstore)) {
    // code...
    $destinationfile = 'images/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);
    $q ="INSERT INTO $table (`p_img`, `p_price`, `p_dprice`, `p_name`, `p_catagory`, `p_size`, `p_quality`, `p_warranty`, `p_id`) VALUES ('$destinationfile','$p_price','$p_dprice','$p_name','$p_catagory','$p_size','$p_quality','$p_waranty','$p_id')";
    $query= mysqli_query($conn,$q);
    ?>
    <script>
       document.getElementById("pic_add_success").innerHTML = "your product add in online market successfully";
   </script>
<?php
  }else {?>
   <script>
      document.getElementById("pic_formate_error").innerHTML = "please select image formate in .png .jpeg .jpg .webp";
  </script>
    <?php
  }
}
 ?>
<?php include 'withoutfooter.php'; ?>
