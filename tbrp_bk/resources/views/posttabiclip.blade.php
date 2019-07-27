@extends('layouts.my')
@section('content')
<div class="container">
    <h1></h1>
                    {{--成功時のメッセージ--}}
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    {!! Form::open(['url' => '/upload_img', 'method' => 'post', 'files' => true]) !!}
                    {{-- エラーメッセージ --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="title">{{ __('Title') }}</label>
                        <input id="title" type="text" class="form-control" name="title" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="body">{{ __('Body') }}</label>
                        <textarea id="body" class="form-control" name="body" rows="3" ></textarea>
                    <BR>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('tabi clip!!', ['class' => 'btn btn-default']) !!}
                    </div>
                    <div class="form-group">
                        <label for="title">{{ __('lat') }}</label>
                        <input id="title" type="text" class="form-control" name="lat" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="title">{{ __('lon') }}</label>
                        <input id="title" type="text" class="form-control" name="lon" autofocus>
                    </div>
                    {!! Form::close() !!}


</div>
<script>
// オプション・オブジェクト
var optionObj = {
	"enableHighAccuracy": false ,
	"timeout": 8000 ,
	"maximumAge": 5000 ,
} ;
// 成功した時の関数
function successFunc( position )
{
	// 緯度をアラート表示
	//alert( position.coords.latitude ) ;

	// 経度をアラート表示
	//alert( position.coords.longitude ) ;
}

// Geolocation APIに対応している
if( navigator.geolocation )
{
	// 現在位置を取得できる場合の処理
	//alert( "あなたの端末では、現在位置を取得することができます。" ) ;
  // 現在位置を取得する
  navigator.geolocation.getCurrentPosition( successFunc , errorFunc , optionObj ) ;
  //alert(coords.latitude);

}

// Geolocation APIに対応していない
else
{
	// 現在位置を取得できない場合の処理
	alert( "あなたの端末では、現在位置を取得できません。" ) ;
}

// 失敗した時の関数
function errorFunc( error )
{
	// エラーコードのメッセージを定義
	var errorMessage = {
		0: "原因不明のエラーが発生しました…。" ,
		1: "位置情報の取得が許可されませんでした…。" ,
		2: "電波状況などで位置情報が取得できませんでした…。" ,
		3: "位置情報の取得に時間がかかり過ぎてタイムアウトしました…。" ,
	} ;

	// エラーコードに合わせたエラー内容をアラート表示
	alert( errorMessage[error.code] ) ;
}
</script>
@endsection
