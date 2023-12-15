<?php
$test = "Testing PHP";
$fonts = "verdana";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
   <title>PHP Arrays</title>
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
            <h2><?php echo "PHP Fundamental Tutorials (part-9-String)";?></h2>
        </section>

        <section class="maincontent">

        PHP Arrays:
        1. Indexed array
        2. Associative array
        3. Multi-dimensional array

        <hr> <hr/>
      1. Index Array:
      <hr> <hr/>
        <?php
        // how to show Indexed Array by using For Loop?
         $x = array(5,9,15,20,22,35);  
          $length = count($x);

          for($i = 0; $i<$length; $i++){

            echo $x[$i];
            echo "<br/>";
          }
        ?>
        <br/>
        <hr> <hr/>

       2. Associative Array
       <br/>
        <hr> <hr/>
        <?php
        // How to show Associative Array in Foreach loop?

          $keyandvalue = array ("Karim"=>"25", "Rahim"=>"23", "Nayem"=>"20");

          //OR

          $keyandvalue ["Karim"] = "25";
          $keyandvalue ["Rahim"] = "23";
          $keyandvalue ["Nayem"] = "20";

          foreach($keyandvalue as $key=>$value){

            echo "Name =" .$key. ", Age = " . $value;
            echo "<br/>";
            echo "<br/>";
            
          }
        ?>
        <?php
        // Practice of Associative Array
        $family = array ("Father"=>"50", "Mother"=>"40", "Son"=>"28", "Daughter"=>"25");

        $family ["Father"] = "50";
        $family ["Mother"] = "40";
        $family ["Son"] = "28";
        $family ["Daughter"] = "25";

        foreach($family as $key => $value){
            echo "Member =" .$key. ", Age =" .$value;
            echo "<br/>";
            echo "<br/>";
        }
        ?>
        <br/>
        <hr> <hr/>
       3. Multi-dimensional Array

       <br/>
        <hr> <hr/>
        <?php
        
        $cars = array (
            array ("BMW", 20, "Super Car"),
            array ("Ferrari", 50, 30),
            array ("Volvo", 23, 14),
            array ("Audi", 12, 45)
        );
        for($row = 0; $row<4; $row++){
            echo "<p>Row Number: $row</p>";

        for($col = 0; $col<3; $col++){
            echo "<ul>";

            echo "<li>" .$cars [$row] [$col]. "</li>";

            echo "</ul>";
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