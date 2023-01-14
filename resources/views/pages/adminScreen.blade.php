<?php
//include_once '/config';
//session_start();
$db = mysqli_connect('localhost', 'root', '', 'mybakery');
$result = mysqli_query($db,"SELECT * FROM products");
$result2 = mysqli_query($db,"SELECT * FROM customers");
$result3 = mysqli_query($db,"SELECT * FROM orders");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bake O' Clock - Admin Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Cookie|Josefin Sans">
    <style>
        #slide {
            position: relative;
            left: -1500px;
            -webkit-animation: slide 0.5s forwards;
            -webkit-animation-delay: 0.2s;
            animation: slide 0.5s forwards;
            animation-delay: 0.2s;
        }
        a{
            color: #212529;
            text-decoration: none;
        }
        
        }
        a:active {
            color: #48AE9C;
        }
        a:hover {
            color: #48AE9C;
            
        }
        @-webkit-keyframes slide {
            100% {
                left: 0px;
            }
        }

        @keyframes slide {
            100% {
                left: 0px;
            }
        }

        #image {
            animation-name: monFrame;
            animation-duration: 3s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
            /* margin-left: 30px;
            margin-top: 5px; */
            /* position: relative;
            animation: monFrame 5s linear 2s infinite alternate; */

        }

        @keyframes monFrame {
            0% {
                transform: translate(0, 0px);
            }

            50% {
                transform: translate(0, 15px);
            }

            100% {
                transform: translate(0, -0px);
            }

            /* 0% {

                top: 0px;
            }

            25% {

                top: 20px;
            }

            50% {

                top: 20px;
            }

            75% {

                top: 20px;
            }

            100% {

                top: 0px;
            } */
        }

        .height {

            height: 100vh;
            background-color: brown;
            overflow: hidden;
        }

        .ultapulta {

            display: flex;
            flex-direction: column;
            width: 100%;
            justify-content: center;
            align-items: center;

        }

        .kuchBhi {
            width: 100%;
            text-align: left;
            padding: 30px 0px 30px 0px;
        }

        .input1 {
            outline: none;
            background: transparent;
            padding: 3px 3px;
            font-size: 16px;
            border: none;
            border-bottom: 3px solid white;
            box-shadow: 0 4px 2px -2px gray;
        }

        .myFont {
            font-family: "Josefin Sans";
            font-weight: 200;
        }

        .myFont32 {
            font-size: 18px;
        }

        .myFont96 {
            font-size: 66px;
        }

        .myFont40 {
            font-size: 26px;
        }

        .myFont36 {
            font-size: 22px;
        }


        body {
            font-family: "Josefin Sans";
            font-weight: 200;
        }

        .myColor {
            color: #5E4139;
        }

        .myColor2 {
            color: #F4E6DC;
        }

        ::placeholder {
            font-size: 16px;
            color: #e46381c2;
            opacity: 1;
            font-family: "Josefin Sans";

        }

        :-ms-input-placeholder {
            font-size: 16px;
            color: #e46381c2;
            font-family: "Josefin Sans";
        }

        ::-ms-input-placeholder {
            font-size: 16px;
            color: #e46381c2;
            font-family: "Josefin Sans";
        }

        /* .marginClass {
            margin-left: -200px;
        } */
        .hoverButton {
            background-color: #48AE9C;
            transition: all 0.5s ease-in-out;
        }

        .hoverButton:hover {

            background-color: #176153;
        }

        .logoStyles {
            width: 50px;
            transition: all 0.2s ease-in-out;

        }

        .logoStyles:hover {
            cursor: pointer;
            border-radius: 20px 20px 20px 20px;
            transform: scale(1.1);
            background-color: white;

        }

        .leftSideDiv {
            background-color: #33211E;
        }

        .rightSideDiv {
            background-image: url("Assets/Images/Background1.png");
            background-size: cover;
            background-position: center;
            height: 100%;
            /* height: 100vh; */
        }

        .sideButtons {
            background-color: none;
            background: transparent;
            border: none;
            border-bottom: 3px solid white;
            box-shadow: 0 4px 2px -2px gray;
            transition: all 0.3s ease-in-out;
        }

        .sideButtons:hover {
            color: #33211E;
            background-color: white;
        }

        .transparentDiv {
            background-color: rgba(255, 255, 255, 0.68);
        }

        .hoverEffect {
            transition: all 0.3s ease-in-out;
        }

        .hoverEffect:hover {
            color: #48AE9C;
        }

        .someClass {
            height: 100%;
            width: 100%;

        }

        /* Style the tab content */
        .tabcontent {
            display: none;
        }
        
        .form-popup {

            display: none;
            background-color: white;
            position: fixed;
            border: 2px solid black;
            border-radius: 20px 20px 20px 20px;
            border-top: 0px;

            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }

        .table-responsive{
            height: 45%;
        }

        .tableModifications{
            height: 100%;
            overflow-y : scroll;
            
            scrollbar-width: thin;
            scrollbar-color: red blue;

        }
        .tableModifications2{
            overflow-y : scroll;
            scrollbar-width: thin;
            scrollbar-color: red blue;
        }
        html {
            scroll-behavior: smooth;
        }
        .tableModifications2::-webkit-scrollbar {
            width: 11px;
        }
        
        .tableModifications2::-webkit-scrollbar-track {
        
        background: transparent;
        border-radius: 20px 20px 20px 20px;
        }
        .tableModifications2::-webkit-scrollbar-thumb {
        background-color:  #33211E;
        border-radius: 6px;
        border: 2px solid black;
        
        }
        .tableImage { 
            
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            /* box-shadow:0px 0px 0px 2px black inset; */
        }
        @media only screen and (max-width: 768px) {
            .marginClass {
                margin-left: 0px;
            }

            .height {
                height: auto;
            }
        }

        @media only screen and (max-width: 1100px) {
            .marginClass {
                margin-left: 0px;
            }

            .height {
                height: auto;
            }
        }
    </style>
