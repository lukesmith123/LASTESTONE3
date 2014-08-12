<?php

     // Connection config
        $username = "wmtw_wmtw";
        $password = "MK3gteCz";
        $hostname = "localhost";

       // Connection to the database
        $dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");

        // Select a database to work with
        $selected = mysql_select_db("wmtw_wmtw", $dbhandle) or die("Could not select database");
        
?>