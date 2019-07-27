<!DOCTYPE html>
<html lang="ja">
<head>
<title>マルチページのてすと</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>
<body>
  <div data-role="header">
  <h1>jflabo.org</h1>
  <a href="#" id="BTN_BK" data-icon="ui-icon-back" class="ui-btn-right">Back</a>
  </DIV>
    @yield('content')
</body>
<script>
  $('#BTN_BK').click(function() {
    //alert('Handler for .click() called.');
    window.location.href = 'http://jflabo.org/';
  });
</script>
</html>
