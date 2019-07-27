@php
    $title = $images->title;
@endphp
@extends('layouts.my')
@section('content')
<div class="container">
    <h1 id="post-title">{{$title}}</h1>
        <?php
          //$img = base64_encode(file_get_contents('video.gif'));
          $img=$images->img ;
          ?>
          <img src="data:image/jpg;base64,<?php echo $img; ?>" style="max-width:380px;float: left;display: inline-block;"><BR>
    <table><tr><td>

    <!-- 編集・削除ボタン -->
    <!--
    <div class="edit">
        <a href="{{ url('images/'.$images->id.'/edit') }}" class="btn btn-primary" data-ajax="false">
            {{ __('Edit') }}
        </a>
    </div>
    -->
        </td><td>
    <!--
    <form action="{{ route('images.destroy', $images->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-primary btn-danger">Delete</button>
    </form>
    --!>
    </td></tr></table>
    <!-- 記事内容 -->
    <dl class="row">
        <dt class="col-md-2">{{ __('Created') }}:</dt>
        <dd class="col-md-10">
            <time itemprop="dateCreated" datetime="{{ $images->created_at }}">
                {{ $images->created_at }}
            </time>
        </dd>
        <dt class="col-md-2">{{ __('Updated') }}:</dt>
        <dd class="col-md-10">
            <time itemprop="dateModified" datetime="{{ $images->updated_at }}">
                {{ $images->updated_at }}
            </time>
        </dd>
    </dl>
    <hr>
    <div id="post-body">
<pre style="padding:10px;">
{{ $images->body }}
</pre>
    </div>
</div>
@endsection
