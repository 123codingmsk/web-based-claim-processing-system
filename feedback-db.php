<?php
$c_name = $_POST['c_name'];
$email = $_POST['email'];
$contactno = $_POST['contactno'];
$feedback = $_POST['feedback'];

$con = mysqli_connect("127.0.0.1:3306", "root", "", "webclaimprocessing");
if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}

else {
    $stmt = $con->prepare("INSERT INTO feedback (c_name, email, contactno, feedback) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $c_name, $email, $contactno, $feedback);
        
        if ($stmt->execute()) {
            $message = "Your feedback sent to our authorities... We will try our best!";
        } else {
            $message = "Error executing statement: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $message = "Error preparing statement: " . $con->error;
    }
    
    $con->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Complain Submission</title>
</head>
<body>
    <p><?php echo $message; ?></p>
    <script>
        setTimeout(function() {
            window.location.href = 'welcome.php';
        }, 3000); // Redirect after 3 seconds
    </script>
</body>
</html>
