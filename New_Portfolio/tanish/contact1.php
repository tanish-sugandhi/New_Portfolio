<?php 
    $host = 'localhost';  
    $username = 'root';   
    $password = '';
    $mydb = "test";     
      
    $conn = new mysqli($host, $username, $password, $mydb);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);  // If there's a connection error
    }
     
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Form submitted!";
        // Capture the form data and sanitize it
         $name = $_POST['name'];
         $email = $_POST['email'];
         $subject=$_POST['subject'];
         $message=$_POST['message'];
        // $name=mysqli_real_escape_string($conn,$_POST['name']);
        // $email = mysqli_real_escape_string($conn, $_POST['email']);
        // $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        // $message = mysqli_real_escape_string($conn, $_POST['message']);
       
        $sql = "INSERT INTO contact1 (name, email, subject, message)
                VALUES ('$name', '$email', '$subject', '$message')";
       
        if ($conn->query($sql) === TRUE) {
            
            echo "Your message has been sent successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
     
        $conn->close();
    } else {
        echo "Please submit the form.";
    }
?>
