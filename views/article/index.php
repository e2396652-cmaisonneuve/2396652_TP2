<div class="title-page">
    <h1>Article List</h1>
</div>



<div>
    <?php foreach ($data as $row) {
    ?>
        <table class="article-table">
            <tr>
                <td>
                    <h2>[<?= $row['date'] ?>] <?= $row['title'] ?></h2>
                </td>
            </tr>
            <tr>
                <td><?= $row['article'] ?></td>
            </tr>
            <tr>
                <td>
                    <a href="?controller=article&function=edit&id=<?= $row['id'] ?>" class="btn">Edit</a>
                </td>
                </td>
            </tr>
        </table>
    <?php
    }
    ?>
</div>