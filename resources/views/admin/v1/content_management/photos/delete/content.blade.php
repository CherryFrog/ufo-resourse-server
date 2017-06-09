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
                        <label for="article_id">Вы собираетесь удалить фотографию:</label>
                        <p><img src="" alt="" width="320" height="240"></p>
                        <input type="hidden" name="article_id" value="{{ 1 }}" id="article_id"/>
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
