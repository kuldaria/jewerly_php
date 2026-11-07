<h2>Список заявок клиентов</h2>

<table border="1" style="width:100%; border-collapse: collapse;">
    <thead>
        <tr style="background: #eee;">
            <th>ID</th>
            <th>Логин (REST)</th>
            <th>ФИО</th>
            <th>Email</th>
            <th>Телефон</th>
            <th>Сообщение</th>
            <th>Действие</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($c['users'] as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><strong><?php echo htmlspecialchars($user['login']); ?></strong></td>
            <td><?php echo htmlspecialchars($user['fio']); ?></td>
            <td><?php echo htmlspecialchars($user['email']); ?></td>
            <td><?php echo htmlspecialchars($user['phone']); ?></td>
            <td><?php echo htmlspecialchars($user['message']); ?></td>
            <td>
                <form method="POST" action="/admin/<?php echo $user['id']; ?>" onsubmit="return confirm('Удалить?')">
                    <button type="submit" style="color:red;">Удалить</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p><a href="/">← На главную</a></p>
