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

        PHP Variable (Superglobals)[$_GET]
        <hr> <hr/>
    
       <a href="text.php?msg=Good&txt=Bye">Sent Data</a>
     </br></br>
      <a href="test_get.php?subject=Plugins&web=shapedplugin.com">Test $GET</a>

        </section>

    <section class="footeroption">
            <h3><?php echo "www.shapedplugin.com";?></h3>
    </section>
    <div>
</body>
</html>