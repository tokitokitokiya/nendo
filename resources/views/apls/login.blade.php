<!DOCTYPE html>
<x-app-layout>
    
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
<form method="POST" action="/login">
    @csrf
    <input type="text" name="username" placeholder="ユーザー名">
    <input type="password" name="password" placeholder="パスワード">
    <button type="submit">ログイン</button>
</form>

</html>

</x-app-layout>