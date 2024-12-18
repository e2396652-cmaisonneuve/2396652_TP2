<div class="title-page">
    <h1>Show ARTICLES</h1>
</div>

<p><strong>Title: </strong> <?= $data['title']; ?></p>
<p><strong>Article: </strong> <?= $data['article']; ?></p>
<p><strong>Date: </strong> <?= $data['date']; ?></p>
<a href="?controller=article&function=edit&id=<?= $data['id']; ?>" class="btn">Edit</a>
<form action="?controller=article&function=delete" method="post">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <input type="submit" value="Delete" class="btn-delete">
</form>