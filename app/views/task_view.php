<h2>Задачи и решения</h2>
<h4>Запрос 1:</h4>
<p>Вывести список автомобилей, снятых с производства на сентябрь 2018 года. В формате Марка, Модель, Дата снятия с
    производства.</p>
<h4>Решение:</h4>
<p>Надо выстроить запрос с использование JOIN. Нам нужно создать связь между моделью и маркой автомобиля. Поэтому мы
    добавляем столбец carBrand_id в таблицу
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
                            foreach ($data[0] as $item) {
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
<h4>Запрос 2:</h4>
<p>Вывести список автомобилей и работ, которые не сняты с производства на текущий момент, где стоимость выше 1000
    рублей. В формате Марка, Модель, Наименование работ, Стоимость работ.</p>
<h4>Решение:</h4>
<p><code>SELECT carbrands.carBrand, carmodels.carModel, workcosts.workType, workcosts.workCost</code></p>
<p><code>FROM carmodels</code></p>
<p><code>INNER JOIN carbrands ON carmodels.carBrand_id = carbrands.id</code></p>
<p><code>INNER JOIN workcosts ON carmodels.workType_id = workcosts.id</code></p>
<p><code>WHERE workcosts.workCost < 1000</code></p>
<div class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="text-center">Задача 2</h4>
                    <div class="d-flex flex-column">
                        <ol>
                            <?php
                            foreach ($data[1] as $item) {
                                ?>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div class="cell"><?= $item['carBrand']; ?></div>
                                        <div class="cell"><?= $item['carModel']; ?></div>
                                        <div class="cell"><?= $item['workType']; ?></div>
                                        <div class="cell"><?= $item['workCost']; ?></div>
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
<h4>Задание 3</h4>
<p>На PHP с использованием PDO напишите класс, чтобы вывести следующие данные на странице:
    Результаты для запросов из предыдущего задания.
    Вывести автомобили из предыдущего задания, сортируя по типам кузова.
</p>
<h4>Решение:</h4>
<p>
    <code>
        <p>class PDO</p>
        <p>{</p>
        <p>public function __construct()</p>
        <p>{</p>
        <p>$pdo = new PDO("mysql:host=localhost;dbname=ams-software_storage", 'root', '');</p>
        <p>$sql =</p>
        <p>'SELECT carbrands.carBrand, carmodels.carModel, workcosts.workType, workcosts.workCost, carmodels.carType</p>
        <p>FROM carmodels</p>
        <p>INNER JOIN carbrands ON carmodels.carBrand_id = carbrands.id</p>
        <p>INNER JOIN workcosts ON carmodels.workType_id = workcosts.id</p>
        <p>ORDER BY carmodels.carType';</p>
        <p>$stm = $pdo->prepare($sql);</p>
        <p>$stm->execute();</p>
        <p>eturn $stm->fetchAll(2);</p>
        <p>}</p>
        <p>}</p>
    </code>
</p>
<div class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="text-center">Задача 2</h4>
                    <div class="d-flex flex-column">
                        <ol>
                            <?php
                            foreach ($data[2] as $item) {
                                ?>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div class="cell"><?= $item['carBrand']; ?></div>
                                        <div class="cell"><?= $item['carModel']; ?></div>
                                        <div class="cell"><?= $item['workType']; ?></div>
                                        <div class="cell"><?= $item['workCost']; ?></div>
                                        <div class="cell"><?= $item['carType']; ?></div>
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
</p>
