<div class="title-page">
    <h1>Create a new USER</h1>
</div>
<form action="?controller=user&function=store" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email">
    <label for="password">Password</label>
    <input type="text" name="password" id="password">
    <label for="birthday">Birthday</label>
    <input type="date" name="birthday" id="birthday">
    <input type="submit" value="Save" class="btn">
</form>