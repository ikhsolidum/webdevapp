<?php
include 'pdb.php';

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    header('Location: pindex.php');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>