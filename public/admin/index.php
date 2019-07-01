<?php
    session_start();

    require_once("../../vendor/autoload.php");
    require_once("../../private/assets/User.php");
    require_once("../../private/assets/Connection.php");

    $bdd = new Connection("dbs110474", "dbu182479", "Azerty^^12");
    $_SESSION["message"] = -1;

    if (count($_GET)) {
        if (isset($_GET["disconnect"])) {
            print(var_dump($_SESSION));
            if ($_SESSION["login"] == true) {
                $_SESSION["login"] = false;
            }
        }

        if (isset($_GET["delete"])) {
            $request = $bdd->connection->prepare("
            DELETE FROM contact WHERE id=".$_GET['delete'].";
            ");
            $request->execute();
        }
    }

    if (isset($_SESSION["login"]) == false || $_SESSION["login"] == false) {
        header("Location: login.php");
        exit();
    }

    $request = $bdd->connection->prepare("
    SELECT * FROM contact;
    ");
    $request->execute();
    $contacts = $request->fetchAll(PDO::FETCH_ASSOC);

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Menu</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
        padding-top: 5rem;
        }
        .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
        }

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

      button:hover {
      }

      a {
          background-color: transparent!important;
          text-decoration: none;
          color: red;
      }

      a:hover {
          color: red;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?disconnect">Disconnect</a>
            </ul>
        </div>
    </nav>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($contacts as $key => $contact) { ?>

                <tr>
                    <td> <?= $contact["name"] . " " . $contact["lastname"] ?> </td>
                    <td> <?= $contact["email"] ?> </td>
                    <td> <?= $contact["message"] ?> </td>
                    <td> <a style="color:red; text-decoration:none;" href="?delete=<?= $contact["id"] ?>">Supprimer</td>
                </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</body>