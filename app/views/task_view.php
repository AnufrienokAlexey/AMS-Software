<h2>Задачи и решения</h2>
<h4>Запрос 1:</h4>
<p>Вывести список автомобилей, снятых с производства на сентябрь 2018 года. В формате Марка, Модель, Дата снятия с
    производства.</p>
<h4>Решение:</h4>
<p>В задаче не хватает условия о том, что нужно добавить дополнительную таблицу, которая связывает таблицы марок и
    моделей автомобилей</p>
<p>Поэтому решение может быть только не полным:</p>
<p>
    <code>SELECT `carModel` FROM `carmodels` WHERE `endDate` < 2018;</code>
</p>
И будет такая таблица выглядеть следующим образом:
<div class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="text-center">Задача 1</h4>
                    <div class="d-flex flex-column">
                        <?php
                        foreach ($data as $item) {
                            ?>
                            <div class="d-flex justify-content-center">
                                <div class="cell"><?= $item['carModel']; ?></div>
                            </div>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
Но если подразумевается, что мы сами должны об этом подумать, то решение будет таким:
<form action="/task/createCars" method="post">
    <button type="submit" class="btn btn-primary">Создать новую cars таблицу связей c исходными данными</button>
</form>

<form action="/task/deleteCars" method="post">
    <button type="submit" class="btn btn-danger">Удалить таблицу cars</button>
</form>
<p>
    <code>SELECT `carModel` FROM `carmodels` WHERE `endDate` < 2018;</code>
</p>
<?php
dump($data);
?>
<h4>Запрос 2:</h4>
<p>Вывести список автомобилей и работ, которые не сняты с производства на текущий момент, где стоимость выше 1000
    рублей. В формате Марка, Модель, Наименование работ, Стоимость работ.</p>
