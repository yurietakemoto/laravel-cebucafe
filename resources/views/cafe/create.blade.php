@extends('layouts.app')
{{--
<!-- layouts.php を拡張する命令　ユーザーごとに読み込むファイルを分ける -->
--}}
@push('head')
<style>
.adminPage {
  padding: 50px 100px;
}
h1 {
    padding-bottom:50px;
  }

  input {
    background-color: #fff;
    padding-right: 30px;
    margin-right: 5px;
    margin-left: 20px;

  }
  .container {
    margin-bottom: 10px;
  }
  .address {
    width: 500px;
  }
  label {
    margin-right:20px;
  }
  .send {
    width: 150px;
    height: 50px;
  }

  </style>
@endpush

<!-- ↑cssを変えてる欄 -->


<!-- ↓ページとなる部分のコード -->

@section('content')
{{--
<!-- yield から@section　内に読み込む? -->
--}}

<!-- 全体をadminPageのsectionで、
        質問内容を１つずつcontainerのdivタグで包んでる -->



<section class="adminPage">

<h1>Cebu Cafe {{$user}} Page</h1>
{{--
Cafe Controller.php から $user を代入　を使用
--}}
<form method="POST" action="{{ route('cafe.store') }}">
  @csrf
  <!-- csrf は制限時間　5分すぎると送信できませんよ -->
  <!-- formの中に色々作っている -->

  <div class="container">
  <label>お店の名前<input type="text" name="name"></label>
  </div>
  <div class="container">
  <label>住所<input type="text" name="address" class="address"></label>
  </div>
{{--  <label>メニュー<input type="text" name="menu"></label>
  --}}
  {{--
  <!-- <label>写真<input type="file" name="photo"></label> -->
  <!-- <label>メニューの写真<input type="file" name="photo"></label> -->
  --}}
  <div class="container">
    コンセントの数
        <label><input type="text" name="consent"></label>
  </div>

  <div class="container">
 席の数
    <label><input type="text" name="seat"></label>
    </div>

  <div class="container">
  </div>

  <div class="container">
  wifiの速度
    <label><input type="radio" name="wifi" value="1">速い</label>
    <label><input type="radio" name="wifi" value="2">普通</label>
    <label><input type="radio" name="wifi" value="3">遅い</label>
    </div>

  <div class="container">
  営業時間
  <label>OPEN：<input type="time" name="open"></label>
  <label>CLOSE：<input type="time" name="close"></label>
  </div>

  <div class="container">
  定休日
  <label><input type="checkbox" name="restday[]" value="1">月曜日</label>
  <label><input type="checkbox" name="restday[]" value="2">火曜日</label>
  <label><input type="checkbox" name="restday[]" value="4">水曜日</label>
  <label><input type="checkbox" name="restday[]" value="8">木曜日</label>
  <label><input type="checkbox" name="restday[]" value="16">金曜日</label>
  <label><input type="checkbox" name="restday[]" value="32">土曜日</label>
  <label><input type="checkbox" name="restday[]" value="64">日曜日</label>
  </div>


  <div class="container">
  <p>クレジットカードの利用</p>
  <div class="custom-control custom-switch">
  <input type="checkbox" name="credit" class="custom-control-input" id="customSwitch1">
  <label class="custom-control-label" for="customSwitch1"></label>
</div>  
</div>  

 {{--
      カフェのURL
    <label><input type="text" name="link"></label>
    --}}


  <div class="container">
      特記事項
    <label><textarea name="addtext" cols="30" rows="10"></textarea></label>
  <label><input type="submit" name="send" value="送信" class="send"></label>
  </div>



  </form>

  </section>
@endsection
