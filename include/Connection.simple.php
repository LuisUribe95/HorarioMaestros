<?php

    function dbConnect()
    {
        $conn = null;
        $host = 'localhost';
        $db =   'horarioescolar';
        $user = 'dawebits';
        $pwd =  'claseDAWEB';
        
        try{
            $conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
        }
        catch(PDOException $e)
        {
            echo '<p>Cannot connect to database !!</p>';
            exit;
        }
    }

?>