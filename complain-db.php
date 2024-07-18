<?php
$c_name = $_POST['c_name'];
$c_date = $_POST['c_date'];
$c_address = $_POST['c_address'];
$complain = $_POST['complain'];
$validation_id = $_POST['validation_id'];
$public_email = $_POST['public_email'];
$public_contactno = $_POST['public_contactno'];

$con = mysqli_connect("127.0.0.1:3306", "root","", "webclaimprocessing");
if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
} else {
    $stmt = $con->prepare("INSERT INTO complain (c_name, c_date, c_address, complain, validation_id, public_email, public_contactno) VALUES ( ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisi", $c_name, $c_date, $c_address, $complain, $validation_id, $public_email, $public_contactno);
    
    if ($stmt->execute()) {
        echo "Your complain sent to our authorities...Please wait for our response!";
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    $stmt->close();
    mysqli_close($con);
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