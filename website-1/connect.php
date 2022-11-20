<?php
  
        // servername => sql202.epizy.com
        // username => epiz_28238572
        // password => eGRVgXIyOSnWG
        // database name => epiz_28238572_form
        $conn = mysqli_connect("sql202.epizy.com", "epiz_28238572", "eGRVgXIyOSnWG", "epiz_28238572_form");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 4 values from the form data(input)
        $first_name =  $_REQUEST['First-Name'];
        $last_name = $_REQUEST['Last-Name'];
        $email = $_REQUEST['E-mail'];
        $phone = $_REQUEST['Phone'];
          
        // Performing insert query execution
        // here our table name is registration
        $sql = "INSERT INTO `registration` VALUES ('$first_name', 
            '$last_name','$email','$phone')";
          
        if(mysqli_query($conn, $sql)){
            //echo "<h3>data stored in a database successfully." 
              //  . " Please browse your localhost php my admin" 
               // . " to view the updated data</h3>"; 
  
            //echo nl2br("\n$first_name\n $last_name\n "
              //  . "$email\n $phone");
              header("Location:index.html");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>