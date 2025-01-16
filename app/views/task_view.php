<h2>Задачи и решения</h2>
<h4>Запрос 1:</h4>
<p>Вывести список автомобилей, снятых с производства на сентябрь 2018 года. В формате Марка, Модель, Дата снятия с
    производства.</p>
<h4>Решение:</h4>
<p>Но я предпологаю, что надо выстроить запрос с использование JOIN. Поэтому мы добавляем столбец carBrand_id в таблицу
    carModels. И выстраиваем такой запрос:</p>
<p><code>SELECT carbrands.carBrand, carmodels.carModel, carmodels.endDate FROM carmodels</code></p>
<p><code>INNER JOIN carbrands ON carmodels.carBrand_id = carbrands.id</code></p>
<p><code>WHERE carmodels.endDate < 2018</code></p>
<p>И будет такая таблица выглядеть следующим образом:</p>
<div class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="text-center">Задача 1</h4>
                    <div class="d-flex flex-column">
                        <ol>
                            <?php
                            foreach ($data as $item) {
                                ?>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div class="cell"><?= $item['carBrand']; ?></div>
                                        <div class="cell"><?= $item['carModel']; ?></div>
                                        <div class="cell"><?= $item['endDate']; ?></div>
                                    </div>
                                </li>
                                <?php
                            } ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
dump($data);
?>
<h4>Запрос 2:</h4>
<p>Вывести список автомобилей и работ, которые не сняты с производства на текущий момент, где стоимость выше 1000
    рублей. В формате Марка, Модель, Наименование работ, Стоимость работ.</p>
