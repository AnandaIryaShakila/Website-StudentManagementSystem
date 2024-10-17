<?php
include 'db.php';  // Pastikan ini ada untuk menginisialisasi $conn

$sql = "SELECT id, name, email, class FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["class"] . "</td>
                <td>
                    <a href='edit.php?id=" . $row["id"] . "' class='btn btn-warning'>Edit</a>
                    <a href='delete.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No results found</td></tr>";
}
?>
