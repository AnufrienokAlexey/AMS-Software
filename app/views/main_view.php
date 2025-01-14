<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: /');
    exit;
}
?>

<h1>Главная</h1>
<form method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="createDbByButton">Название новой базы данных</label>
        <input type="text" value="AWS-Software" name="createDbByButton">
        <button type="submit" class="btn btn-dark ms-auto">
            Создать
        </button>
    </div>
</form>

<?php
dump($data);
?>
