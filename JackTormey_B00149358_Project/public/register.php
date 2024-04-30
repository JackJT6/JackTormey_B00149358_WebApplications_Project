<?php require_once '../templates/headerNoLogin.php';?>
<link rel="stylesheet" type="text/css" href="../css/style.css">

<?php
if (isset($_POST['submit'])) {
  require "../common.php";
 try {
  require_once '../src/DBconnect.php';
 $new_user = array(
  "firstname" => escape($_POST['firstname']),
  "lastname" => escape($_POST['lastname']),
  "email" => escape($_POST['email']),
  "age" => escape($_POST['age']),
  "location" => escape($_POST['location']),
  "psw" => escape($_POST['psw'])
);




$sql = sprintf("INSERT INTO %s (%s) values (%s)", "users",
 implode(", ", array_keys($new_user)),
 ":" . implode(", :", array_keys($new_user)));
$statement = $connection->prepare($sql);
$statement->execute($new_user);
 } catch(PDOException $error) {
 echo $sql . "<br>" . $error->getMessage();
 }
}
if (isset($_POST['submit']) && $statement){
  echo $new_user['firstname']. ' successfully added';
}
?>

<h2>Please register your details</h2>
<form method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" id="firstname" required>

    <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" required>

    <label for="email"><b>Email Address</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" id="age" required>

    <label for="location"><b>Location</b></label>
    <input type="text" placeholder="Enter Location" name="location" id="location" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input type="submit" name="submit" value="Submit">
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
 <a href="index.php">Back to home</a>

<?php require_once '../templates/footer.php';?>