</head>

<body>
        
    <main class="containter-fluid height">
        <div class="row p-0 mx-0 gap-0 someClass">
            <div class="col-md-3 leftSideDiv mx-0">
                <div class="d-flex flex-column mt-2 h-100 justify-content-center align-items-center">
                    <img class="w-50" src="./Assets/Images/BakeryLogo.png" alt="">
                    <div class="w-100 mt-5 h-100 d-flex flex-column myFont myFont40 tab ">
                        <button class="p-1 mt-4 sideButtons myColor2 tablinks"
                            onclick="openData(event, 'Products')">Products</button>
                        <button class=" p-1 mt-4 sideButtons myColor2 tablinks"
                            onclick="openData(event, 'Customers')">Customers</button>
                        <button class=" p-1 mt-4 sideButtons myColor2 tablinks"
                            onclick="openData(event, 'Orders')">Orders</button>
                        <div class=" w-100 h-100 py-3 justify-content-end d-flex flex-column myFont myFont40 ">
                            <p class=" mb-0 myFont32 myColor2 text-center" style="font-family: Josefin Sans;">@2023
                                <br>Bake
                                O'
                                Clock
                                <br>All Rights
                                Reserved
                            </p>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-9 p-0 mx-0 gap-0">
                <div class="rightSideDiv me-0">

                    <!-- HEADER DATA -->

                    <div class="row">
                        <h1 class="col-md-4 myFont p-4"> Admin Menu</h1>
                        <div class="col-md-5 p-4"></div>
                        <button class="col-md-1 align-items-end myFont36 p-4 hoverEffect"
                            style="background: transparent; border: none;"><a href="/">Home</a></button>
                        <button class="col-md-2 align-items-end myFont36 p-4 hoverEffect"
                            style="background: transparent; border: none;"><a href="/about">About</a>
                            Us</button>
                    </div>

                    <!-- ADD REMOVE DELETE BUTTONS for Products and Product Data -->
                    <div id="Products" class="h-100 tabcontent">
                        <div name="Buttons" class="d-flex container-fluid ">
                            <button style="border-radius: 20px 0px 0px 20px;"
                                class="gap-0 p-3 myFont36 w-25 logoStyles transparentDiv"
                                onclick="openFormSearch()">Search</button>
                            <button class="gap-0 p-3 myFont36 w-25 logoStyles transparentDiv "
                                onclick="openFormAdd()">Add</button>
                            <button class="gap-0 p-3 myFont36 w-25 logoStyles transparentDiv"
                                onclick="openFormDelete()">Delete</button>
                            <button style="border-radius: 0px 20px 20px 0px; "
                                class="gap-0 p-3 myFont36 w-25 logoStyles transparentDiv"
                                onclick="openFormUpdate()">Update</button>
                        </div>


                        <!-- Pop Up Form for Products -->
                        <!-- SEARCH -->
                        <div class="form-popup mx-3 align-items-center" id="myFormSearch">
                            <form class="form-container p-3" action="config.php">
                                <h2>Search Product</h2>
                                <p class="myFont32">Enter the Name to Search</p>
                                <label for="name"><b>Name</b></label>
                                <input class="input1" type="text" placeholder="Enter Name" name="name" required>

                                <label for="Price"><b>Price</b></label>
                                <input class="input1" type="number" placeholder="Enter Price" name="price" disabled>

                                <label for="Quantity"><b>Quantity</b></label>
                                <input class="input1" type="number" placeholder="Enter Quantity" name="quantity"
                                    disabled>

                                <button name="save" type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                        </div>
                        <!-- ADD -->
                        <div class="form-popup mx-3 " id="myFormAdd">
                            <form class="form-container p-3 " action="config.php" method="post" enctype="multipart/form-data">
                                <h2>Add Product</h2>

                                <label for="name"><b>Name</b></label>
                                <input class="input1" type="text" placeholder="Enter Name" name="name" required>
                                <label for="description"><b>Description</b></label>
                                <input class="input1" type="text" placeholder="Enter Description" name="description" required>
                                                                
                                <label for="Price"><b>Price</b></label>
                                <input class="input1" type="number" placeholder="Enter Price" name="price" required>
                                <br><br>
                                <label for="Quantity"><b>Quantity</b></label>
                                <input class="input1" type="number" placeholder="Enter Quantity" name="quantity"
                                    required>

                                <label for="image"><b>Image</b></label>
                                <input class="input1" type="file" placeholder="Attach File" name="image" required>
                                  

                                <button name="save" type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                        </div>

                        <!-- DELETE -->
                        <div class="form-popup mx-3 " style="right: 0;" id="myFormDelete">
                            <form class="form-container p-3" action="config.php" method="get">
                                <h2 class="mx-4 text-end">Remove Product</h2>
                                <p class="myFont32">Enter the Name to Remove</p>
                                <label for="name"><b>Name</b></label>
                                <input class="input1" type="text" placeholder="Enter Name" name="name" required>

                                <button name="delete" type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>

                            </form>
                        </div>
                        <!-- UPDATE -->
                        <div class="form-popup mx-3" style="right: 0;" id="myFormUpdate">
                            <form class="form-container p-3" action="config.php" method="post" enctype="multipart/form-data">
                                <h2 class="mx-4 text-end">Update Product Data</h2>
                                <label for="name"><b>Name</b></label>
                                <input id = "nameFieldProduct" class="input1" type="text" placeholder="Enter Name" name="name" required>
                                <label for="description"><b>Description</b></label>
                                <input id = "descriptionFieldProduct" class="input1" type="text" placeholder="Enter Description" name="description">
                                                                
                                <label for="Price"><b>Price</b></label>
                                <input id = "priceFieldProduct" class="input1" type="number" placeholder="Enter Price" name="price">
                                <br><br>
                                <label for="Quantity"><b>Quantity</b></label>
                                <input id = "quantityFieldProduct" class="input1" type="number" placeholder="Enter Quantity" name="quantity">

                                <label for="image"><b>Image</b></label>
                                <input class="input1" type="file" placeholder="Attach File" name="image">

                                <button name="update" type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                        </div>

                        <!-- Table Data of the Products -->

                        
                        <div class="mt-4 mx-3 transparentDiv h-50 tableModifications2"
                            style=" border-radius: 20px 20px 20px 20px; border: 2px solid black; overflow-y:scroll;">
                            <div class="table-responsive">
                                <!-- My Table -->
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                ?>
                                <table class="table tableModifications">
                                 <thead>       
                                    <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                    </tr>
                                </thead>
                                <?php
                                $i=1;
                                while($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr >
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><img class="tableImage" src="data:image/jpeg;base64,<?php echo base64_encode( $row['image'] ); ?> " width='150' height='100' " /></td>
                                    <!-- <td><?php echo $row["image"]; ?></td> -->
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["description"]; ?></td>
                                    <td><?php echo $row["price"]; ?></td>
                                    <td><?php echo $row["quantity"]; ?></td>
                                
                                </tr>
                                <?php
                                $i++;
                                }
                                ?>
                                </table>
                                <?php
                                }
                                else{
                                    echo "No result found";
                                }
                                ?>
                                
                            </div>
                        </div>


                    </div>


                    <!-- ADD REMOVE DELETE BUTTONS For Customers -->
                    <div id="Customers" class="tabcontent">
                        <div name="Buttons" class="d-flex container-fluid">
                            <button style="border-radius: 20px 0px 0px 20px;"
                                class="gap-0 p-3 myFont36 w-25 logoStyles transparentDiv"
                                onclick="openFormSearch()">Search</button>
                            <button class="gap-0 p-3 myFont36 w-25 logoStyles transparentDiv "
                                onclick="openFormAdd()">Add</button>
                            <button class="gap-0 p-3 myFont36 w-25 logoStyles transparentDiv"
                                onclick="openFormDelete()">Delete</button>
                            <button style="border-radius: 0px 20px 20px 0px; "
                                class="gap-0 p-3 myFont36 w-25 logoStyles transparentDiv"
                                onclick="openFormUpdate()">Update</button>
                        </div>

                        <!-- Pop Up Form for Customers -->
                        <!-- SEARCH -->
                        <div class="form-popup mx-3" id="myFormCustomersSearch">
                            <form class="form-container p-3" action="config.php" method="get" enctype="multipart/form-data">
                                <h2>Search Customer</h2>
                                <p class="myFont32">Enter the User Name to Search</p>
                                <label for="username"><b>User Name</b></label>
                                <input class="input1" type="text" placeholder="Enter Name" name="username" required>

                                <label for="email"><b>Email</b></label>
                                <input class="input1" type="email" placeholder="Email" name="email">
                                <label for="contact"><b>Contact</b></label>
                                <input class="input1" type="number" place" Number" name="contact"
                                    disabled>

                                <label for="address"><b>Address</b></label>
                                <input class="input1" type="text" placeholder="Quantity" name="address" disabled>
                                <br><br>
                                <button name = "searchCustomers" type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                        </div>
                        <!-- ADD -->
                        <div class="form-popup mx-3 " id="myFormCustomersAdd">
                            <form class="form-container p-3" action="config.php" method="get" enctype="multipart/form-data">
                                <h2>Add Customer</h2>

                                <label for="username"><b>User Name</b></label>
                                <input class="input1" type="text" placeholder="Enter User Name" name="username"
                                    required>

                                <label for="email"><b>Email</b></label>
                                <input class="input1" type="email" placeholder="Enter Email" name="email" required>

                                <label for="password"><b>Password</b></label>
                                <input class="input1" type="password" placeholder="Enter Password" name="password"
                                    required>
                                <label for="contact"><b>Contact</b></label>
                                <input class="input1" type="text" placeholder="Enter Contact Number" name="contact"
                                    required>
                                <br><br>
                                <label for="address"><b>Address</b></label>
                                <input class="input1 mx-md-4" type="text" placeholder="Enter Address"
                                    name="address" required>
                                <br><br>
                                <button name="saveCustomers" type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                        </div>

                        <!-- DELETE -->
                        <div class="form-popup mx-3 " style="right: 0;" id="myFormCustomersDel">
                            <form class="form-container p-3" action="config.php" method="get" enctype="multipart/form-data">
                                <h2 class="mx-4 text-end">Remove Customer Data</h2>
                                <p class="myFont32">Enter the Email to Remove</p>

                                <label for="email"><b>Email</b></label>
                                <input class="input1" type="email" placeholder=" Email" name="email">
                                <br><br>
                                <button name = "deleteCustomers" type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>

                            </form>
                        </div>
                        <!-- UPDATE -->
                        <div class="form-popup mx-3" style="right: 0;" id="myFormCustomersUpdate">
                            <form class="form-container p-3" action="config.php" method="get" enctype="multipart/form-data">
                                <h2 class="mx-4 text-end">Update Customer Data</h2>
                                <p class="myFont32">Enter the Credentials to be updated</p>
                                <label for="username"><b>User Name</b></label>
                                <input class="input1" type="text" placeholder="Enter User Name" name="username"
                                    required>

                                <label for="email"><b>Email</b></label>
                                <input class="input1" type="email" placeholder="Enter Email" name="email" required>

                                <label for="password"><b>Password</b></label>
                                <input class="input1" type="password" placeholder="Enter Password" name="password"
                                    required>
                                <label for="contact"><b>Contact</b></label>
                                <input class="input1" type="text" placeholder="Enter Contact Number" name="contact"
                                    required>
                                <br><br>
                                <label for="address"><b>Address</b></label>
                                <input class="input1 mx-md-4" type="text" placeholder="Enter Address"
                                    name="address" required>
                                <br><br>
                                
                                <button name="updateCustomers" type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                        </div>

                        <!-- Table Data of the Customers -->
                        <div class="mt-4 mx-3 transparentDiv h-50 tableModifications2"
                            style=" border-radius: 20px 20px 20px 20px; border: 2px solid black;">
                            <div class="table-responsive">
                                <!-- My Table -->
                                <?php
                                if (mysqli_num_rows($result2) > 0) {
                                ?>
                                <table class="table tableModifications">
                                 <thead>       
                                    <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact No.</th>
                                            <th scope="col">House Address</th>
                                    </tr>
                                </thead>
                                <?php
                                $i=1;
                                while($row = mysqli_fetch_array($result2)) {
                                ?>
                                <tr >
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["contact"]; ?></td>
                                    <td><?php echo $row["address"]; ?></td>
                                
                                </tr>
                                <?php
                                $i++;
                                }
                                ?>
                                </table>
                                <?php
                                }
                                else{
                                    echo "No result found";
                                }
                                ?>
                                
                            </div>
                        </div>
                    </div>

                    <!-- ADD REMOVE DELETE BUTTONS for ORDERS-->
                    <div id="Orders" class="tabcontent">

                        <div name="Buttons" class="container-fluid d-flex justify-content-center ">
                            <button style="border-radius: 20px 0px 0px 20px;"
                                class="gap-0 p-3 myFont36 w-25 logoStyles transparentDiv"
                                onclick="openFormSearch()">Search</button>
                            <button class="gap-0 p-3 myFont36 w-25 logoStyles transparentDiv"
                                onclick="openFormDelete()">Delete</button>
                            <button style="border-radius: 0px 20px 20px 0px; "
                                class="gap-0 p-3 myFont36 w-25 logoStyles transparentDiv"
                                onclick="openFormUpdate()">Update</button>
                        </div>

                        <!-- Pop Up Form for Orders -->
                        <!-- SEARCH -->
                        <div class="form-popup mx-3" id="myFormOrdersSearch">
                            <form class="form-container p-3" action="config.php" method="get" enctype="multipart/form-data">
                                <h2>Search Orders</h2>
                                <p class="myFont32">Enter the Name to Search</p>
                                <label for="name"><b>Name</b></label>
                                <input class="input1" type="text" placeholder="Enter Name" name="name" required>

                                <label for="Price"><b>Price</b></label>
                                <input class="input1" type="number" placeholder="Enter Price" name="price" required>

                                <label for="Quantity"><b>Quantity</b></label>
                                <input class="input1" type="number" placeholder="Enter Quantity" name="quantity"
                                    required>

                                <button type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                        </div>

                        <!-- ADD -->
                        <div class="form-popup mx-3 " id="myFormOrdersAdd">
                            <form class="form-container p-3">
                                <h2>Add Product</h2>

                                <label for="name"><b>Name</b></label>
                                <input class="input1" type="text" placeholder="Enter Name" name="name" required>

                                <label for="Price"><b>Price</b></label>
                                <input class="input1" type="number" placeholder="Enter Price" name="price" required>

                                <label for="Quantity"><b>Quantity</b></label>
                                <input class="input1" type="number" placeholder="Enter Quantity" name="quantity"
                                    required>

                                <button type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                        </div>

                        <!-- DELETE -->
                        <div class="form-popup mx-5" style="right: 0;" id="myFormOrdersDel">
                            <form class="form-container p-3" action="config.php" method="get" enctype="multipart/form-data">
                                <h2 class="mx-4 text-end">Remove Orders Data</h2>
                                <p class="myFont32">Enter the Order ID to Remove</p>
                                <label for="orderid"><b>Order Id</b></label>
                                <input class="input1" type="text" placeholder="Enter Order ID" name="orderid" required>

                                <button name="deleteOrders" type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                        </div>
                        <!-- UPDATE -->
                        <div class="form-popup mx-3" style="right: 0;" id="myFormOrdersUpdate">
                            <form class="form-container p-3" action="config.php" method="get" enctype="multipart/form-data">
                                <h2 class="mx-4 text-end">Update Orders Data</h2>
                                <label for="orderid"><b>Order Id</b></label>
                                <input class="input1" type="text" placeholder="Enter Order ID" name="orderid" required>

                                <label for="contact"><b>Contact No.</b></label>
                                <input class="input1" type="text" placeholder="Enter Contact No." name="contact" required>

                                <label for="address"><b>House Address</b></label>
                                <input class="input1" type="text" placeholder="Enter House Address" name="address"
                                    required>

                                <button name="updateOrders" type="submit" class="btn">Confirm</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                        </div>


                        <!-- Table Data of the Orders -->

                        <div class="mt-4 mx-3 transparentDiv h-50 tableModifications2"
                            style=" border-radius: 20px 20px 20px 20px; border: 2px solid black;">
                            <div class="table-responsive">
                                <!-- My Table -->
                                <?php
                                if (mysqli_num_rows($result3) > 0) {
                                ?>
                                <table class="table tableModifications">
                                 <thead>       
                                    <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Contact No.</th>
                                            <th scope="col">House Address</th>
                                            <th scope="col">Items Bought</th>
                                            <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <?php
                                $i=1;
                                while($row = mysqli_fetch_array($result3)) {
                                ?>
                                <tr >
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><?php echo $row["orderid"]; ?></td>
                                    <td><?php echo $row["customername"]; ?></td>
                                    <td><?php echo $row["customercontact"]; ?></td>
                                    <td><?php echo $row["customeraddress"]; ?></td>
                                    <td><?php echo $row["numofproducts"]; ?></td>
                                    <td><?php echo $row["date"]; ?></td>
                                </tr>
                                <?php
                                $i++;
                                }
                                ?>
                                </table>
                                <?php
                                }
                                else{
                                    echo "No result found";
                                }
                                ?>
                                
                            </div>
                        </div>


                    </div>
                </div>
    </main>

    <script>
        
        function openData(evt, dataName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(dataName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        function openFormSearch() {
            document.getElementById("myFormSearch").style.display = "block";
            document.getElementById("myFormAdd").style.display = "none";
            document.getElementById("myFormDelete").style.display = "none";
            document.getElementById("myFormUpdate").style.display = "none";

            document.getElementById("myFormCustomersSearch").style.display = "block";
            document.getElementById("myFormCustomersAdd").style.display = "none";
            document.getElementById("myFormCustomersDel").style.display = "none";
            document.getElementById("myFormCustomersUpdate").style.display = "none";

            document.getElementById("myFormOrdersSearch").style.display = "block";
            document.getElementById("myFormOrdersAdd").style.display = "none";
            document.getElementById("myFormOrdersDel").style.display = "none";
            document.getElementById("myFormOrdersUpdate").style.display = "none";
        }
        function openFormAdd() {
            document.getElementById("myFormAdd").style.display = "block";
            document.getElementById("myFormSearch").style.display = "none";
            document.getElementById("myFormDelete").style.display = "none";
            document.getElementById("myFormUpdate").style.display = "none";

            document.getElementById("myFormCustomersSearch").style.display = "none";
            document.getElementById("myFormCustomersAdd").style.display = "block";
            document.getElementById("myFormCustomersDel").style.display = "none";
            document.getElementById("myFormCustomersUpdate").style.display = "none";

            document.getElementById("myFormOrdersSearch").style.display = "none";
            document.getElementById("myFormOrdersAdd").style.display = "block";
            document.getElementById("myFormOrdersDel").style.display = "none";
            document.getElementById("myFormOrdersUpdate").style.display = "none";
        }
        function openFormDelete() {
            document.getElementById("myFormDelete").style.display = "block";
            document.getElementById("myFormSearch").style.display = "none";
            document.getElementById("myFormAdd").style.display = "none";
            document.getElementById("myFormUpdate").style.display = "none";

            document.getElementById("myFormCustomersSearch").style.display = "none";
            document.getElementById("myFormCustomersAdd").style.display = "none";
            document.getElementById("myFormCustomersDel").style.display = "block";
            document.getElementById("myFormCustomersUpdate").style.display = "none";

            document.getElementById("myFormOrdersSearch").style.display = "none";
            document.getElementById("myFormOrdersAdd").style.display = "none";
            document.getElementById("myFormOrdersDel").style.display = "block";
            document.getElementById("myFormOrdersUpdate").style.display = "none";
        }
        function openFormUpdate() {
            document.getElementById("myFormUpdate").style.display = "block";
            document.getElementById("myFormAdd").style.display = "none";
            document.getElementById("myFormDelete").style.display = "none";
            document.getElementById("myFormSearch").style.display = "none";

            document.getElementById("myFormCustomersSearch").style.display = "none";
            document.getElementById("myFormCustomersAdd").style.display = "none";
            document.getElementById("myFormCustomersDel").style.display = "none";
            document.getElementById("myFormCustomersUpdate").style.display = "block";

            document.getElementById("myFormOrdersSearch").style.display = "none";
            document.getElementById("myFormOrdersAdd").style.display = "none";
            document.getElementById("myFormOrdersDel").style.display = "none";
            document.getElementById("myFormOrdersUpdate").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myFormAdd").style.display = "none";
            document.getElementById("myFormSearch").style.display = "none";
            document.getElementById("myFormDelete").style.display = "none";
            document.getElementById("myFormUpdate").style.display = "none";

            document.getElementById("myFormCustomersSearch").style.display = "none";
            document.getElementById("myFormCustomersAdd").style.display = "none";
            document.getElementById("myFormCustomersDel").style.display = "none";
            document.getElementById("myFormCustomersUpdate").style.display = "none";

            document.getElementById("myFormOrdersSearch").style.display = "none";
            document.getElementById("myFormOrdersAdd").style.display = "none";
            document.getElementById("myFormOrdersDel").style.display = "none";
            document.getElementById("myFormOrdersUpdate").style.display = "none";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

</body>

</html>