<?php
$servername = "sql110.infinityfree.com";  
$username = "if0_37102402";         
$password = "Hh18082004";             
$dbname = "if0_37102402_b5_mydb"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com'),
       ('Jane', 'Smith', 'jane@example.com'),
       ('James', 'Johnson', 'james@example.com'),
       ('Emily', 'Brown', 'emily@example.com'),
       ('Michael', 'Davis', 'michael@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "Dữ liệu đã được thêm thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
