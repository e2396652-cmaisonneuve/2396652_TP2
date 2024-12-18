<div class="title-page">
    <h1>USER index</h1>
</div>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>Birthday</th>
            <th>Show</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) {
        ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['password'] ?></td>
                <td><?= $row['birthday'] ?></td>
                <td><a href="?controller=user&function=show&id=<?= $row['id'] ?>" class="btn">Show</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>