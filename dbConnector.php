<?php 
/* Configure Database */
     $conn = 'mysql:dbname=heroku_4adccf4c17bb6a3;host=us-cdbr-east-06.cleardb.net;'; //database name
     $user = 'bcd4426646bf50'; // your mysql user 
     $password = '2b7175b1 '; // your mysql password

     //  Create a PDO instance that will allow you to access your database
     try {
        $db = new PDO($conn, $user, $password);
     }

    catch(PDOException $e) {
     //var_dump($e);
        echo("PDO error occurred");
    }

    catch(Exception $e) {
    //var_dump($e);
    echo("Error occurred");
    }
    

   session_start();


?>

