<meta charset="UTF-8">
<!DOCTYPE html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic'
          rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>

<body>
<?php


    $ru = explode('/',$_SERVER['REQUEST_URI']);
    $file = $ru[(count($ru)-1)];

    if(strlen($file) == 0){
        $file = 'home';
    }

    $partial = 'partials/'.$file.'.php';

    include_once('header.php');

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