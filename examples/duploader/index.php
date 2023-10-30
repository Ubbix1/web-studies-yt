<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="keyword" content="duploader, dupeloader.tech, official website, duploader.tech contact, contact, apps, blogs, login, sign in, sign up">
   	<meta name="description" content="Official website of Duploader.tech. We are sharing the blogs and youtube videos here. And this website is for sharing some Application and extensions made by people.">
    <meta property="og:title" content="DupLoader.tech"/>
    <meta property="og:description" content="Official website of Duploader.tech. We are sharing the blogs and youtube videos here. And this website is for sharing some Application and extensions made by people"/>
    <meta property="og:image" content="https://duploader.tech/assets/image/duploader.jpg"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="dupeloader.tech">
    <meta property="og:url" content="https://duploader.tech">
	
	<!-- twitter -->
	<meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="This website is for sharing some Application and extensions made by people."/>
    <meta name="twitter:title" content="duploader.tech Free of courses"/>
    <meta name="twitter:image" content="https://duploader.tech/assets/image/duploader.jpg"/>
	
	<!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="https://duploader.tech/assets/favicon/apple-touch-icon.png?v=<?php echo time(); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="https://duploader.tech/assets/favicon/favicon-32x32.png?v=<?php echo time(); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="https://duploader.tech/assets/favicon/favicon-16x16.png?v=<?php echo time(); ?>">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="https://duploader.tech/assets/favicon/android-chrome-192x192.png?v=<?php echo time(); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="https://duploader.tech/assets/favicon/android-chrome-512x512.png?v=<?php echo time(); ?>">
    <link rel="manifest" href="https://duploader.tech/assets/favicon/site.webmanifest?v=<?php echo time(); ?>">

    <!--Bootstrap stylesheet-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--Bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <!-- linking stylesheet-->
	<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/scrollbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/navbar.css?v=<?php echo time(); ?>">

    
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/4145934b9b.js" crossorigin="anonymous"></script>

    <!--Title of the document-->
    <title>Duploader | Official Website</title>
</head>
<body>

    <!--Nav Section -->
        <?php include"./php/navbar.php"; ?>
    <section id="home">
        

        <!-- Home-->

        <div class="container-fluid set-edit ">
            <h1>Welcome to the most advanced website</h1>
            <br>
            <?php
                if(isset($_SESSION['user_id'])){

                } else {
                    echo "<a class='btn btn-outline-dark button' role='button'  href='/php/signup.php'>Sign up</a>";
                    echo "<a class='btn btn-outline-primary button button2' role='button' href='/php/login.php' >Sign in</a>";
                }
            ?>
            <style>
                .button2 {
                    margin-left: 5px;
                }
				img {
					object-fit:cover;
					object-position: top;
				}
				
				.footer-container {
					width: 85%;
				}
            </style>

        </div>

    </section>
	<?php // include("./blog/child_blog.php"); ?>

    <!--card-->

    <section id="card">
        <div class="row card-1">
            <div class="col-lg-4 col-mg-4 col-sm-4 card-2">
                <i class="fa-solid fa-user-secret fa-4x icon"></i>
                <h3>We gives user<br> security</h3>
            </div>
            <div class="col-lg-4 col-mg-4 col-sm-4 card-2">
                <i class="fa-solid fa-shield-halved fa-4x icon"></i>
                <h3>This website is <br>enabled by Antivirus</h3>
            </div>
            <div class="col-lg-4 col-mg-4 col-sm-4 card-2">
                <i class="fa-solid fa-message fa-4x icon"></i>
                <h3>Contact<br> Us</h3>
            </div>
        </div>
    </section>

    <section id="carousel">
   
        <div id="carouselExampleCaptions" class="carousel slide main-container-slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/assets/image/duploader.jpg" class="d-block w-100 image-slide" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Platform</h5>
                  <p>It will work in Android, Linux, iOS, Microsoft platform.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/assets/image/blog_image.jpg" class="d-block w-100 image-slide" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Extension</h5>
                  <p>Here you can find all the types of extension.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/assets/image/main.jpg" class="d-block w-100 image-slide" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Open-source</h5>
                  <p>This website is a Open-source project. You can modify and send the pull request.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    </section>

    <section>
        <div class="row main-container ">
            <div class="container first-container ">
                <img src="/assets/image/image1.jpg" alt="male-profile-image" class="pro-picture">
                <h4><em>Stewart James</em></h4>
                <br>
                <p>This website is very helpful for me</p>
                <br>
                <p><em>Rating</em>: ⭐⭐⭐⭐⭐</p>
            </div>
            <div class="container first-container ">
                <img src="/assets/image/image2.jpg" alt="male-profile-image" class="pro-picture">
                <h4><em>Martha Jhones</em></h4>
                <br>
                <p>This website have all the availabillity of extensions</p>
                <br>
                <p><em>Rating</em>: ⭐⭐⭐⭐</p>
            </div>
        </div>
   <?php include("./php/footer.php"); ?>

    <!--script-->
    <script src="/assets/script/script.js"></script>

</body>
</html>