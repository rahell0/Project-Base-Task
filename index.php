<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form Sederhana - Universitas Brawijaya</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .container { max-width: 400px; border: 1px solid #ccc; padding: 20px; border-radius: 8px; }
        .result { margin-top: 20px; padding: 10px; background: #e7f3fe; border-left: 6px solid #2196F3; }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Input Mahasiswa</h2>
    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        require_once 'User.php';
        
        // Inisiasi Object
        $user = new User($_POST['nama'], $_POST['email']);
        
        echo "<div class='result'>";
        echo $user->tampilkanData();
        echo "</div>";
    }
    ?>
</div>

</body>
</html>