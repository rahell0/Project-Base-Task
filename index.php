<?php
// File: index.php
require_once 'User.php';

$userObj = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userObj = new User(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['phone'],
        $_POST['address']
    );
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form PHP - Team Pink</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Membuat Form Sederhana</h2>
    
    <form method="POST" action="">
        <label>Firstname</label>
        <input type="text" name="firstname" required>

        <label>Lastname</label>
        <input type="text" name="lastname" required>

        <label>Phone Number</label>
        <input type="text" name="phone" required>

        <label>Address</label>
        <textarea name="address" rows="3" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <?php if ($userObj): ?>
        <div class="result">
            <strong><?php echo $userObj->getGreeting(); ?></strong><br>
            <?php echo $userObj->getPhone(); ?><br>
            <?php echo $userObj->getAddress(); ?><br>
            <a href="index.php" class="reset-btn">Reset</a>
        </div>
    <?php endif; ?>
</div>

</body>
</html>