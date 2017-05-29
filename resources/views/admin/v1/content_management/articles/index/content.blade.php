<div class="row">
    <div class="col-sm-12">
        <ul class="pager">
            <li><a href="#">РУБРИКИ</a></li>
            <li><a href="#">КАТЕГОРИИ</a></li>
            <li><a href="#">ПОДКАТЕГОРИИ</a></li>
            <li><a href="#">СТАТЬИ</a></li>
            <li><a href="#">ФОТОГРАФИИ</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-sm-2 col-sm-push-10">
        <div class="text-right">
            <a href="#" class="btn btn-success">Добавить статью</a>
        </div>
    </div>
    <div class="col-sm-10 col-sm-pull-2">
        <div class="text-left">
            <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>ГДЕ РАЗМЕЩЕНА</th>
                <th>СТАТЬЯ</th>
                <th class="text-center">ФОТОГРАФИИ</th>
                <th colspan="2" class="text-center">ДЕЙСТВИЕ</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 1; $i < 21; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>В рубрике "Рубрика 1"</td>
                    <td>Статья {{ $i }}</td>
                    <td class="text-center"><a href="#">Нет фотографий</a></td>
                    <td class="text-center"><a href="#">Редактировать</a></td>
                    <td class="text-center"><a href="#">Удалить</a></td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="text-right">
            <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</"#</li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
    </div>
</div>
