@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<label for="name">Имя</label>
<input type="text" class="form-control" id="name" name="name" placeholder="Имя" value="@if(old('name')){{old('name')}}@else{{$user->name ?? ""}}@endif" required>

<label for="email">Email</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="@if(old('email')){{old('email')}}@else{{$user->email ?? ""}}@endif" required>

<label for="password">Пароль</label>
<input type="password" class="form-control" id="password" name="password" >

<label for="password-confirmation">Подтвержение пароля</label>
<input type="password" class="form-control" id="password-confirmation" name="password_confirmation" >

<hr>

<input type="submit" class="btn btn-primary" value="Сохранить">
