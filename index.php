<meta charset="UTF-8">
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>

<body>
<?php
    include_once('header.php');

    $ru = explode('/',$_SERVER['REQUEST_URI']);
    $file = $ru[(count($ru)-1)];

    if(strlen($file) == 0){
        $file = 'home';
    }

    $partial = 'partials/'.$file.'.php';

    if(!include_once($partial)){
        include_once("partials/404.php");
    }

    include_once('footer.php');
?>

    <script>
        var pathArray = window.location.pathname.split("/");
        $("#" + pathArray[pathArray.length - 1]).addClass('active');
    </script>
</body>

</html>