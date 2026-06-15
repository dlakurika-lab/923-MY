<?php
require_once 'bd.php';
include 'header.php';

$id = $_GET['id'] ?? 0;
$user = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $stmt = $conn->prepare("UPDATE users SET username=?, email=?, role=? WHERE id=?");
    $stmt->bind_param("sssi", $username, $email, $role, $id);
    if ($stmt->execute()) {
        header("Location: admin.php");
        exit;
    }
} else {
    $stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();
}
?>

<h2>Редактирование пользователя</h2>
<form method="post">
    <div class="mb-3">
        <label>Имя</label>
        <input type="text" name="username" class="form-control" value="<?= htmlspecialchars($user['username'] ?? '') ?>" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email'] ?? '') ?>" required>
    </div>
    <div class="mb-3">
        <label>Роль</label>
        <select name="role" class="form-select">
            <option value="user" <?= ($user['role'] ?? '') == 'user' ? 'selected' : '' ?>>Пользователь</option>
            <option value="admin" <?= ($user['role'] ?? '') == 'admin' ? 'selected' : '' ?>>Админ</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
    <a href="admin.php" class="btn btn-secondary">Отмена</a>
</form>

<?php include 'footer.php'; ?>