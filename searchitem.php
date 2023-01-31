<?php include 'header.php'; ?>
<?php include 'database_conn.php'; ?>
<!-- php serch coding -->
<?php
if (isset($_POST['submit1'])) {
  $si = $_POST['si']; ?>
  <div class="container">
  <div class="row m-0">
  <?php
  // include 'inc/database_conn.php';
  // (mytext)is table name (msg) is table colomn name
  $q1="p_name like '%".$si."%'";
  $q2="p_catagory like '%".$si."%' ";
  $q3="p_quality like '%".$si."%'";
  $sql= "SELECT * from $table where $q1 or $q2 or $q3";
  $result1= $conn->query($sql);
  if($result1->num_rows > 0) {
    // code...
    while ($result = $result1-> fetch_assoc()) {
      ?>
      <!-- search item card -->
      <div class="col-lg-3 col-md-4 col-sm-6  shadow-lg">
        <div class="card m-0">
        <div class="card-body">
          <a class="link_dec" href="#">
          <img src="<?php echo $result['p_img']; ?>" class="card-img" alt="card image">
          </a>
          <p class="card-title text-dark m-0"><b><?php echo $result['p_name']; ?></b> </p>
          <p class="m-0"> <b> ₹ <?php echo $result['p_price']; ?> </b> <sup class="text-danger"><del><?php echo $result['p_dprice']; ?></del></sup>
          <b class="text-success">
           <?php
           $off= $result['p_dprice']-$result['p_price'];
           echo round($off/$result['p_dprice']*100);
           ?> %off</b>
          </p>
          <p class="card-text text-dark"> product id <?php echo $result['p_id']; ?>  </p>
          <div class="row">
            <div class="col-6">
             <a href="#pro_deteils" class="btn btn-success btn-sm"><i class="fas fa-info"></i> Deteils</a>
            </div>
            <div class="col-6">
              <a href="buypro.php" class="btn btn-warning btn-sm"><i class="fas fa-cart-plus fa-sm"></i> Buy now</a>
            </div>
          </div>
        </div>
        </div>
    </div>
      <!-- search item card -->
      <?php
    }?>
  </div>
  </div>
    <?php
  }
  else { ?>
    <div class="alert alert-danger" role="alert">
  <strong>sorry!</strong> data is not available.
</div>
<?php
  }
}
else { ?>
  <div class="alert alert-warning m-auto" role="alert">
  <strong>sorry!</strong> please enter any value in search section.
</div>
  <?php
}
?>
