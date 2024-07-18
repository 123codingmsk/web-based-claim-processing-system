<?php
$unique_id = $_POST['unique_id'];
$unique_password = $_POST['unique_password'];
$unique_name = $_POST['unique_name'];
$unique_email = $_POST['unique_email'];
$unique_contactno = $_POST['unique_contactno'];

$con = mysqli_connect("127.0.0.1:3306", "root", "", "webclaimprocessing");
if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
} else {
    $stmt = $con->prepare("INSERT INTO admin (unique_id, unique_password, unique_name, unique_email, unique_contactno) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $unique_id, $unique_password, $unique_name, $unique_email, $unique_contactno);
    
    if ($stmt->execute()) {
        echo "Login successful";
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
    <title>Admin page</title>
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


