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
    <div class="col-sm-3 col-sm-push-9">
        <div class="text-right">
            <a href="#" class="btn btn-success">Добавить подкатегорию</a>
        </div>
    </div>
    <div class="col-sm-9 col-sm-pull-3">
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
                <th>ПОДКАТЕГОРИЯ</th>
                <th class="text-center">СТАТЬИ</th>
                <th class="text-center">ФОТОГРАФИИ</th>
                <th colspan="2" class="text-center">ДЕЙСТВИЕ</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 1; $i < 21; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>В рубрике "Рубрика 1" категория "Категория 1"</td>
                    <th>Подкатегория {{ $i }}</th>
                    <td class="text-center"><a href="#">5 статей</a></td>
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
