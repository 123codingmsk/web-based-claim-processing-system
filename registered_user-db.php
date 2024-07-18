<?php
$public_name = $_POST['public_name'];
$public_uniq_password = $_POST['public_uniq_password'];
$public_sex = $_POST['public_sex'];
$public_dob = $_POST['public_dob'];
$public_address = $_POST['public_address'];
$public_email = $_POST['public_email'];
$public_contactno = $_POST['public_contactno'];
$complain = $_POST['complain'];

$con = mysqli_connect("127.0.0.1:3306", "root", "", "webclaimprocessing");
if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
} else {
    $stmt = $con->prepare("INSERT INTO registered_user (public_name, public_uniq_password, public_sex, public_dob, public_address, public_email, public_contactno, complain) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssis", $public_name, $public_uniq_password, $public_sex, $public_dob, $public_address, $public_email, $public_contactno, $complain);
    
    if ($stmt->execute()) {
        echo "Login successful...form submitted..proceeding....";
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
    <title>register page</title>
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