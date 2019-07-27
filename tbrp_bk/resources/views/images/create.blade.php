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
                        {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
                        {!! Form::file('file') !!}
                    </div>

                    <div class="form-group">
                        <label for="title">{{ __('Title') }}</label>
                        <input id="title" type="text" class="form-control" name="title" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="body">{{ __('Body') }}</label>
                        <textarea id="body" class="form-control" name="body" rows="8" required></textarea>
                    <div class="form-group">
                        {!! Form::submit('アップロード', ['class' => 'btn btn-default']) !!}
                    </div>
                        
                    {!! Form::close() !!}


        </div>

</div>
@endsection