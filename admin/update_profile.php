<?php
session_start();
include '../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $updateQuery = "UPDATE users SET phone = ?, email = ? WHERE id = ?";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->bindParam("ssi", $phone, $email, $userId);

    if ($updateStmt->execute()) {
        $message = "Update thành công!";
        $stmt->execute();
    } else {
        $message = "Update lỗi";
    }

    header("location: dashboard.php");
    exit;
}
?>
