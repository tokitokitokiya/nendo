<x-app-layout>
    
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>items</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>    


    <table>
        <thead>
            <tr>
                <th>商品ID</th>
                <th>企業名</th>
                <th>商品名</th>
                <th>値段</th>
            </tr>
        </thead>
    <tbody>
        @foreach($items as $item)
        <div>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->shop->name }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
            </tr>
        </div>
        @endforeach
    </tbody>
    </table>


<a href="/">戻る</a>
</html>

</x-app-layout>