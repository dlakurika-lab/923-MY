<?php
require_once 'bd.php';
include 'header.php';
?>

<h2 class="mb-4">👥 Список пользователей</h2>

<?php
// Подготовленный запрос SELECT
$sql = "SELECT id, username, email, role, created_at FROM users ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$users = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Имя пользователя</th>
                <th>Email</th>
                <th>Роль</th>
                <th>Дата регистрации</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['username']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td>
                        <span class="badge bg-<?= $user['role'] == 'admin' ? 'danger' : 'secondary' ?>">
                            <?= $user['role'] ?>
                        </span>
                    </td>
                    <td><?= date('d.m.Y H:i', strtotime($user['created_at'])) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-warning">✏️ Редактировать</a>
                        <a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Удалить пользователя?')">🗑️ Удалить</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
$stmt->close();
$conn->close();
include 'footer.php';
?>