<?php
//include_once '/config';
//session_start();
$db = mysqli_connect('localhost', 'root', '', 'mybakery');
$user = $_COOKIE["username"];
$result = mysqli_query($db,"SELECT * FROM mycart where username = '$user'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')

</head>

<body>
@include('includes.aos-animation')
<form action="config.php" method="post" enctype="multipart/form-data">     
      <div class="main" id="main">
              <!-- Navbar Start -->
              @include('includes.navbar')
              <!-- Navbar End -->

              <!-- CHECKOUT-->
              <div class="checkout container my-5" data-aos="fade-up" data-aos-duration="1500">
                
                      <div class="row">
                        
                          <div class="col-md-8">
                              <h1 align="center">Checkout</h1>
                              
                                  <div class="form-group">
                                      <label for="first-name">Userame</label>
                                      <input name ="username" type="text" class="form-control" id="shipping-name"
                                          placeholder="Enter your first name" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="address">Address</label>
                                      <input name = "address" type="text" class="form-control" id="shipping-address"
                                          placeholder="Enter your shipping address" required>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="contact">Phone</label>
                                      <input name="contact" type="text" class="form-control" id="contact"
                                          placeholder="Enter your phone number" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="email">Email</label>
                                      <input name="email" type="text" class="form-control" id="email"
                                          placeholder="Enter your email address" required>
                                  </div>
                                  
                                  <br><br>
                              
                          </div><br><br>

                          <div class="col-md-4">
                              <h2 align="center">Order Summary</h2>
                              <table class="table">
                              <?php
                                $subtotal = 0;
                              ?>
                                  <thead>
                                      <tr>
                                          <th><h5>Item</h5></th>
                                          <th><h5>Price</h5></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                    $i=1;
                                    while($row = mysqli_fetch_array($result)) {

                                        ?>
                                      <tr>
                                          <td><?php echo $row['productname'] ?> x 1</td>
                                          <td>Rs. <?php echo $row['price'] ?></td>
                                      </tr>

                                  <?php
                                  $subtotal += $row['price'];
                                  $i++;
                                    }
                                  ?>
                                      <tr>
                                          <td style="color: rgba(233, 82, 118)"><h6>Subtotal</h6></td>
                                          <td><h6>Rs. <?php echo $subtotal?></h6></td>
                                      </tr>
                                      <tr>
                                          <td style="color: rgba(233, 82, 118)"><h6>Shipping</h6></td>
                                          <td><h6>Rs.250</h6></td>
                                      </tr>
                                      <tr>
                                          <td style="color: rgba(233, 82, 118)"><h6>Total</h6></td>
                                          <td><h6>Rs. <?php echo $subtotal + 250 ?></h6></td>
                                      </tr>
                                      <tr>
                                          <td colspan="3">
                                              <h4>Cash on delivery</h4>
                                          </td>
                                      </tr>
                                      <!-- Add more rows for additional items -->
                                  </tbody>
                                  <tfoot>
                                      <td colspan="3" align="center" width="100%">
                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmorderModal">
                                              Place Order
                                            </button>
                                      </td>
                                  </tfoot>
                              </table>
                          </div>
                      </div>
                  
              </div>

              <!-- Modal order confirmation-->
        <div class="modal fade" id="confirmorderModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Order Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Are you sure you want to confirm your order?
              </div>
              <div class="modal-footer">
                <button type="button" class="cancel btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button  name="checkout" type="submit" class="confirm btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmedModal">
                  Place Order
                </button>
              </div>
            </div>
          </div>
        </div>
  </form>
  <!-- Modal order confirmed-->
  <div class="modal fade" id="confirmedModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Order Complete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Your order has been confirmed!
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>




    </div>
    <!-- footer -->
    @include('includes.footer')

</body>

</html>