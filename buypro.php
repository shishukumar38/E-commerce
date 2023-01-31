<?php include 'withoutsectionheader.php'; ?>
<?php include 'database_conn.php'; ?>
<p class="addproduct-hadding text-center shadow-lg mt-3 bg-success text-white text-uppercase">order my product</p>
 <form class="" action="buypro.php" method="POST">
   <div class="container">
     <div class="row">
       <div class="col-sm-12 col-md-6 col-lg-6 m-auto">
         <table class="table table-sm table-hover">
           <tr >
             <td class="text-capitalize">product id</td>
             <td><input type="text" name="cst_pincode_no" value="" class="form-control" placeholder="product id" required>
             </td>
           </tr>
           <tr >
             <td class="text-capitalize">customer name</td>
             <td><input type="text" name="cst_name" class="form-control" placeholder="customer name" required>
             </td>
           </tr>
           <tr >
             <td class="text-capitalize">Gmail</td>
             <td><input type="email" name="cst_mail"  class="form-control" placeholder="for related delivery product" required>
             </td>
           </tr>
           <tr >
             <td class="text-capitalize">phone no.</td>
             <td><input type="text" name="cst_phone_no"  class="form-control" placeholder="phone no." required>
             </td>
           </tr>

           <tr >
             <td class="text-capitalize">address</td>
             <td>
               <div class="row">
                 <div class="col-6">
                   <input type="text" name="cst_city"  id="text" class="form-control"  placeholder="city" required>
                 </div>
                 <div class="col-6">
                   <input type="text" name="cst_state"  id="text" class="form-control"  placeholder="state" required>
                 </div>
               </div>
             </td>

           </tr>
           <tr>
             <td></td>
             <td>
                 <input type="text" name="cst_street"  id="text" class="form-control"   placeholder="please give full address" required>
             </td>
           </tr>
           <tr >
             <td class="text-capitalize">pin code</td>
             <td><input type="text" name="cst_pincode_no"  class="form-control" placeholder="area pincode no." required>
             </td>
           </tr>
           <tr>
             <td class="text-uppercase ">Payment mode</td>
             <td> <select name="cst_payment_mode" class="form-control" id="exampleFormControlSelect1">
                 <option>cash on dilivery(now available)</option>
                 
                 </select>
              </td>
           </tr>
           <tr>
             <td></td>
             <td><input type="submit" name="submit" value="order confirm" class="btn btn-success m-2">
                 <input type="reset" name="" value="Reset" class="btn btn-outline-dark border-white">
                 <a href="index.php" class="btn btn-outline-primary border-white"> cencel</a>
             </td>
           </tr>
         </table>
       </div>
     </div>
   </div>
  </form>
  <?php
  if (isset($_POST['submit'])) {
    // code...
    $cst_name = $_POST['cst_name'];
    $cst_mail =$_POST['cst_mail'];
    $cst_phone_no =$_POST['cst_phone_no'];
    $cst_city =$_POST['cst_city'];
    $cst_state =$_POST['cst_state'];
    $cst_street =$_POST['cst_street'];
    $cst_pincode_no =$_POST['cst_pincode_no'];
    $cst_payment_mode = $_POST['cst_payment_mode'];
    $q ="INSERT INTO $cst_deteils(`cst_name`, `cst_mail`, `cst_phone_no`, `cst_city`, `cst_state`, `cst_street`, `cst_pincode_no`,`cst_payment_mode`)
                 VALUES ('$cst_name','$cst_mail','$cst_phone_no','$cst_city','$cst_state','$cst_street','$cst_pincode_no','$cst_payment_mode')";
    $query= mysqli_query($conn,$q);
 ?>
    <div class="alert alert-success" role="alert">
    <strong>Congratulation!</strong> You successfully confirm your order.
</div>
<?php
}
?>
<?php include 'withoutfooter.php'; ?>
