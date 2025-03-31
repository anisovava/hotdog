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
        <div class="text-header text-center ">Создание раздела</div>
        <div class="row">
            <ul class="list-inline text-center text-header fw-normal">
                <li class="list-inline-item"><a class="exit" href="{{ route('admin.admin') }}">Назад</a></li>
                
            </ul>
        </div>
        <hr>
        <!-- Админ меню-->
    
        <!-- Создание -->
         <form action="{{ route('adminTabs.create') }}" method="POST">  
             @csrf
         <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Название</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Название раздела" required>
                    </div>
                    
                </div>
    
                <div class="col-1"></div>
    
             </div>
             <button type="submit" class="btn-bg-blue mx-auto btn-p col-2 mb-5">Создать</button>
         </form>
        <!-- Создание -->
    
         <!-- кнопка -->
         
         <!-- кнопка -->
     
        </div>
        
    
</body>
</html>