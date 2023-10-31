<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "infoprojectj";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Process user information
        $fName = $_POST["fName"];
        $lName = $_POST["lName"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $location = $_POST["location"];
        $bornCity = $_POST["bornCity"];
        $dreamcity = $_POST["dreamDestination"];
        $stocksOwned = $_POST["stocksOwned"];
        $amountInvested = $_POST["amountInvested"];
        $favItems = $_POST["favItems"];
    
    
        
        // Insert data into the database
        $sql = "INSERT INTO projectjk (fName, lName, email, gender, location, bornCity, dreamDestination, stocksOwned, amountInvested, favItems)
                VALUES ('$fName', '$lName', '$email', '$gender', '$location', '$bornCity', ' $dreamcity', '$stocksOwned', '$amountInvested', '$favItems')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        // Close the database connection
        $conn->close();
    }
    ?>