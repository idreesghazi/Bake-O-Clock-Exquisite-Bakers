<?php 
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'mybakery');
    

    // initializing variables
    
    $name = "";
    $description="";
    $price = 0;
    $quantity = 0;
    $id = 0;
    $update = false;

    if (isset($_POST['save'])) {
        
        // $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        // $image = $_POST['image'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        //$image = $request->file('image');
    

        mysqli_query($db, "INSERT INTO products (image, name, description, price, quantity) VALUES ('$image' , '$name', '$description' , '$price', '$quantity')"); 
        $_SESSION['message'] = "Address saved"; 
        header('location: /admin');
        exit();
    }
    
    if (isset($_GET['delete'])) {
        $name = $_GET['name'];
    
        
        mysqli_query($db, "Delete from products where name =" . "'" . $name . "'");
       
        $_SESSION['message'] = "Address saved"; 
        header('location: /admin');
        exit();
    }
    if (isset($_POST['update'])) {
        
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        
        mysqli_query($db, "UPDATE products SET image = '$image', name = '$name', description = '$description', price = '$price', quantity = '$quantity'  where name =" . "'" . $name . "'");
       
        $_SESSION['message'] = "Address saved"; 
        header('location: /admin');
        exit();
    }
    if (isset($_GET['saveCustomers'])) {
        
        $username = $_GET['username'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $contact = $_GET['contact'];
        $address = $_GET['address'];
    
    

        mysqli_query($db, "INSERT INTO customers (username, email, password, contact, address) VALUES ('$username' , '$email', '$password' , '$contact', '$address')"); 
        $_SESSION['message'] = "Address saved"; 
        header('location: /admin');
        exit();
    }
    if (isset($_GET['deleteCustomers'])) {
        $email = $_GET['email'];
    
        
        mysqli_query($db, "Delete from customers where email =" . "'" . $email . "'");
       
        $_SESSION['message'] = "Address saved"; 
        header('location: /admin');
        exit();
    }
    if (isset($_GET['updateCustomers'])) {
        
        $username = $_GET['username'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $contact = $_GET['contact'];
        $address = $_GET['address'];
        
        mysqli_query($db, "UPDATE customers SET username = '$username', email = '$email', password = '$password', contact = '$contact', address = '$address'  where email =" . "'" . $email . "'");
       
        $_SESSION['message'] = "Address saved"; 
        header('location: /admin');
        exit();
    }
    if (isset($_GET['deleteOrders'])) {
        $orderid = $_GET['orderid'];
    
        
        mysqli_query($db, "Delete from orders where orderid =" . "'" . $orderid . "'");
       
        $_SESSION['message'] = "Address saved"; 
        header('location: /admin');
        exit();
    }
    if (isset($_GET['updateOrders'])) {
        
        $orderid = $_GET['orderid'];
        $contact = $_GET['contact'];
        $address = $_GET['address'];
        
        mysqli_query($db, "UPDATE orders SET customercontact = '$contact', customeraddress = '$address'  where orderid =" . "'" . $orderid . "'");
       
        $_SESSION['message'] = "Address saved"; 
        header('location: /admin');
        exit();
    }
    if (isset($_GET['login'])) {
        
        $name = $_GET['name'];
        $password = $_GET['password'];
        if ($name == 'admin' && $password == 'admin'){
            header("Location: /admin");
            exit();
        }
        
        $res = mysqli_query($db, "SELECT * FROM customers WHERE username = '$name' and password = '$password'");
        setcookie("username", $name, time() + 2 * 24 * 60 * 60);
       
        
        if (mysqli_num_rows($res) > 0) {
            $_SESSION['message'] = "Address saved"; 
            header('location: /');
        }
        else{
            echo "no Data Found";
            header("Location: /login");
            exit();
        }
        
    }
    if (isset($_GET['saveCustomersSignup'])) {
        
        $username = $_GET['name'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $contact = $_GET['contact'];
        $address = $_GET['address'];
    
    

        mysqli_query($db, "INSERT INTO customers (username, email, password, contact, address) VALUES ('$username' , '$email', '$password' , '$contact', '$address')"); 
        $_SESSION['message'] = "Address saved"; 
        //header('location: loginScreen.blade.php');
        header("Location: /login");
        exit();
    }

    if (isset($_GET['addtocart'])) {
        
        $name = $_GET['productname'];
        $username = $_COOKIE['username'];
        $price = $_GET['price'];
        $quantity = $_GET['quantity'];
    

        mysqli_query($db, "INSERT INTO mycart (productname, username, price, quantity) VALUES ('$name', '$username' , '$price', '$quantity')"); 
        $_SESSION['message'] = "Address saved"; 
        header('location: /products');
        exit();
    }

    if (isset($_POST['checkout'])) {
        
        $orderid = rand(0,1000);
        $username = $_POST['username'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $today = date("Y-m-d H:i:s");
        $quantity = 0;
        $result = mysqli_query($db,"SELECT * FROM mycart where username = '$username'");
        while ($row = mysqli_fetch_array($result)) {
            $quantity++;
        }
        mysqli_query($db, "INSERT INTO orders (orderid, customername, customercontact, customeraddress, numofproducts, date) VALUES ('$orderid', '$username' , '$contact', '$address', '$quantity', '$today')");
        mysqli_query($db, "DELETE from mycart where username = '$username'");
        $_SESSION['message'] = "Address saved"; 
        header('location: /products');
        exit();
    }
    if (isset($_POST['deleteCartItem'])) {
        $name = $_POST['name'];
    // dd($name);
        
        mysqli_query($db, "Delete from mycart where productname =" . "'" . $name . "'");
       
        $_SESSION['message'] = "Address saved"; 
        header('location: /products');
        exit();
    }

?>