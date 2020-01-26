<head>
 </head> 
    <body>
     <?php
    
     ini_set( 'display_errors', 'On' );
     error_reporting( E_ALL );
     
     
     try
     {
         $db = new PDO('mysql:host=localhost;dbname=apteka', 'root', 'admin');
     
         $cursor = $db->query('SELECT * FROM uzytkownicy');
         
         foreach($cursor as $assoctable)
         {
             echo($assoctable['imie']." ".$assoctable['nazwisko']."<br />");
         }
         $cursor->closeCursor();
         
         
     
     }
     catch (PDOException $e)
     {
         print "Blad polaczenia z baza: " . $e->getMessage() . "<br/>";
         die();
     }
     
     
     
     
     ?>
     
    </body>
</html>
	
	
	
