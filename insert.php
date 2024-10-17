<?php
include 'db.php'; // Memasukkan file koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $class = $_POST['class'];

    // Query untuk menyisipkan data
    $sql = "INSERT INTO students (name, email, class) VALUES ('$name', '$email', '$class')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php'); // Kembali ke halaman utama setelah berhasil
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Sertakan file CSS -->
</head>
<body>
    <div class="container mt-5">
        <h2>Add New Student</h2>
        <form action="insert.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Class:</label>
                <input type="text" id="class" name="class" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Add Student</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script> <!-- Sertakan file JavaScript -->
</body>
</html>
