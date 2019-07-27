@extends('layouts.my')

@section('content')
今日の経済指標<BR>
<div class="row">
  <div class="col-sm-1 w-75" style="min-width: 610px" >
    <div id="bucketPane" style="width: 600px" data-dojo-type="dijit.layout.ContentPane" data-dojo-props="title: 'Cesium'">
        <iframe width="600" height="500" id="bucketFrame" src="http://pjfs.biz/tbrp/Cesium/Apps/IF01.html" class="fullFrame" allowfullscreen mozallowfullscreen webkitallowfullscreen></iframe>
        <!--
        <BR>  <span id="mess" style="float:right">AA</span> <BR>
          <span id="DATA" style="float:right">AA</span><BR>
          <span id="camera" style="float:right">AA</span>
        -->
    </div>
  </div>
  <div class="col-sm-2" style="min-width: 250px">
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action ">亀戸天神</a>
      <a href="#" class="list-group-item list-group-item-action ">天祖神社</a>
      <a href="#" class="list-group-item list-group-item-action">香取神社</a>
      <a href="#" class="list-group-item list-group-item-action">焼き鳥　希望</a>
      <a href="#" class="list-group-item list-group-item-action">味一番</a>
      <a href="#" class="list-group-item list-group-item-action ">ハンバーグのベア</a>
    </div>
  </div>
</div>
@endsection
