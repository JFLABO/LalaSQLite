@extends('layouts.my')

@section('content')
{{$user->name}}
<button class="ui-btn ui-btn-b" id="BTN02">たびれぽ投稿</button>
<script>
  $('#BTN02').click(function() {
    //alert('Handler for .click() called.');
      window.location.href = 'http://jflabo.org/rosh/public/post';
        });
	</script>
<ul data-role="listview">
    <li><記事一覧</li>
    <li><a href="#">Audi</a></li>
    <li><a href="#">BMW</a></li>
    <li><a href="#">Cadillac</a></li>
    <li><a href="#">Ferrari</a></li>
</ul>
@endsection
