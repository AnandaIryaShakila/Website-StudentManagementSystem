<?php
include 'db.php';

$id = $_GET['id'];

// Mengambil data siswa berdasarkan ID
$sql = "SELECT * FROM students WHERE id = $id";
$result = $conn->query($sql);
$siswa = $result->fetch_assoc();

if (!$siswa) {
    echo "No record found!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Student</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo $siswa['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo $siswa['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Class:</label>
                <input type="text" id="class" name="class" class="form-control" value="<?php echo $siswa['class']; ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
