<?php
include 'db.php';

$id = $_GET['id'];

// Query untuk menghapus siswa berdasarkan ID
$sql = "DELETE FROM students WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
