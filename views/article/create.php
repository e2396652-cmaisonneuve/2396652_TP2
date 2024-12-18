<div class="title-page">
    <h1>Create a new ARTICLE</h1>
</div>
<form action="?controller=article&function=store" method="post">
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <label for="article">Write your text:</label>
    <textarea rows="4" cols="50" name="article" id="article">
    </textarea>
    <label for="date">Date</label>
    <input type="date" name="date" id="date">
    <input type="submit" value="Save" class="btn">
</form>