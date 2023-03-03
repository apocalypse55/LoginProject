<?php
$mysqli = require __DIR__ . "/connection.php";
if (isset ($_POST['email'], $_POST['fullName'], $_POST['username'], $_POST['password'], $_POST['gender'])){
    $fullname = $_POST['fullName'];
    $username  = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $checkEmailSql = "SELECT id from users where email='$email'";
    $checkUsernameSql = "SELECT id from users where username='$username'";
    try{
        $emailExists = $mysqli->query($checkEmailSql)->fetch_array(MYSQLI_ASSOC);
        $userExists = $mysqli->query($checkUsernameSql)->fetch_array(MYSQLI_ASSOC);
        if(isset($emailExists,$emailExists["id"])) {
            header("location:./register.php?error=user with this email already exists");
        } elseif(isset($userExists,$userExists["id"])) {
            header("location:./register.php?error=username already exists");
        } else {
            $sql = "INSERT INTO  users (full_name, username, password, email, gender) VALUES ('$fullname', '$username', '$password_hash', '$email', '$gender');";
            if($mysqli->query($sql)===TRUE){
                header("location:./index.php?success=inserted successfully");
            }
            else {
                header("location:./index.php?error=error occured");
        
            }
        }
    } catch(\Exception $e){
        header("location:./register.php?error=something went wrong");
    }
} 
?>
