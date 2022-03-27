<?php 
include './config/config.php';
include './config/db_auth.php';


if (isset($_POST['username']) && $_POST['password']) {
    $post_username = trim(htmlspecialchars($_POST["username"]));
    $post_password = trim(htmlspecialchars($_POST["password"]));
    $post_email = trim(htmlspecialchars($_POST["email"]));

    $password = password_hash($post_password, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM users WHERE username='$post_username' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: ../signup.php?error=This username is already taken");
        exit();
    } else {
        $sql2 = "INSERT INTO users (username, password, email) VALUES('$post_username', '$password', '$post_email')";
        $sql3 = "INSERT INTO profiles (username, nickname) VALUES('$post_username', '$post_username')";
        $result2 = mysqli_query($conn, $sql2);
        $result3 = mysqli_query($conn, $sql3);
    } if ($result2) {
        header("Location: ../signup.php?success=Your Account Has Successfully Created");
        exit();
    }
} else {
    header("Location: ../login.php?error=Please enter a username and password");
    exit();
}

?>