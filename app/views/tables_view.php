<h2>Таблицы данных</h2>
<section class="d-flex">
    <div class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4>Таблица марок автомобилей</h4>
                        <div class="d-flex flex-column">
                            <?php
                            foreach ($data['carBrands'] as $item) {
                                ?>
                                <form action="/tables/deletecarbrands" method="post">
                                    <div class="d-flex justify-content-between">
                                        <input type="hidden" name="id" value="<?= $item['id']; ?>">
                                        <div class="cell"><?= $item['id']; ?></div>
                                        <div class="cell"><?= $item['carBrand']; ?></div>
                                        <button type="submit">Удалить</button>
                                    </div>
                                </form>
                                <?php
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4>Таблица моделей автомобилей</h4>
                        <div class="d-flex flex-column">
                            <?php
                            foreach ($data['carModels'] as $item) {
                                ?>
                                <form action="/tables/deletecarmodels" method="post">
                                    <div class="d-flex justify-content-between">
                                        <input type="hidden" name="id" value="<?= $item['id']; ?>">
                                        <div class="cell"><?= $item['id']; ?></div>
                                        <div class="cell"><?= $item['carModel']; ?></div>
                                        <div class="cell"><?= $item['startDate']; ?></div>
                                        <div class="cell"><?= $item['endDate']; ?></div>
                                        <div class="cell"><?= $item['carType']; ?></div>
                                        <button type="submit">Удалить</button>
                                    </div>
                                </form>
                                <?php
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4>Таблица стоимости работ</h4>
                        <div class="d-flex flex-column">
                            <?php
                            foreach ($data['workCosts'] as $item) {
                                ?>
                                <form action="/tables/deleteworkcosts" method="post">
                                    <div class="d-flex justify-content-between">
                                        <input type="hidden" name="id" value="<?= $item['id']; ?>">
                                        <div class="cell"><?= $item['id']; ?></div>
                                        <div class="cell"><?= $item['workType']; ?></div>
                                        <div class="cell"><?= $item['workTime']; ?></div>
                                        <div class="cell"><?= $item['workCost']; ?></div>
                                        <button type="submit">Удалить</button>
                                    </div>
                                </form>
                                <?php
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

