<?php
include_once 'database_conn.php';
include 'header.php';
?>
<!-- this page is landing page  -->
<div class="gotop">
  <i class="fas fa-arrow-up"></i>
</div>
<!-- for scroll and listing -->
 <div class="container">
 <div class="row m-0">
    <div class="scrolling-wrapper row flex-row flex-nowrap">
      <div class="col-lg-3 col-md-4 col-sm-6  shadow-lg">
      <div class="card m-0">
      <div class="card-body">
        <h5 class="card-title">Watch for everyone | Up to 80% off</h5>
        <a class="link_dec" href="#watchsection">
        <img src="images/watchs.jpeg" class="card-img" alt="card image">
        <p class="card-text text-dark"><b>Watch</b></p></a>
        <a href="#watchsection" class="btn btn-warning btn-sm">See more..</a>
      </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6  shadow-lg">
    <div class="card m-0">
      <div class="card-body">
        <h5 class="card-title">Laptops coding & gaming  | Up to 20% off</h5>
        <a class="link_dec" href="#laptopsection">
        <img src="images/laptop.jpg" class="card-img" alt="card image">
        <p class="card-text text-dark"><b>Laptop</b></p></a>
        <a href="#laptopsection" class="btn btn-warning btn-sm">See more..</a>
      </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6  shadow-lg">
    <div class="card m-0">
      <div class="card-body">
        <h5 class="card-title">Kitchen Products | Up to 30% off</h5>
        <a class="link_dec" href="#kitchensection">
        <img src="images/kitchen.jpg" class="card-img" alt="card image">
        <p class="card-text text-dark"><b>Kitchen Products</b></p></a>
        <a href="#kitchensection" class="btn btn-warning btn-sm">See more..</a>
      </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6  shadow-lg">
    <div class="card m-0">
      <div class="card-body">
        <h5 class="card-title">Furniture & decoration|Up to 40% off</h5>
        <a class="link_dec" href="#furnituresection">
        <img src="images/furniture.jpg" class="card-img" alt="card image">
        <p class="card-text text-dark "><b>Furniture & decoration</b></p></a>
        <a href="#furnituresection" class="btn btn-warning btn-sm">See more..</a>
      </div>
      </div>
    </div>
      <!-- man card link -->
      <div class="col-lg-3 col-md-4 col-sm-6  shadow-lg">
      <div class="card m-0">
      <div class="card-body m-0">
        <h5 class="card-title"><b> Style for Man | Up to 50% off</b></h5>
        <a class="link_dec" href="#mansection">
          <img src="images/IMG-20200811-WA0030.jpg" class="card-img" alt="card image">
          <p class="card-text text-dark "><b>Men clothing</b></p>
        </a>
        <a href="#mensection" class="btn btn-warning btn-sm">See more..</a>
      </div>
      </div>
    </div>
      <!-- women card link -->
      <div class="col-lg-3 col-md-4 col-sm-6  shadow-lg">
      <div class="card m-0">
      <div class="card-body">
        <h5 class="card-title"><b> Style for Woman | Up to 70% off</b></h5>
        <a class="link_dec" href="#womensection">
        <img src="images/women_cloth.jpg" class="card-img" alt="card image">
        <p class="card-text text-dark "><b>Women clothing</b></p></a>
        <a href="#womensection" class="btn btn-warning btn-sm">See more..</a>
      </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6  shadow-lg">
    <div class="card m-0">
      <div class="card-body">
        <h5 class="card-title"> Style for baby | Up to 60% off</h5>
        <a class="link_dec" href="#babysection">
        <img src="images/baby_cloth.jpg" class="card-img" alt="card image">
        <p class="card-text text-dark "><b>baby clothing</b></p></a>
        <a href="#babysection" class="btn btn-warning btn-sm">See more..</a>
      </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6  shadow-lg">
    <div class="card m-0">
      <div class="card-body">
        <h5 class="card-title">Style for baby | Up to 50% off</h5>
        <a class="link_dec" href="#mobilesection">
        <img src="images/mobile.png" class="card-img" alt="card image">
        <p class="card-text text-dark "><b>mobiles</b></p></a>
        <a href="#mobilesection" class="btn btn-warning btn-sm">See more..</a>

      </div>
      </div>
    </div>
    </div>
