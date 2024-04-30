<?php require_once('../templates/headerNoLogin.php'); ?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Sign in</title>
</head>

<?php
require_once ('config.php');
require_once '../src/clean.php';
$clean = new clean();

if(isset($_POST['Submit']))
{
    try {

            $connection = new PDO($dsn, $username, $password, $options);

            $sql = "SELECT firstname, psw from users where firstname = :USER";
            $statement = $connection->prepare($sql);
            $tmpUser = ($_POST['firstname']);
            $statement->bindParam(':USER', $tmpUser, PDO::PARAM_STR);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach ($result as $row => $rows) 
            {
                $fname_db = $rows['firstname'];
                $pwd_db = $rows['psw'];

                if (($_POST['firstname'] == $fname_db) && ($_POST['password'] == $pwd_db))
                {
                    $_SESSION['firstname'] = $fname_db;
                    $_SESSION['Active'] = true;
                    header("Location: index.php");
                    exit;
                }
            else 
            {
                echo 'Incorrect Firstname or Password';
            }
            }
    }
    catch
        (Exception $e)
        {
            echo '<div class="messages-error">Error Logging in:' . $e->getMessage() . '</div>';
        }
}
?>

<body>
    <div class="container">
        <h2>Login into MyRetroJersey</h2>
        <form action="login.php" method="POST">
            <input type="text" name="firstname" placeholder="Firstname" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="login-btn" type="submit">Sign in</button>
    </form>
    <button name="Submit" value="Login" class="login-btn" type="submit"><a href="register.php">Register</a></button>
</div>
</body>
</html>
