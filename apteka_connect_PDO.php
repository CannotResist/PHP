<head>
 </head> 
    <body>
     <?php
    
     ini_set( 'display_errors', 'On' );
     error_reporting( E_ALL );
     
     
     try
     {
         $db = new PDO('mysql:host=localhost;dbname=apteka', 'root', 'admin');
     }
     catch (PDOException $e)
     {
         print "Blad polaczenia z baza: " . $e->getMessage() . "<br/>";
         die();
     }
     
     
     
     $statement = $db->query('SELECT * FROM uzytkownicy');
     foreach($statement as $wiersz)
     {
         echo($wiersz['imie']." ".$wiersz['nazwisko']."<br />");
     }
     $statement->closeCursor();
  
     
     ?>
     
    </body>
</html>
	
	
	
