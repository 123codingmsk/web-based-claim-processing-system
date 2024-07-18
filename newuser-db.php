<?php
$user_name = $_POST['user_name'];
$user_uniq_password = $_POST['user_uniq_password'];
$user_sex = $_POST['user_sex'];
$user_dob = $_POST['user_dob'];
$user_address = $_POST['user_address'];
$user_email = $_POST['user_email'];
$user_contactno = $_POST['user_contactno'];
$complain = $_POST['complain'];

$con = mysqli_connect("127.0.0.1:3306", "root", "", "webclaimprocessing");
if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
} else {
    $stmt = $con->prepare("INSERT INTO newuser (user_name, user_uniq_password, user_sex, user_dob, user_address, user_email, user_contactno, complain) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssis", $user_name, $user_uniq_password, $user_sex, $user_dob, $user_address, $user_email, $user_contactno, $complain);
    
    if ($stmt->execute()) {
        echo "Registration successful";
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
    <title>login page</title>
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
