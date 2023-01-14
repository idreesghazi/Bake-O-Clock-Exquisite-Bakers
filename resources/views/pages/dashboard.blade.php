<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')

</head>

<body>
@include('includes.aos-animation')
        
      </script>
    <!-- Animation -->
    <div class="patterns" id="pattern">
        <svg width="100%" height="100%">
            <defs>
                <pattern id="polka-dots" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                    <circle fill="#BD9C7E" cx="25" cy="25" r="3"></circle>
                </pattern>
            </defs>

            <rect x="0" y="0" width="100%" height="100%" fill="url(#polka-dots)"> </rect>

            <text x="50%" y="50%" text-anchor="middle">
                Bake O'Clock
            </text>
        </svg>
    </div>

    
    <div class="main" id="main">
        <!-- Navbar Start -->
        @include('includes.navbar')
        <!-- Navbar End -->

        <!-- Carousel -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('Images/donuts.png') }}" class="d-block w-100" alt="description of myimage">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>We create delicious memories!</h5>
                        <p>It’s sweet, it’s light, it’s flaky and buttery. It’s right here.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Images/cookies.png') }}" class="d-block w-100" alt="description of myimage">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>We create delicious memories!</h5>
                        <p>It’s sweet, it’s light, it’s flaky and buttery. It’s right here.</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="{{ asset('Images/cupcakes.png') }}" class="d-block w-100" alt="description of myimage">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>We create delicious memories!</h5>
                        <p>It’s sweet, it’s light, it’s flaky and buttery. It’s right here.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel end -->

         <!-- About -->
         @include('includes.about us')


        <!-- Contact Start -->
        @include('includes.contact us')
    <!-- Contact End -->

         <!-- footer -->
        @include('includes.footer')

    </div>

     <!-- Animation display timeout -->
    <script>
        document.querySelector('.main').style.display = 'none';
        document.getElementById('pattern').classList.add('patterns');

        setTimeout(() => {
            document.querySelector('.patterns').style.display = 'none';
            document.querySelector('.main').style.display = 'block';
        }, 6000);
    </script>

</body>

</html>