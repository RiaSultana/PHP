<?php
$test = "Testing PHP";
$fonts = "verdana";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
   <title>PHP Superglobals</title>
    <style>
        body {font-family: <?php echo $fonts;?>}
        .phpcoding {width: 900px; background:#ddd; margin: 0 auto;  }
        .headeroption, .footeroption {background:#444; color:#fff; text-align: center;}
        .maincontent {min-height: 400px; padding: 20px;}
        .headeroption h2, .footeroption h3 {margin: 0px; padding: 20px;}
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo "PHP Fundamental Tutorials (part26)";?></h2>
        </section>

        <section class="maincontent">

        PHP Variable (Superglobals)[$_REQUEST & $_POST]
        <hr> <hr/>
    
       <form action= "<?php echo $_SERVER['PHP_SELF']?>" method= "post">
           Username:<input type = "text" name= "username"/>
           <input type = "submit" value= "Submit"/>
       </form>

        <?php
            // if($_SERVER['REQUEST_METHOD'] == "POST"){
            //     $name = $_REQUEST['username'];

            //    if(empty($name)){
            //      echo "<span style = 'color:red'>Username field must not be empty!" . "</span>";
            //    } else{
            //     echo "<span style = 'color:green'>You have submitted: " . $name . "</span>";
            //    }
            // }
// Practice

         if($_SERVER['REQUEST_METHOD'] == "POST"){
            $name = $_REQUEST['username'];

            if(empty($name)){
                echo "<span style = 'color:red'>Username must not be empty!" . "</span>";
            } else {
                echo "<span style = 'color:green'>You have submitted: " . $name . "</span>";
            }
         }
        ?>

        </section>

    <section class="footeroption">
            <h3><?php echo "www.shapedplugin.com";?></h3>
    </section>
    <div>
</body>
</html>