<?php
    session_start();
    
    require_once("../../private/assets/Connection.php");

    $bdd = new Connection("dbs110474", "dbu182479", "Azerty^^12");

    if (count($_POST)) {
        $request = $bdd->connection->prepare("
        UPDATE projects
        SET title='" . $_POST["title"] . 
        "', type='" . $_POST["type"] . 
        "', name='" . $_POST["name"] . 
        "', description='" . $_POST["description"] . 
        "', sentence='" . $_POST["sentence"] . 
        "', user='" . $_POST["user"] . "' 
        WHERE title='" . $_POST["title"] . "';
        ");
        $request->execute();
    }

    if (count($_GET)) {
        $request = $bdd->connection->prepare("
        DELETE FROM projects WHERE title='".$_GET["delete"]."';
        ");
        $request->execute();   
    }

    $request = $bdd->connection->prepare("
    SELECT * FROM projects;
    ");
    $request->execute();
    $projects = $request->fetchAll(PDO::FETCH_ASSOC);
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
          color: white;
      }

      a:hover {
          color: white;
          text-decoration: none;
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Contact</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?disconnect">Disconnect</a>
            </ul>
        </div>
    </nav>

    <div class="container" style="display:flex; flex-direction:row;">
        <table class="table">
            <tbody>

                <?php foreach($projects as $project) { ?>

                <tr>
                    <form action="projects.php" method="post">
                        <tr><th>Title</th><th> <input name="title" value="<?= $project["title"] ?>" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"> </th></tr>
                        <tr><th>Type</th><th> <input name="type" value="<?= $project["type"] ?>" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"> </th></tr>
                        <tr><th>Name</th><th> <input name="name" value="<?= $project["name"] ?>" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"> </th></tr>
                        <tr><th>Description</th><th> <input name="description" value="<?= $project["description"] ?>" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"> </th></tr>
                        <tr><th>Sentence</th><th> <input name="sentence" value="<?= $project["sentence"] ?>" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"> </th></tr>
                        <tr><th>User</th><th> <input name="user" value="<?= $project["user"] ?>" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"> </th></tr>
                        
                        <th><button type="submit" class="btn btn-success">Valider</button></th>
                        <th><button type="button" class="btn btn-danger"><a href="?delete=<?= $project["title"] ?>">Supprimer</button></th>
                    </form>
                </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</body>