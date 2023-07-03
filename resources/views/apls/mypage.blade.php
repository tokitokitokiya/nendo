<x-app-layout>
    
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mypage</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>    

<!-- ユーザー名の表示 -->
    <h1>{{ $user->name }}さんの注文一覧</h1>

<!-- 注文履歴の表示 -->
    <table>
        <thead>
            <tr>
                <th>学年</th>
                <th>シーズン</th>
                <th>製造企業</th>
                <th>商品名</th>
                <th>数量</th>
                <th>値段</th>
                <th>削除ボタン<th>
            </tr>
        </thead>
    <tbody>
        @foreach($userorders as $order)
        <div>
            <tr>
                <td>{{ $order->user->grade }}</td>
                <td>{{ $order->season }}</td>
                <td>{{ $order->item->shop->name }}</td>
                <td>{{ $order->item->name }}</td>
                <td>{{ $order->pcs }}</td>
                <td class="table_ {{$order->item->shop->id}}">{{ $order->item->price}}</td>
                <td>
                    <form action="/order/{{ $order->id }}" id="form_{{ $order->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $order->id }})">delete</button>
                    </form>
                </td>
            </tr>
        </div>
        @endforeach
    </tbody>
    </table>

<!-- 新しい注文の追加フォーム -->
    <form method="POST" action="/orders">
        @csrf
        <input type="number" name="grade" placeholder="あなたの学年"> 
        <input type="number" name="order[item_id]" placeholder="商品ID">
        <input type="number" name="order[pcs]" placeholder="数量">
        <input type="hidden" name="order[user_id]" value="{{$user->id}}" placeholder="{{$user->id}}">
        <input tupe="hidden" name="order[season]" value="<?php echo date('Y-m-j');?>">
        <button type="submit">注文する</button>
    </form>
</body>
<a href="/">戻る</a>

<script>
        function deletePost(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
                //${}を使う場合、''やダブルクォーテーションではなく、``（バッククォーテーション）を使う。"form_"+idでも可
                
                /*${}はテンプレートリテラルの中に変数や式を突っ込むための記号。文字列に変数を組み込むのに使う。
                var foo = 'ート';
                var bar1 = 'テンプレ' + foo + 'リテラル';
                var bar2 = `テンプレ${foo}リテラル`;
                これらの結果は同じ。
                "form_"+id
                submit()は送信
                */
                    
            }
                
        }
</script>
</html>

</x-app-layout>