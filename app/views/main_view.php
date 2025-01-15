<section class="d-flex justify-content-center">
    <div class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h1 class="fs-4 card-title fw-bold mb-4 text-center">Таблица марок автомобилей</h1>
                        <form method="POST" action="/main/addCarBrands" class="needs-validation"
                              enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="carBrand">Марка автомобиля</label>
                                <input id="carBrand" type="text" class="form-control" name="carBrand" value=""
                                       required
                                       autofocus>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">
                                    Добавить автомобиль
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            <a href="/tables" class="text-dark">Посмотреть таблицу</a>
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
                        <h1 class="fs-4 card-title fw-bold mb-4 text-center">Таблица моделей автомобилей</h1>
                        <form method="POST" action="/main/addCarModels" class="needs-validation"
                              enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="carModel">Модель автомобиля</label>
                                <input id="carModel" type="text" class="form-control" name="carModel" value=""
                                       required>
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

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">
                                    Добавить автомобиль
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            <a href="/tables" class="text-dark">Посмотреть таблицу</a>
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
                        <h1 class="fs-4 card-title fw-bold mb-4 text-center">Таблица стоимости работ</h1>
                        <form method="POST" action="/main/addWorkCosts" class="needs-validation"
                              enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="workType">Вид работ</label>
                                <input id="workType" type="text" class="form-control" name="workType" value=""
                                       required
                                       autofocus>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="workTime">Затраченное время</label>
                                <input id="workTime" type="text" class="form-control" name="workTime" value=""
                                       required>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="workCost">Стоимость работ</label>
                                <input id="workCost" type="number" class="form-control" name="workCost"
                                       min="0" step="1" value="" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">
                                    Добавить стоимость
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            <a href="/tables" class="text-dark">Посмотреть таблицу</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