</div>
</div>

      <!-- Horizontal scroll end -->
      <!-- product show by card -->
      <!-- section start all -->
      <!-- man section -->
      <section id="mansection" class="sectionbg">
        <div class="bg-dark">
          <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
              <span class="sr-only"></span>

            </div>
            <div class="spinner-grow text-secondary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-success" role="status">
              <span class="sr-only"></span>
            </div>

            <div class="spinner-grow text-danger" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-warning" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-info" role="status">
              <span class="sr-only"></span>
            </div>
          </div>
          </div>
          <div class="text-white text-center bg-dark">
            <h2 class="text-capatalise">Men Collection</h2>
          </div>
   <!-- php for retrive pruduct -->
         <div class="container">
         <div class="row m-0">
         <?php
         $table ="shishu_kumar_ecommerce_user_tbl";
         $displayquery = "select * from $table where p_catagory ='Man' ";
         $querydisplay = mysqli_query($conn,$displayquery);
         while ($result = mysqli_fetch_array($querydisplay)) {
           ?>
           <div class="col-lg-3 col-md-4 col-sm-4  shadow-lg">
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
           <?php
          }
          ?>
          <!-- add more card -->
          <div class="card" style="width: 18rem;">
            <a href="loginpage.php">
            <img src="images/addproduct.jpg" class="card-img-top card-img" alt="...">
            <i class="fas fa-plus"></i>
            <div class="card-body">
              <h5 class="card-title">Add product as admin</h5>

              </a>
              <a href="loginpage.php" class="btn btn-primary">login as admin</a>
            </div>
          </div>
          <!-- add more card end -->
        </div>
        </div>

      </section>
      <!-- end man section -->
      <!-- women section -->
      <section id="womensection">
        <div class="bg-dark">
          <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-success" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-danger" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-warning" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-info" role="status">
              <span class="sr-only"></span>
            </div>
          </div>
        </div>
        <div class="text-white text-center bg-dark">
          <h2 class="text-capatalise">Women Collection</h2>
        </div>
        <!-- women product card -->
        <div class="container">
        <div class="row mt-2">
        <?php
        $table ="shishu_kumar_ecommerce_user_tbl";
        $displayquery = "select * from $table where p_catagory ='women' ";
        $querydisplay = mysqli_query($conn,$displayquery);
        while ($result = mysqli_fetch_array($querydisplay)) {
          ?>
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
          <?php
         }
         ?>
         <!-- add more card -->
         <div class="card" style="width: 18rem;">
           <a href="loginpage.php">
           <img src="images/addproduct.jpg" class="card-img-top card-img" alt="...">
           <i class="fas fa-plus"></i>
           <div class="card-body">
             <h5 class="card-title">Add product as admin</h5>

             </a>
             <a href="loginpage.php" class="btn btn-primary">login as admin</a>
           </div>
         </div>
         <!-- add more card end -->
       </div>
       </div>
        <!-- women card product -->
      </section>
      <!--end women section -->

      <!-- kids section -->
      <section id="babysection">
        <div class="bg-dark">
          <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-success" role="status">
              <span class="sr-only"></span>
            </div>

            <div class="spinner-grow text-danger" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-warning" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-info" role="status">
              <span class="sr-only"></span>
            </div>
          </div>
        </div>
        <div class="text-white text-center bg-dark">
          <h2 class="text-capatalise">Baby Collection</h2>
        </div>
        <!-- baby card -->
        <div class="container">
        <div class="row mt-2">
        <?php
        $table ="shishu_kumar_ecommerce_user_tbl";
        $displayquery = "select * from $table where p_catagory ='baby' ";
        $querydisplay = mysqli_query($conn,$displayquery);
        while ($result = mysqli_fetch_array($querydisplay)) {
          ?>
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
          <?php
         }
         ?>
         <!-- add more card -->
         <div class="card" style="width: 18rem;">
           <a href="loginpage.php">
           <img src="images/addproduct.jpg" class="card-img-top card-img" alt="...">
           <i class="fas fa-plus"></i>
           <div class="card-body">
             <h5 class="card-title">Add product as admin</h5>

             </a>
             <a href="loginpage.php" class="btn btn-primary">login as admin</a>
           </div>
         </div>
         <!-- add more card end -->
       </div>
       </div>
        <!-- baby card end -->
      </section>
      <!--end kids section -->
      <!-- Electronics section -->
      <section id="mobilesection">
        <div class="bg-dark">
          <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-success" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-danger" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-warning" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-info" role="status">
              <span class="sr-only"></span>
            </div>
          </div>
        </div>
        <div class="text-white text-center bg-dark">
          <h2 class="text-capatalise">Mobile Collection</h2>
        </div>
        <!-- electronic -->
        <div class="container">
        <div class="row mt-2">
        <?php
        $table ="shishu_kumar_ecommerce_user_tbl";
        $displayquery = "select * from $table where p_catagory ='mobiles' ";
        $querydisplay = mysqli_query($conn,$displayquery);
        while ($result = mysqli_fetch_array($querydisplay)) {
          ?>
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
          <?php
         }
         ?>
         <!-- add more card -->
         <div class="card" style="width: 18rem;">
           <a href="loginpage.php">
           <img src="images/addproduct.jpg" class="card-img-top card-img" alt="...">
           <i class="fas fa-plus"></i>
           <div class="card-body">
             <h5 class="card-title">Add product as admin</h5>

             </a>
             <a href="loginpage.php" class="btn btn-primary">login as admin</a>
           </div>
         </div>
         <!-- add more card end -->
       </div>
       </div>
        <!-- electronic end-->
      </section>
      <!-- end Electronics section -->
      <!-- other section -->
      <section id="watchsection">
        <div class="bg-dark">
          <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-success" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-danger" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-warning" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-info" role="status">
              <span class="sr-only"></span>
            </div>
          </div>
        </div>
        <div class="text-white text-center bg-dark">
          <h2 class="text-capatalise">Watchs Collection</h2>
        </div>
        <!-- electronic -->
        <div class="container">
        <div class="row mt-2">
        <?php
        $table ="shishu_kumar_ecommerce_user_tbl";
        $displayquery = "select * from $table where p_catagory ='watchs' ";
        $querydisplay = mysqli_query($conn,$displayquery);
        while ($result = mysqli_fetch_array($querydisplay)) {
          ?>
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
          <?php
         }
         ?>
         <!-- add more card -->
         <div class="card" style="width: 18rem;">
           <a href="loginpage.php">
           <img src="images/addproduct.jpg" class="card-img-top card-img" alt="...">
           <i class="fas fa-plus"></i>
           <div class="card-body">
             <h5 class="card-title">Add product as admin</h5>

             </a>
             <a href="loginpage.php" class="btn btn-primary">login as admin</a>
           </div>
         </div>
         <!-- add more card end -->
       </div>
       </div>
      </section>
      <!-- end other section -->
      <!-- laptopsection -->
      <section id="laptopsection">
        <div class="bg-dark">
          <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-success" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-danger" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-warning" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-info" role="status">
              <span class="sr-only"></span>
            </div>
          </div>
        </div>
        <div class="text-white text-center bg-dark">
          <h2 class="text-capatalise">Laptops Collection</h2>
        </div>
        <!-- electronic -->
        <div class="container">
        <div class="row mt-2">
        <?php
        $table ="shishu_kumar_ecommerce_user_tbl";
        $displayquery = "select * from $table where p_catagory ='laptops' ";
        $querydisplay = mysqli_query($conn,$displayquery);
        while ($result = mysqli_fetch_array($querydisplay)) {
          ?>
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
          <?php
         }
         ?>
         <!-- add more card -->
         <div class="card" style="width: 18rem;">
           <a href="loginpage.php">
           <img src="images/addproduct.jpg" class="card-img-top card-img" alt="...">
           <i class="fas fa-plus"></i>
           <div class="card-body">
             <h5 class="card-title">Add product as admin</h5>

             </a>
             <a href="loginpage.php" class="btn btn-primary">login as admin</a>
           </div>
         </div>
         <!-- add more card end -->
       </div>
       </div>

      </section>
      <!-- laptopsection end -->

      <!-- kitchensection -->
      <section id="kitchensection">
        <div class="bg-dark">
          <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-success" role="status">
              <span class="sr-only"></span>
            </div>

            <div class="spinner-grow text-danger" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-warning" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-info" role="status">
              <span class="sr-only"></span>
            </div>
          </div>
        </div>
        <div class="text-white text-center bg-dark">
          <h2 class="text-capatalise">Kitchen Collection</h2>
        </div>
        <!-- electronic -->
        <div class="container">
        <div class="row mt-2">
        <?php
        $table ="shishu_kumar_ecommerce_user_tbl";
        $displayquery = "select * from $table where p_catagory ='kitchen' ";
        $querydisplay = mysqli_query($conn,$displayquery);
        while ($result = mysqli_fetch_array($querydisplay)) {
          ?>
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
          <?php
         }
         ?>
         <!-- add more card -->
         <div class="card" style="width: 18rem;">
           <a href="loginpage.php">
           <img src="images/addproduct.jpg" class="card-img-top card-img" alt="...">
           <i class="fas fa-plus"></i>
           <div class="card-body">
             <h5 class="card-title">Add product as admin</h5>

             </a>
             <a href="loginpage.php" class="btn btn-primary">login as admin</a>
           </div>
         </div>
         <!-- add more card end -->
       </div>
       </div>

      </section>
      <!-- kitchensection end -->

      <!-- furnituresection -->
      <section id="furnituresection">
        <div class="bg-dark">
          <div class="text-center">
            <div class="spinner-grow text-primary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-success" role="status">
              <span class="sr-only"></span>
            </div>

            <div class="spinner-grow text-danger" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-warning" role="status">
              <span class="sr-only"></span>
            </div>
            <div class="spinner-grow text-info" role="status">
              <span class="sr-only"></span>
            </div>
          </div>
        </div>
        <div class="text-white text-center bg-dark">
          <h2 class="text-capatalise">Furniture Collection</h2>
        </div>
      <!-- furniture -->
        <div class="container">
        <div class="row mt-2">
        <?php
        $table ="shishu_kumar_ecommerce_user_tbl";
        $displayquery = "select * from $table where p_catagory ='furniture' ";
        $querydisplay = mysqli_query($conn,$displayquery);
        while ($result = mysqli_fetch_array($querydisplay)) {
          ?>
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
          <?php
         }
         ?>
         <!-- add more card -->
         <div class="card" style="width: 18rem;">
           <a href="loginpage.php">
           <img src="images/addproduct.jpg" class="card-img-top card-img" alt="...">
           <i class="fas fa-plus"></i>
           <div class="card-body">
             <h5 class="card-title">Add product as admin</h5>

             </a>
             <a href="loginpage.php" class="btn btn-primary">login as admin</a>
           </div>
         </div>
         <!-- add more card end -->
       </div>
       </div>

      </section>
      <!-- furnituresection end -->
<?php
include 'footer.php';
?>
