<?php
    session_start();

    require_once("../../private/assets/Connection.php");

    $bdd = new Connection("dbs110474", "dbu182479", "Azerty^^12");
    
    $badLogin = false;

    $request = $bdd->connection->prepare("
    SELECT * FROM admin;
    ");
    $request->execute();
    $login = $request->fetchAll(PDO::FETCH_ASSOC)[0];

    if (count($_POST)) {
        if ($_POST["mail"] == $login["username"] && $_POST["password"] == $login["password"]) {
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit();
        }
        else {
            $badLogin = true;
        }
    }
    
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/4.3/examples/floating-labels/floating-labels.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" action="login.php" method="POST">

      <?php if ($badLogin) { ?>

        <div class="alert alert-danger" role="alert">
          Wrong username / password
        </div>

      <?php } ?>

        <div class="text-center mb-4">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        </div>

        <div class="form-label-group">
            <input name="mail" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputEmail">Email address</label>
        </div>

        <div class="form-label-group">
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <label for="inputPassword">Password</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" action="" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">© 2017-2019</p>
    </form>
</body>