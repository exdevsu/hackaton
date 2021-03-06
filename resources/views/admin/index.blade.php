<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ Auth::check() ? "Logged In Admin" : "Logged Out"}}</title>
    </head>
    <body>
        <a href="#" onclick="return logoutForm.submit()">Exit</a>
        <form name="logoutForm" method="POST" action="logout"> @csrf </form>
        
        <fieldset>
            <legend>Добавление мерча</legend>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <input type="text" name="second_name" placeholder="Фамилия">
                <input type="text" name="first_name" placeholder="Имя">
                <input type="text" name="patronymic" placeholder="Отчество">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Пароль">

                <input type="submit" value="Добавить">
            </form>
        </fieldset>
    </body>
</html>