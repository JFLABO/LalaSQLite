@extends('layouts.my')

@section('content')
<?php
Auth::logout();
    ?>
    <BR>
ログアウトしました。
@endsection
