<div class="title-page">
    <h1>Show USER: <?= $data['email']; ?></h1>
</div>
<p><strong>Name: </strong> <?= $data['name']; ?></p>
<p><strong>E-mail: </strong> <?= $data['email']; ?></p>
<p><strong>Password: </strong> <?= $data['password']; ?></p>
<p><strong>Birthday: </strong> <?= $data['birthday']; ?></p>
<br>
<a href="?controller=user&function=edit&id=<?= $data['id']; ?>" class="btn">Edit</a>
<form action="?controller=user&function=delete" method="post">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <input type="submit" value="Delete" class="btn-delete">
</form>