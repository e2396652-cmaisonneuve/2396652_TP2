<div class="title-page">
    <h1>USER Edit</h1>
</div>
<form action="?controller=user&function=update" method="post">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="<?= $data['name']; ?>">
    <label for="email">email</label>
    <input type="email" name="email" id="email" value="<?= $data['email']; ?>">
    <label for="phone">Password</label>
    <input type="text" name="phone" id="phone" value="<?= $data['password']; ?>">
    <label for="birthday">Birthday</label>
    <input type="date" name="birthday" id="birthday" value="<?= $data['birthday']; ?>">
    <input type="submit" value="save">
</form>