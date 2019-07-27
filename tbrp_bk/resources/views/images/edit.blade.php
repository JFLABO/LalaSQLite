@php
    $title = __('Edit') . ': ' . $Image->title;
@endphp
@extends('layouts.my')
@section('content')
<div class="container">
    <h1></h1>
    <form action="{{ url('images/'.$Image->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input id="title" type="text" class="form-control" name="title" value="{{ $Image->title }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="body">{{ __('Body') }}</label>
            <textarea id="body" class="form-control" name="body" rows="8" required>{{ $Image->body }}</textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-success">{{ __('Submit') }}</button>
    </form>
</div>
@endsection