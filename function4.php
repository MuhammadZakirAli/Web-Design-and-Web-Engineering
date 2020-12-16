<html>
   
   <head>
      <title>Make your own print function</title>
   </head>
   
   <body>
      
      <?php
         function printMe($str = NULL) {
            print $str;
         }
         
         printMe("Ye print hoga");
         printMe();
      ?>
      
   </body>
</html>