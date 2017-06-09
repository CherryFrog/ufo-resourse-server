<!-- navigation panel -->
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.v1.partials.content_management.navigation')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end navigation panel -->

<!-- form panel -->
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form class="well">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="rubric_id" class="control-label">Укажите рубирку:</label>
                            <select class="form-control" id="rubric_id">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="control-label">Указать категорию:</label>
                            <select class="form-control" id="category_id">
                                <option value="0" selected>Оставить поле пустым</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sub_category_id" class="control-label">Указать подкатегорию:</label>
                            <select class="form-control" id="sub_category_id">
                                <option value="0" selected>Оставить поле пустым</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="article_id" class="control-label">Укажите статью:</label>
                            <select class="form-control" name="article_id" id="article_id">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="photo_alt">Введите описание для ботов поисковиков:</label>
                            <input type="text" name="photo_alt" class="form-control" id="photo_alt" placeholder="Описание для ботов поисковиков">
                        </div>
                        <div class="form-group">
                            <label for="article_name">Выбирите фотографию:</label>
                            <input type="file" name="photo_file" class="form-control" id="photo_file" placeholder="Атрибут alt">
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Подтвердить загрузку</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end form panel -->
