<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>Панель администратора</title>
</head>
<body>
    <div class="container padding-first">
       <!-- Админ меню-->
       <div class="container padding-first">
    <!-- Админ меню-->
    <div class="text-header text-center">Панель администратора</div>
    <div class="row">
        <ul class="list-inline text-center text-header fw-normal">
            <li class="list-inline-item"><button class="tab-btn active" data-tab="tabs">Разделы</button></li>
            @foreach ($category as $cat)
                <li class="list-inline-item">
                    <button class="tab-btn" data-tab="{{ $cat->name }}">{{ $cat->name }}</button>
                </li>
            @endforeach
        </ul>
    </div>
    <hr>

    <!-- Содержимое вкладок -->
    <div class="tab-content">
        <div class="tab-pane active" id="tabs-tab">
            <a class="btn-bg-blue mx-auto col-2 mb-5" href="{{ route('adminTabs.store') }}">создать</a>
            
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Действие</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item) 
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('categories.edit', $item->id) }}" class="link-success">
                                        <i class="bi bi-pencil-fill fa-fw"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('categories.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="link-danger border-0 bg-transparent">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @foreach ($category as $cat)
        <div class="tab-pane" id="{{ $cat->name }}-tab">
            <a class="btn-bg-blue fs-5 mx-auto btn-p col-2 mb-5" 
               href="{{ route('adminFood.create', ['category_id' => $cat->id]) }}">
               создать
            </a>
            
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Название</th>
                        <th scope="col">Состав</th>
                        <th scope="col">Вес, г</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Действие</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cat->foods as $food)
                    <tr>
                        <th scope="row">{{ $food->id }}</th>
                        <td class="col-2"><img src="../public_html/image/background.png" alt=""></td>
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->sostav }}</td>
                        <td>{{ $food->weight }}</td>
                        <td>{{ $food->price }}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                <a href="{{ route('food.edit', $food->id) }}" class="link-success">
                                        <i class="bi bi-pencil-fill fa-fw"></i>
                                    </a>
                                </div>
                                <div class="col">
                                <form action="{{ route('food.destroy', $food->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="link-danger border-0 bg-transparent">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endforeach
    </div>
</div>

</div>

    
     
        </div>
        
</body>
<script src="{{ asset('js/admin.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>