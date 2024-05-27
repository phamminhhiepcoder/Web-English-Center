<?php
session_start();
include '../connect.php';

if ($_SESSION['loggedinAdmin'] === false) {
    header("location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    $userId = $_SESSION['userId'];

    $sql = "SELECT password FROM users WHERE id = :user_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user_id', $userId);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row && password_verify($currentPassword, $row['password'])) {
        if ($newPassword === $confirmPassword) {
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            $sqlUpdate = "UPDATE users SET password = :new_password WHERE id = :user_id";
            $stmtUpdate = $conn->prepare($sqlUpdate);
            $stmtUpdate->bindParam(':new_password', $hashedPassword);
            $stmtUpdate->bindParam(':user_id', $userId);

            if ($stmtUpdate->execute()) {
                $_SESSION['success_change_pass'] = "Mật khẩu đã được thay đổi thành công.";
                header("location: dashboard.php"); 
                exit;
            } else {
                $error = "Đã xảy ra lỗi khi cập nhật mật khẩu. Vui lòng thử lại.";
            }
        } else {
            $error = "Mật khẩu mới và xác nhận mật khẩu không khớp.";
        }
    } else {
        $error = "Mật khẩu hiện tại không đúng.";
    }

    $_SESSION['error_change_pass'] = $error;
    header("location: dashboard.php");
    exit;
}
?>
