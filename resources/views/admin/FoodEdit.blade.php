<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>Создание</title>
</head>
<body>
    <div class="container padding-first">
        <!-- Админ меню-->
        <div class="text-header text-center ">Редактирование меню</div>
        <div class="row">
            <ul class="list-inline text-center text-header fw-normal">
                <li class="list-inline-item"><a class="exit" href="{{ route('admin.admin') }}">Назад</a></li>  
            </ul>
        </div>
        <hr>
        <!-- Админ меню-->
    
      
        <form action="{{ route('food.update', $food->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        
                        <label for="" class="form-label">Название</label>
                        <input type="text" name="name" id="namefood" class="form-control" placeholder="Название " required>
                    </div>
                   <!-- <div class="mb-3">
                        <label class="form-label" for="customFile">Загрузить фотографию</label>
                    <input type="file" class="form-control" id="customFile" />
                    </div> -->
                    <div class="mb-3">
                        <label class="form-label">Состав</label>
                        <input type="text" name="sostav" id="sostav" class="form-control" placeholder="Состав" required>
                    </div>
                </div>
    
                <div class="col-1"></div>
    
                <div class="col ">
                    <div class="mb-3 ">
                        <label for="" class="form-label">Вес, г</label>
                        <input type="text" name="weight" id="weight" class="form-control" placeholder="Вес" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Цена</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Цена" required>
                    </div>
                    
                </div>
             </div>

             <button type="submit" class="btn-bg-blue mx-auto btn-p col-2 mb-5">Изменить</button>
         </form>
        
     
        </div>
        
    
</body>
</html>