<?php
$title = $_POST['title'];
$sup_p_name = $_POST['sup_p_name'];
$c_date = $_POST['c_date'];
$complain = $_POST['complain'];
$solution = $_POST['solution'];
$public_email = $_POST['public_email'];
$public_contactno = $_POST['public_contactno'];

$con = new mysqli("127.0.0.1", "root", "", "webclaimprocessing");

if ($con->connect_error) {
    die('Connection Failed: ' . $con->connect_error);
} else {
    $stmt = $con->prepare("INSERT INTO support (title, sup_p_name, c_date, complain, solution, public_email, public_contactno) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sssssss", $title, $sup_p_name, $c_date, $complain, $solution, $public_email, $public_contactno);
        
        if ($stmt->execute()) {
            $message = "Your complain sent to our authorities... Please wait for our response!";
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
