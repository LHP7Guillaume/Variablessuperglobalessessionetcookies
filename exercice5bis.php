<?php
if(!empty($_POST)){
    $myLogin = $_POST["login"];
    $myPassword = $_POST["password"];
    
    setcookie("login", $myLogin);
    setcookie("password", $myPassword);

    header("refresh:0");
    // setcookie($secure = true);
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <title>exercice5bis</title>
</head>
<body class="text-center mt-3">

<div>
<p>Le login est :</p> 
<p><?= $_COOKIE["login"] ?></p>
<p>Le mot de passe est :</p> 
<p><?= $_COOKIE["password"] ?></p>
</div>
<form class="container mt-3" method="POST" action="exercice5bis.php">

        <div class="mb-3">
            <label for="login" class="form-label">Nouveau Login</label><br>
            <input type="text" name="login" class="login" id="login" aria-describedby="login user">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Nouveau Mot de passe</label><br>
            <input type="password" name="password" class="" id="password">
        </div>
        
        <input type="submit" class="btn btn-outline-success">
   
    </form>

</body>

</html>