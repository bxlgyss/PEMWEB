<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "public_web_services";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_POST['signup'])) {
    $username = $_POST['txt'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if username or email already exists
    $check_user = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $check_user->bind_param("ss", $username, $email);
    $check_user->execute();
    $result = $check_user->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Username or email already exists');</script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "<script>alert('Sign up successful');</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }
        $stmt->close();
    }
    $check_user->close();
}

if (isset($_POST['login'])) {
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header("Location: index.php"); // Redirect to home page
            exit();
        } else {
            echo "<script>alert('Password salah');</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan');</script>";
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lapor Login</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<style>
body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 95vh;
    font-family: 'Jost', sans-serif;
    background: linear-gradient(to bottom, #760504, #b12b24, #760504);
}
.main {
    width: 350px;
    height: 500px;
    background: red;
    overflow: hidden;
    background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/cover;
    border-radius: 10px;
    box-shadow: 5px 20px 50px #000;
}
#chk {
    display: none;
}
.signup {
    position: relative;
    width: 100%;
    height: 100%;
}
label {
    color: #fff;
    font-size: 2.3em;
    justify-content: center;
    display: flex;
    margin: 60px;
    font-weight: bold;
    cursor: pointer;
    transition: .5s ease-in-out;
}
input {
    width: 60%;
    height: 20px;
    background: #e0dede;
    justify-content: center;
    display: flex;
    margin: 20px auto;
    padding: 10px;
    border: none;
    outline: none;
    border-radius: 5px;
}
button {
    width: 60%;
    height: 40px;
    margin: 10px auto;
    justify-content: center;
    display: block;
    color: #fff;
    background: #B12B24;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in;
    cursor: pointer;
}
button:hover {
    background: #B12B24;
}
.login {
    height: 460px;
    background: #eee;
    border-radius: 60% / 10%;
    transform: translateY(-180px);
    transition: .8s ease-in-out;
    text-align: center;
}
.login label {
    color: #B12B24;
    transform: scale(.6);
}

#chk:checked ~ .login {
    transform: translateY(-500px);
}
#chk:checked ~ .login label {
    transform: scale(1);
}
#chk:checked ~ .signup label {
    transform: scale(.6);
}
.logo {
    position: absolute;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
}
.logo img {
    width: 195px;
    height: auto;
}
</style>
<body>
    <div class="main">
        <div class="logo">
            <img src="img/LOGO LAPOR.png" alt="Logo">
        </div>
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="" method="POST">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="txt" placeholder="User name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="signup">Sign up</button>
            </form>
        </div>

        <div class="login">
            <form action="" method="POST">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <p>
                    Don't have an account?
                    <a href="#">Sign Up</a>
                </p>
                <div class="other-ways">
                    <div class="forget-password">
                        <a href="#">
                            Forgot password?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
