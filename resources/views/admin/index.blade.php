<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ Auth::check() ? "Logged In Admin" : "Logged Out"}}</title>
    </head>
    <body>
        <form method="POST" action="{{ route('logout') }}">
            <input type="submit" value="Exit">
        </form>
        
        <fieldset>
            <legend>Добавление мерча</legend>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <input type="text" name="second_name" placeholder="Фамилия">
                <input type="text" name="first_name" placeholder="Имя">
                <input type="text" name="patronymic" placeholder="Отчество">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Пароль">
                <!-- <input type="password" name="password_confirmation" placeholder="Повторите пароль"> -->

                <input type="submit" value="Добавить">
            </form>
        </fieldset>
    </body>
</html>