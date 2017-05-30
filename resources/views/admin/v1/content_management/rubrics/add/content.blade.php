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
                            <label for="rubric_name">Введите название:</label>
                            <input type="text" name="rubric_name" class="form-control" id="rubric_name" placeholder="Новая рубрика">
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
