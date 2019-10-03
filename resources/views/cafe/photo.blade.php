@extends('layouts.app')
{{--
<!-- layouts.php を拡張する命令　ユーザーごとに読み込むファイルを分ける -->
--}}
@push('head')
<style>
.photoPage {
   max-width: 1200px;
   width: 80%;
   margin-right: auto;
   margin-left: auto;
}
 h2 {
  text-align:center;
  padding-top: 50px;
 }
.photoSendPage {
   padding-top: 50px;
   
}
.send {
  padding: 5px 10px;
}
</style>
@endpush

<!-- ↑cssを変えてる欄 -->







<!-- ↓ページとなる部分のコード -->

@section('content')


<form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
   @csrf
  <!-- csrf は制限時間 5分すぎると送信できませんよ -->
  <div class="photoPage">
<h2>Cafe画像送信ページ</h2>
   <div class="photoSendPage"> 
<input type="file" name="picture">
<input type="submit" name="buttom" value="送信" class="send">
  </div>
  </div>
  
</form>


@endsection
