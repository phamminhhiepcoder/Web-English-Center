<?php
session_start();
include '../connect.php';

if (!isset($_SESSION['userId'])) {
    header('Location: ../login.php');
    exit();
}

$userId = $_GET['id'];

$updateQuery = "UPDATE users SET is_delete = 1 WHERE id = :userId";
$updateStmt = $conn->prepare($updateQuery);
$updateStmt->bindParam(':userId', $userId, PDO::PARAM_INT);

if ($updateStmt->execute()) {
    $message = "Update thành công!";
    $updateStmt->execute();
    $user = $updateStmt->fetch(PDO::FETCH_ASSOC);
} else {
    $message = "Update lỗi";
}
header("location: dashboard.php");
exit;
?>