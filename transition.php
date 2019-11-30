<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registring</title>
</head>
<body>
    <?php 
    if(isset($_GET["message"])) {
        echo "<h2>".$_GET["message"]."</h2>";
        header( "refresh:5;url=user.php" );
    }
    ?>
</body>
</html>