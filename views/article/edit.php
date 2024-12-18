<div class="title-page">
    <h1>Edit ARTICLE</h1>
</div>

<form action="?controller=article&function=update" method="post">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?= $data['title']; ?>">
    <label for="article">Article</label>
    <input type="textarea" name="article" id="article" value="<?= $data['article']; ?>">
    <label for="date">Date</label>
    <input type="date" name="date" id="date" value="<?= $data['date']; ?>">
    <input type="submit" value="save" class="btn">
</form>
<form action="?controller=article&function=delete" method="post">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <input type="submit" value="Delete" class="btn-delete">
</form>