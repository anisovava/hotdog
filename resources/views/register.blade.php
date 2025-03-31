<div class="tab-content tabs">
                   <form method="POST" action="{{ route('registerCreate') }}" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="exampleLogin">Логин</label>
                        <input type="text" class="form-control" id="exampleLogin" name="name">
                    </div>
                    <div class="form-group">
                        <label for="examplePassword">Пароль</label>
                        <input type="password" class="form-control" id="examplePassword" name="password">
                    </div>
                    <button type="submit" class="btn btn-default">Войти</button>
                   </form>
                </div>
