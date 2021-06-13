<?php 
	session_start(); 

	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: loginp.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location: loginp.php");
	}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="app1.css">

    <title>New Creation Church</title>
</head>

<body>
	<section>
	<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
	</section>

	<nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
        <a href="#" class="navbar-brand">NEW CREATION CHURCH</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">HOME</a>
                </li>
				<li class="nav-item">
                    <a href="loginp.php" class="nav-link">LOG OUT</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col-lg-6 blurb">
                <div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5">
                    <h1 class="">You're Welcome Here!</h1>
                    <p>
                        New Creation Church is one church meeting in multiple locations, and we want to help you become the person God made you to be. No matter where you are in your journey, you’re invited to discover your purpose and live it out at New Creation Church.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1599406079829-a91deeb440de?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
            </div>
        </div>
    </section>

    <section class="container-fluid px-0">
        <div class="row align-items-center content">
            <div class="col-md-6 order-2 order-md-1">
                <img src="https://images.unsplash.com/photo-1578762237719-67fe76a72b6b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=626&q=80" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>WEEKLY SERMONS</h2>
                        <p class="lead">The New Creation Church wants to do everything we can to ensure that our communities are taking the necessary precautions to slow the spread of COVID-19. At the same time, we want to make it possible for everyone to experience the fellowship and Biblical teaching that keeps our faith strong, which is more important now than ever.</p>
                        <a href="sermons.html" class="btn btn-outline-warning btn-lg">Watch Sermons</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center content">
            <div class="col-md-6 text-center">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>FIND A LOCATION</h2>
                        <p class="lead">New Creation Church is a large organization with many churches and several different locations. We've made it easier to find a branch near you. With the covid restrictions lifted, we are looking forward to seeing you.</p>
                        <a href="location.html" class="btn btn-outline-success btn-lg">Find A Location</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1516503424803-708327384b90?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=666&q=80" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center content">
            <div class="col-md-6 order-2 order-md-1">
                <img src="https://images.unsplash.com/photo-1564429238817-393bd4286b2d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>NC KIDS ONLINE</h2>
                        <p class="lead">Our NC Kids team had a problem to solve: how do we continue to do meaningful church experiences while our campuses are closed? The team hit the studio and created full-length video services that include worship, a message, interactive elements, discussion time, and more!</p>
                        <a href="kids.html" class="btn btn-outline-warning btn-lg">Materials For Kids</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <p id="contactUs">
            Call us on: 030-234-0983/030-456-8675
        </p>
        E-mail: newcreationchurch@gmail.com
        <p id="design">Designed and built with all the love in the world by Jessica Asamoah</p>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>
		
</body>
</html>