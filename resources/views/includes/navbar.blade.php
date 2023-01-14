<?php
//include_once '/config';
//session_start();
$db = mysqli_connect('localhost', 'root', '', 'mybakery');
$user = $_COOKIE["username"];
$result = mysqli_query($db,"SELECT * FROM mycart where username = '$user'");
$resultCheck = mysqli_query($db,"SELECT * FROM mycart where username = '$user'");

?>
<!-- Navbar Start -->
<div class="main" id="main">
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <a href="/" class="navbar-brand d-block d-lg-none">
                    <img src="Images/Bakery logo.png" alt="">
                </a>
                <a class="nav-item nav-link d-block d-lg-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span class="material-icons">shopping_cart</span>
                  </a>
                <div class="collapse navbar-collapse justify-content-start ml-auto" id="navbarCollapse">
                    <a href="/login" class="nav-item nav-link d-none d-lg-block" id="account">
                        <span class="material-icons">person</span>
                    </a>
                    <ul class="navbar-nav mx-auto">
                        <span class="navbar-toggler-inner d-lg-none">
                            <li class="nav-item">
                                <a href="" class="nav-link active">Search</a>
                            </li>
                        </span>

                        <li class="nav-item">
                            <a href="/" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/products" class="nav-link">Products</a>
                        </li>
                        <a href="/" class="navbar-brand d-none d-lg-block">
                            <img src="Images/Bakery logo.png" alt="">
                        </a>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">About us</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contact us</a>
                        </li>
                        <span class="navbar-toggler-inner d-lg-none">
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Log In/Register</a>
                            </li>
                        </span>

                    </ul>
                    <a href="" class="nav-item nav-link d-none d-lg-block" id="account">
                        <span class="material-icons">search</span>
                    </a>
                    <a class="nav-item nav-link d-none d-lg-block" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span class="material-icons">shopping_cart</span>
                  </a>
                </div>
            </div>
        </nav>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Your Cart</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <?php
              $subtotal = 0;
            ?>
                <?php if (mysqli_fetch_array($resultCheck)>0){
                         
                         ?>
                <div class="row">
                    <div class="col-md-12">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          
                          $i=1;
                          while($row = mysqli_fetch_array($result)) {

                              ?>
                          <tr class="">
                            <form action="config.php" method="post" enctype="multipart/form-data">
                            <td><?php echo $row['productname'] ?></td> 
                            <td><?php echo $row['price'] ?></td> 
                            <td>
                              <input style="display:none;" type="text" name ="name" class="form-control" value="<?php echo $row["productname"] ?>">

                            </td>
                            <!-- <td>Rs.500</td> -->
                            <td>
                                <button name="deleteCartItem" type= "submit" style="background:transparent; border:none;"> <a href=""><span class="material-symbols-outlined">Delete</span></a> </button>
                                
                            </td>
                            </form>
                          </tr>
                          
                          <?php
                            $subtotal += $row['price'];
                             $i++;
                              }
                              
                            ?>
                            
                          <!-- <tr>
                            <td>Lotus Cheesecake</td>
                            <td>Rs.700</td>
                            <td>
                              <input type="number" class="form-control" value="1" min="1">
                            </td>
                            <td>Rs.700</td>
                            <td>
                                <a href=""><span class="material-symbols-outlined">Delete</span></a>
                            </td>
                          </tr> -->
                        </tbody>
                      </table>
                      
                          
                    </div>
                
                  </div>
                  <div class="row align-items-center justify-content-end text-right">
                    <div class="col-md-9 justify-content-end align-items-end">
                        <h3>Order Summary</h3>
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>Subtotal</td>
                              
                              <td>Rs.<?php echo $subtotal ?></td>
                            </tr>
                            <tr>
                              <td>Shipping</td>
                              <td>Rs.250</td>
                            </tr>
                            <tr>
                              <td>Total</td>
                              <td>Rs.<?php echo $subtotal + 250 ?></td>
                            </tr>
                          </tbody>
                        </table>
                        <button class="btn btn-primary float-right ml-auto" onclick="window.location.href='/checkout';">Proceed to Checkout</button>
                      </div>
                </div>
              <?php
              }
              else{
                echo "No Items to Display";
              }
              ?>
            </div>
          </div>
        <!-- Navbar End -->