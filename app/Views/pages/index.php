<main>
    <table border="solid">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>