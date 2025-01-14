<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: /');
    exit;
}
?>

<h1 hidden="hidden">This is MVC-project for AMS-Software.</h1>

<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Форма добавления данных автомобиля</h1>
                        <form method="POST" class="needs-validation" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="carBrand">Марка автомобиля</label>
                                <input id="carBrand" type="text" class="form-control" name="carBrand" value="" required
                                       autofocus>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="carModel">Модель автомобиля</label>
                                <input id="carModel" type="text" class="form-control" name="carModel" value="" required>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="startDate">Дата начала производства</label>
                                <input id="startDate" type="number" class="form-control" name="startDate"
                                       min="1900" max="2025" step="1" value="2006" required>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="endDate">Дата окончания производства</label>
                                <input id="endDate" type="number" class="form-control" name="endDate"
                                       min="1900" max="2025" step="1" value="2016" required>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="carImage">Изображение автомобиля</label>
                                <input id="carImage" type="file" class="form-control" name="carImage" value=""
                                       required>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="carType">Тип кузова автомобиля</label>
                                <select id="carType" class="form-control" name="carType" required>
                                    <option value="">Выберите тип кузова</option>
                                    <option value="hatchback">Хэтчбэк</option>
                                    <option value="jeep">Джип</option>
                                    <option value="sedan">Седан</option>
                                </select>
                            </div>

                            <div class="align-items-center d-flex">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Добавить автомобиль
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            <a href="/tables" class="text-dark">Посмотреть таблицу добавленных автомобилей</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--<div class="table flex">-->
<!--    <div class="row flex">-->
<!--        --><?php
//        if (isset($data)) {
//            foreach ($data as $item) {
//                ?>
<!--                <div class="cell">-->
<!--                    --><?php
//= $item; ?>
<!--                </div>-->
<!--                --><?php
//            };
//        }
//        ?>
<!--    </div>-->
<!--</div>-->
<!---->
<?php
//dump($data);
?>
