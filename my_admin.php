
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "first";
    
    // Create connection
    $conn = mysqli_connect ($servername, $username, $password, $database);

    $sql = "INSERT INTO student_1 (firstname, lastname, email, branch_1)
    VALUES ('John', 'Doe', 'john@example.com', 'haj')";
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>
