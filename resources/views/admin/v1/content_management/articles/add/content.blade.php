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
                            <label for="rubric_id" class="control-label">Укажите рубирику:</label>
                            <select class="form-control" name="rubric_id" id="rubric_id">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="control-label">Указать категорию:</label>
                            <select class="form-control" name="category_id" id="category_id">
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
                            <select class="form-control" name="sub_category_id" id="sub_category_id">
                                <option value="0" selected>Оставить поле пустым</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="article_text">Введите текст:</label>
                            <textarea class="form-control" name="article_text" id="article_text" rows="5" placeholder="Текст статьи"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="article_name">Введите название:</label>
                            <input type="text" name="article_name" class="form-control" id="article_name" placeholder="Новая статья">
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end form panel -->
