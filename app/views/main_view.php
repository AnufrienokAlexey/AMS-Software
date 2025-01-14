<?php

dump($_POST);
?>

<h1>Главная</h1>
<form method="post" enctype="multipart/form-data" id="createDbByButton">
    <div class="mb-3">
        <label for="createDbByButton">Название новой базы данных</label>
        <input type="text" value="AWS-Software" name="createDbByButton">
        <button type="submit" class="btn btn-dark ms-auto">
            Создать
        </button>
    </div>
</form>

<?php
if (isset($_POST['isDbCreated'])) {
    dump($_POST['isDbCreated']);
}
?>
