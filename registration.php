<!-- 10851366
     CPEN207
     ASAMOAH JESSICA AWURADJOA -->


<?php include('server.php') ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="userregistration.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>New Creation Church</title>
</head>

<body class="bg">
    <header>
        <h1 id="brandname">New Creation Church</h1>
        <h5>To proceed please Sign Up.</h5>
    </header>
    <section id="uregis">
        <form action="registration.php" method="post">
          
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="fname" placeholder="First Name"
                        required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lname" placeholder="Last Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="email">E-mail</label>
                    <input type="" class="form-control" id="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="passkey" placeholder="Password"
                        required>
                </div>
            </div>
            <div class="form-group">
                <label for="Location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="City/Town">
            </div>
            <div id="centre">
                <button type="submit" class="btn btn-primary" name="create">Create Account</button>
            </div>
        </form>
        <p id="log">
            Already have an account? <a href="loginp.php">Log In</a>
        </p>
    </section>
    <section id="footer">
        <p id="contactUs">
            Call us on: 030-234-0983/030-456-8675
        </p>
        E-mail: newcreationchurch@gmail.com
        <p>Designed and built with all the love in the world by Jessica Asamoah</p>
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
</body>

</html>