<!DOCTYPE html>
<x-app-layout>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>NendoChumon</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        
        
        <style>
        .invisible{
            display:none;
        }
        </style>
        
        <body>
            <h1>注文一覧</h1>
            <!-- チェックボックス -->
            <div>
            @foreach($shops as $shop)
                <label>
                    <input class="shop" type="checkbox" name="shops[]" value="{{ $shop->id }}" checked>
                    {{ $shop->name }}
                </label>
            @endforeach
            </div>
            <div>
                <label>
                    <input class="grade" type="checkbox" name="grade" value="1" checked>1年
                </label>
                <label>
                    <input class="grade" type="checkbox" name="grade" value="2" checked>2年
                </label>
                <label>
                    <input class="grade" type="checkbox" name="grade" value="3" checked>3年
                </label>
                    <input class="grade" type="checkbox" name="grade" value="4" checked>4年</label>
            </div>
            
            
            <table>
                <thead>
                    <tr>
                        <th>注文ID</th>
                        <th>シーズン</th>
                        <th>製造企業</th>
                        <th>商品名</th>
                        <th>数量</th>
                        <th>値段</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($orders as $order)
                <div class="order_{{$order->item->shop->id}} grade_{{$order->user->grade}} invisible">
                    <tr class="order_{{$order->item->shop->id}} grade_{{$order->user->grade}}">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->season }}</td>
                        <td>{{ $order->item->shop->name }}</td>
                        <td>{{ $order->item->name }}</td>
                        <td>{{ $order->pcs }}</td>
                        <td class="table_{{$order->item->shop->id}}">price</td>
                    </tr>
                </div>
                @endforeach
                </tbody>
            </table>
            
            <script>
                const order = @json($orders);
            </script>
            <script src="{{ asset('js/shop.js') }}"></script>

        </body>
        <div>
        <a href='/apls/mypage'>MyPageへ</a>
        </div>
        <div>
        <a href='/apls/items'>価格表改訂（最終更新）</a>
        </div>
        
        
    </html>
</x-app-layout>