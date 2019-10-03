@extends('layouts.app')
{{--
<!-- layouts.php を拡張する命令　ユーザーごとに読み込むファイルを分ける -->
--}}

@push('head')

<style>

.cafeContainer {
    width: 90%;
    margin-right: auto;
    margin-left: auto;
    margin-top: 40px;
}
.cafeList {

    box-shadow:3px 3px 3px grey;

}
h2 {
    text-align: center;
    padding-top: 50px;
}
.table tr {
    border-left: 1px solid #DEE2E6;
}
.table tr:last-of-type {
    border-bottom: 1px solid #DEE2E6;
}
.table td {
    border-right:1px solid #DEE2E6;
    background-color:#fff;
}

.button {
    display: inline-block;
    background-color: pink;
    width: 200px;
    border-radius: 50px;
    height: 40px;
    text-align: center;
    padding-top:10px;
    position: absolute;
    right:0;

}
label a {
    box-shadow:3px 3px 3px;
    display: inline-block;
    position: relative;
    margin-right:50px;
}
a:active {
    box-shadow: 0px 0px 0px;    
}
label {

}
</style>

@endpush



@section('content')
{{--
<!-- yield から@section　内に読み込む? -->
--}}

<h2>Cebu Cafe一覧</h2>


<div class="cafeContainer">
<div class="cafeList">
    <table class="table">
      <thead>
      <tr class="titleList">
            <td>お店の名前</td>
            <td>住所</td>
            <td>コンセントの数</td>
            <td>席の数</td>
            <td>wifiの速度</td>
            <td>開店時間</td>
            <td>閉店時間</td>
            <td>定休日</td>
            <td>クレジットカードの使用</td>
            <td>特記事項</td>
      </tr>
      </thead>
      <tbody>
      @foreach ($cafes as $cafe)
          <tr>
              <td>{{ $cafe->name }}</td>
              <td>{{ $cafe->address }}</td>
              <td>{{ $cafe->consent }}</td>
              <td>{{ $cafe->seat }}</td>
              <td>{{ $cafe->wifi }}</td>
              <td>{{ $cafe->open }}</td>
              <td>{{ $cafe->close }}</td>
              <td>{{ $cafe->restday }}</td>
              <td>{{ $cafe->credit }}</td>
              <td>{{ $cafe->addtext }}</td>
          </tr>
      @endforeach
      </tbody>
    </table>


</div>
<label><a href="{{ route('cafe.create') }}" class="button">戻る</a></label>


</div>

@endsection