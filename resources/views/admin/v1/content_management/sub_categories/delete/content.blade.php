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
                        <label for="sub_category_id">Вы собираетесь удалить подкатегорию:</label>
                        <p>Подкатегория 1</p>
                        <label>Вместе с ней (будут удалены|будет удалена<!--|будет удален-->):</label>
                        <ul class="list-inline" style="margin-bottom: 20px">
                            <li><a href="#" class="badge">1 статья</a></li>
                            <li><a href="#" class="badge">1 фотография</a></li>
                            <!--<li><a href="#" class="badge">1 комментарий</a></li>-->
                        </ul>
                        <input type="hidden" name="sub_category_id" value="{{ 1 }}" id="sub_category_id"/>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Подтвердить удаление</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end form panel -->
