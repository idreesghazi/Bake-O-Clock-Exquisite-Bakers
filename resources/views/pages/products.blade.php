<?php
$db = mysqli_connect('localhost', 'root', '', 'mybakery');
$result = mysqli_query($db,"SELECT * FROM products");
$result_brownie = mysqli_query($db,"SELECT * FROM products");
$result_cupcake = mysqli_query($db,"SELECT * FROM products");
$result_cookie = mysqli_query($db,"SELECT * FROM products");
$result_cheesecake = mysqli_query($db,"SELECT * FROM products");
$result_product = mysqli_query($db,"SELECT * FROM products");
$result_customer = mysqli_query($db,"SELECT * FROM customers");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')

</head>

<body>
@include('includes.aos-animation')
    <div class="main" id="main">
        <!-- Navbar Start -->
        @include('includes.navbar')
        <!-- Navbar End -->

        <!-- MENU CATEGORIES -->

  <div class="categories container-fluid mt-5" data-aos="fade-down" data-aos-duration="1500">
    <h2 class="primary-color text-center mb-5 p-3" style="font-family: Pacifico">Our Sweet Treats for you!</h2>
    <div class="row" style="justify-content: space-evenly">
      <a href="#cakes" class="category-card">
        <img src="images/icon-cake.png" alt="" width="70%">
        <p class="primary-color">Cakes</p>
      </a>
      <a href="#brownies" class="category-card">
        <img src="images/icons-brownie.png" alt="" width="70%">
        <p class="primary-color">Brownies</p>
      </a>
      
      <a href="#cupcakes" class="category-card">
        <img src="images/icons-cupcake.png" alt="" width="70%">
        <p class="primary-color">Cupcakes</p>
      </a>
      <a href="#cookies" class="category-card">
        <img src="images/icon-cookie.png" alt="" width="70%">
        <p class="primary-color">Cookies</p>
      </a>
      <a href="#cheesecake" class="category-card">
        <img src="images/icon-cheesecake.png" alt="" width="70%">
        <p class="primary-color">Cheesecake</p>
      </a>
    </div>
  </div>
  <!-- MENU ITEMS -->
  <div class="container mt-5">

    <!-- Cakes -->
    <h2 class="primary-color text-center dancing-font mt-5" id="cakes" style="font-size: 40px">Cakes</h2>
    <div class="row mt-5" data-aos="fade-up" data-aos-duration="1500">
      <?php
        if (mysqli_num_rows($result) > 0) {
      ?>
      <?php
        $i=1;
        while($row = mysqli_fetch_array($result)) {
          if ((str_contains($row["name"],' cake' )) || (str_contains($row["name"],' Cake' ))){

      ?>
      <!-- <form action="config.php" method="post" enctype="multipart/form-data"> -->
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
          <img src="data:image/jpeg;base64,<?php echo base64_encode( $row['image']); ?> " class="card-img-top" alt="cake">
          <form action="config.php" method="get" enctype="multipart/form-data">
          <div class="card-body menu-card">
            <h5  class="card-title"><?php echo $row["name"]?></h5>
            <h4>Rs. <?php echo $row["price"]?></h4>
            <input type="text" name="productname" value="<?php echo $row["name"];?>" id="productname" style = "color: black; display:none;">
            <input type="text" name="price" value="<?php echo $row["price"];?>" id="price"  style = "color: black; display:none;">
            <button name="addtocart" type="submit" style = "background:transparent; border:none;"><a class="email-button">Add to Cart</a></button>
            
          </div>
          </form>
        </div>
      </div>

      <?php
      }
        $i++;
        }
      ?>
      <?php
        }
        else{
            echo "No result found";
        }
      ?>









      <!-- <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/kitkat-cake.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Kitkat Cake</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div>
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/lotus-three-milk-cake.jpeg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Three Milk Cake</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div>
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/nutella-cake.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Nutella Cake</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div>
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/redVelvet-cake.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Red Velvet Cake</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div>
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/coffee-cake.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Coffee Cake</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div> -->
    </div>

    <!-- Brownies -->
    <h2 class="primary-color text-center dancing-font mt-5" id="brownies" style="font-size: 40px">Brownies</h2>
    <div class="row mt-5" data-aos="fade-up" data-aos-duration="1500">
      <?php
        if (mysqli_num_rows($result_brownie) > 0) {
      ?>
      <?php
        $i=1;
        while($row = mysqli_fetch_array($result_brownie)) {
          if ((str_contains($row["name"],'brownie' )) || (str_contains($row["name"],'Brownie' ))){

      ?>
      <!-- <form action="config.php" method="post" enctype="multipart/form-data"> -->
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
          <img src="data:image/jpeg;base64,<?php echo base64_encode( $row['image']); ?> " class="card-img-top" alt="brownie">
          <form action="config.php" method="get" enctype="multipart/form-data">
          <div class="card-body menu-card">
            <h5  class="card-title"><?php echo $row["name"]?></h5>
            <h4>Rs. <?php echo $row["price"]?></h4>
            <input type="text" name="productname" value="<?php echo $row["name"];?>" id="productname" style = "color: black; display:none;">
            <input type="text" name="price" value="<?php echo $row["price"];?>" id="price"  style = "color: black; display:none;">
            <button name="addtocart" type="submit" style = "background:transparent; border:none;"><a class="email-button">Add to Cart</a></button>
            
          </div>
          </form>
        </div>
      </div>

      <?php
      }
        $i++;
        }
      ?>
      <?php
        }
        else{
            echo "No result found";
        }
      ?>


      <!-- <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/belgian-malt-brownie.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Belgian Malt Brownie</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div>
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/peanut-butter-brownie.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Peanut Butter Brownie</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div> -->
    </div>

    <!-- Cupcakes -->
    <h2 class="primary-color text-center dancing-font mt-5" id="cupcakes" style="font-size: 40px">Cupcakes
    </h2>
    <div class="row mt-5" data-aos="fade-up" data-aos-duration="1500">
      <?php
        if (mysqli_num_rows($result_cupcake) > 0) {
      ?>
      <?php
        $i=1;
        while($row = mysqli_fetch_array($result_cupcake)) {
          if ((str_contains($row["name"],'cupcake' )) || (str_contains($row["name"],'Cupcake' ))){

      ?>
      <!-- <form action="config.php" method="post" enctype="multipart/form-data"> -->
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
          <img src="data:image/jpeg;base64,<?php echo base64_encode( $row['image']); ?> " class="card-img-top" alt="cake">
          <form action="config.php" method="get" enctype="multipart/form-data">
          <div class="card-body menu-card">
            <h5  class="card-title"><?php echo $row["name"]?></h5>
            <h4>Rs. <?php echo $row["price"]?></h4>
            <input type="text" name="productname" value="<?php echo $row["name"];?>" id="productname" style = "color: black; display:none;">
            <input type="text" name="price" value="<?php echo $row["price"];?>" id="price"  style = "color: black; display:none;">
            <button name="addtocart" type="submit" style = "background:transparent; border:none;"><a class="email-button">Add to Cart</a></button>
            
          </div>
          </form>
        </div>
      </div>

      <?php
      }
        $i++;
        }
      ?>
      <?php
        }
        else{
            echo "No result found";
        }
      ?>



      <!-- <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/ferrero-rocher-cupcake.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Ferrero Rocher Cupcake</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div>
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/nutella-cupcake.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Nutella Cupcake</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div>
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/lite-coffee-cupcake.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Coffee Cupcake</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div>
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/MM-cupcake.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">M&M's Cupcake</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div> -->
    </div>

    <!-- Cookies -->
    <h2 class="primary-color text-center dancing-font mt-5" id="cookies" style="font-size: 40px">Cookies</h2>
    <div class="row mt-5" data-aos="fade-up" data-aos-duration="1500">
      <?php
        if (mysqli_num_rows($result_cookie) > 0) {
      ?>
      <?php
        $i=1;
        while($row = mysqli_fetch_array($result_cookie)) {
          if ((str_contains($row["name"],'cookie' )) || (str_contains($row["name"],'Cookie' ))){

      ?>
      <!-- <form action="config.php" method="post" enctype="multipart/form-data"> -->
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
          <img src="data:image/jpeg;base64,<?php echo base64_encode( $row['image']); ?> " class="card-img-top" alt="cake">
          <form action="config.php" method="get" enctype="multipart/form-data">
          <div class="card-body menu-card">
            <h5  class="card-title"><?php echo $row["name"]?></h5>
            <h4>Rs. <?php echo $row["price"]?></h4>
            <input type="text" name="productname" value="<?php echo $row["name"];?>" id="productname" style = "color: black; display:none;">
            <input type="text" name="price" value="<?php echo $row["price"];?>" id="price"  style = "color: black; display:none;">
            <button name="addtocart" type="submit" style = "background:transparent; border:none;"><a class="email-button">Add to Cart</a></button>
            
          </div>
          </form>
        </div>
      </div>

      <?php
      }
        $i++;
        }
      ?>
      <?php
        }
        else{
            echo "No result found";
        }
      ?>


      <!-- <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/triple-chocolate-cookie.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Triple Chocolate Cookie</h5>
              <h4 class="price">Rs.250</h4>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div>
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/lotus-cookies.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Lotus Cookie</h5>
              <h4 class="price">Rs.250</h4>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div> -->
    </div>

    <!-- Cheesecake -->
    <h2 class="primary-color text-center dancing-font mt-5" id="cheesecake" style="font-size: 40px">Cheesecakes</h2>
    <div class="row mt-5" data-aos="fade-up" data-aos-duration="1500">
      <?php
        if (mysqli_num_rows($result_cheesecake) > 0) {
      ?>
      <?php
        $i=1;
        while($row = mysqli_fetch_array($result_cheesecake)) {
          if ((str_contains($row["name"],'cheesecake' )) || (str_contains($row["name"],'Cheesecake' ))){

      ?>
      <!-- <form action="config.php" method="post" enctype="multipart/form-data"> -->
      <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
          <img src="data:image/jpeg;base64,<?php echo base64_encode( $row['image']); ?> " class="card-img-top" alt="cake">
          <form action="config.php" method="get" enctype="multipart/form-data">
          <div class="card-body menu-card">
            <h5  class="card-title"><?php echo $row["name"]?></h5>
            <h4>Rs. <?php echo $row["price"]?></h4>
            <input type="text" name="productname" value="<?php echo $row["name"];?>" id="productname" style = "color: black; display:none;">
            <input type="text" name="price" value="<?php echo $row["price"];?>" id="price"  style = "color: black; display:none;">
            <button name="addtocart" type="submit" style = "background:transparent; border:none;"><a class="email-button">Add to Cart</a></button>
            
          </div>
          </form>
        </div>
      </div>

      <?php
      }
        $i++;
        }
      ?>
      <?php
        }
        else{
            echo "No result found";
        }
      ?>



      <!-- <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <div class="card" style="width: 100%; background-color: rgba(233, 82, 118, 0.8);color: white;">
            <img src="images/mango-cheesecake.jpg" class="card-img-top" alt="cake">
            <div class="card-body menu-card">
              <h5 class="card-title">Mango Cheesecake</h5>
              <a href="#" class="email-button">Add to Cart</a>
            </div>
          </div>
      </div> -->
    </div>


  </div>
    <!-- footer -->
    @include('includes.footer')

</body>

</html>