<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bake O' Clock - Signup Menu</title>
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
            background-image: url("Assets/Images/Background1.png");
            background-size: cover;
            background-position: center;
            height: 100vh;
            background-color: brown;
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
            padding: 30px 0px 0px 0px;
        }

        .input1 {
            outline: none;
            background: transparent;
            padding: 6px 6px;
            font-size: 18px;
            border: none;
            border-bottom: 3px solid white;
            box-shadow: 0 4px 2px -2px gray;
        }

        .myFont {
            font-family: "Pacifico";
            font-weight: 200;
        }

        .myFont32 {
            font-size: 14px;
        }

        .myFont96 {
            font-size: 56px;
        }

        .myFont40 {
            font-size: 22px;
        }

        .myFont36 {
            font-size: 18px;
        }


        body {
            font-family: "Pacifico";
            font-weight: 200;
        }

        .myColor {
            color: #5E4139;
        }

        .myColor2 {
            color: #E46382;
        }

        ::placeholder {
            font-size: 18px;
            color: #e46381c2;
            opacity: 1;
            font-family: "Pacifico";

        }

        :-ms-input-placeholder {
            font-size: 18px;
            color: #e46381c2;
            font-family: "Pacifico";
        }

        ::-ms-input-placeholder {
            font-size: 18px;
            color: #e46381c2;
            font-family: "Pacifico";
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
            transform: scale(1.2);

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
        <div class="container ultapulta">

            <div class="mb-0 kuchBhi marginClass">
                <h1 class="mb-0 myColor myFont myFont32">Signup Menu</h1>
            </div>
            <div id="slide" class="row mt-0 align-items-center">
                <div class="col-md-6 row d-flex justify-content-start justify-content-md-center marginClass">
                    <h1 class="myColor mt-3 myFont myFont96">Bake O' Clock!</h1>
                    <h2 class="myColor2 myFont myFont40">Exquisite Bakers</h2>
                    <form action="config.php" method="get" enctype="multipart/form-dat">
                        <div class="d-flex flex-column">

                            <h3 class="myColor myFont myFont36 mt-3 mb-0">User Name</h3>

                            <input required class="input1 mt-0 h-50" type="text" name="name" id="" placeholder="Enter Your Name">
                            <h3 class="myColor myFont myFont36 mt-3 mb-0">Email</h3>

                            <input required class="input1 mt-0 h-50" type="email" name="email" id=""
                                placeholder="Enter Your Email">
                            <h3 class="myColor myFont myFont36 mt-3 mb-0">Password</h3>
                            <input required class="input1 mt-0 h-50 mb-0" type="password" name="password"
                                placeholder="Enter Your Password">
                            <h3 class="myColor myFont myFont36 mt-3 mb-0">Contact Number</h3>

                            <input required class="input1 mt-0 h-50" type="number" name="contact" id=""
                                placeholder="Enter Your Number">
                            <h3 class="myColor myFont myFont36 mt-3 mb-0">House Address</h3>

                            <input required class="input1 mt-0 h-50" type="text" name="address" id=""
                                placeholder="Enter Your Address">
                        </div>
                        <div class="mt-4 justify-content-center">
                            <button name="saveCustomersSignup"
                                class="hoverButton justify-content-center d-flex align-items-center w-75 mx-auto myFont myFont36 border-0"
                                style="color: white; border-radius: 50px; height: 70px;
                            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">Signup</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 my-5 my-md-auto">
                    <img class="w-100" id="image" src="./Assets/Images/donut.png" alt="">

                </div>

            </div>

            <div class="gap-3 w-100 text-right d-flex justify-content-center justify-content-md-end">
                <img class="logoStyles ms-2" src="./Assets/Images/facebookLogo.png" alt="">
                <img class="logoStyles ms-2" src="./Assets/Images/whatsappLogo.png" alt="">
                <img class="logoStyles ms-2" src="./Assets/Images/twitterLogo.png" alt="">
                <img class="logoStyles ms-2" src="./Assets/Images/instaLogo.png" alt="">
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

</body>

</html>