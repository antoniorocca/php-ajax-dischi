<?php
require "database.php";
?>

<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP ajax dischi</title>
     <link rel="stylesheet" href="../dist/css/app.css">
 </head>
 <body>
     <nav>
         <img src="../dist/img/spotify-logo.png" alt="spotify-logo">
     </nav>
     <main>
         <div id="container-dischi">
             <?php
             foreach ($dischi as $disco => $value) { ?>
                 <div class="disco">
                     <img src="<?php echo $value["poster"]; ?>">
                     <h3><?php echo $value["title"]; ?></h3>
                     <span class="author"><?php echo $value["author"]; ?></span><br>
                     <span class="year"><?php echo $value["year"]; ?></span>
                 </div>
             <?php
               }
              ?>
         </div>
     </main>
 </body>
</html>