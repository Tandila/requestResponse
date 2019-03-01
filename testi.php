<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>php requesti da jandaba responsi</title>
    
</head>
<body>
 
<?php

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $infos = array("HTTP_HOST"); //tu raime konkretulis modzieba gvinda chavwerot aq
    foreach($infos as $info) {
        if( isset( $_SERVER[$info] ) ) {
            echo $_SERVER[$info];
        }
        else {
            echo "Not found";
        }
    }
}
//tu mtlianis gamotana gvinda
//print_r($_SERVER);
?>

 

</body>
</html>