<!-- 10851366
     CPEN207
     ASAMOAH JESSICA AWURADJOA  -->


<?php include('server.php') ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="loginp.css">

    <title>New Creation Church</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
        <a href="#" class="navbar-brand" id="brand">New Creation Church</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#gallery" class="nav-link" id="linkone">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a href="#footer" class="nav-link" id="linktwo">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Login Form -->
    <section id="header" class="jumbotron text-center">
        <div id="test">
            <h1 id="welcome" class="display-3">WELCOME</h1>
            <form action="loginp.php" method="post" id="loginhm">
            <div id="errors"><?php include('errors.php'); ?></div>
                
                <div class="row">
                    <div class="form-group">
                        <!-- <label for="email" id="align">E-mail</label> -->
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <!-- <label for="password" id="align">Password</label> -->
                        <input type="password" class="form-control" id="password" name="passkey" placeholder="Password"
                            required>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-dark" name="loginbtn">Log In</button>
            </form>
            <p id="newHere">New Here? <a href="registration.php">Sign Up</a></p>
        </div>
    </section>

<!-- About -->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1585488146001-ad909dc865fe?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title">Weekly Sermons</h5>
                            <p class="card-text">When God Closes a Church Door, He Opens a Browser Window. No pew? No problem. New Creation Church has launched online ministry to engage families at home, get weekly sermons from here.
                            </p>
                            <a href="registration.php" class="btn btn-outline-success btn-sm">Watch Sermons</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1553864250-05b20249ee0c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Locations</h5>
                            <p class="card-text">New Creation Church is a large organization with many churches and several different locations. We've made it easier to find a branch near you. With the covid restrictions lifted, we are looking forward to seeing you.</p>
                            <a href="registration.php" class="btn btn-outline-success btn-sm">Find A Branch</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1595707678349-4b3f482bfbd3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
                        <div class="card-body">
                            <h5 class="card-title">NC Kids</h5>
                            <p class="card-text">NC Kids Online has been designed for the best experience on our platform. With
                                careful planning, we’re excited to offer our NewCreationKids ministry online! Tap
                                to learn more about what to expect this weekend at NC Kids.</p>
                            <a href="registration.php" class="btn btn-outline-success btn-sm">Resources</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <section id="footer">
        <p id="contactUs">
            Call us on: 030-234-0983/030-456-8675
        </p>
        E-mail: newcreationchurch@gmail.com
        <p id="design">Designed and built with all the love in the world by Jessica Asamoah</p>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <!-- Javascript for the nav bar -->
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