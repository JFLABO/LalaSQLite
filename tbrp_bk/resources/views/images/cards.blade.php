@extends('layouts.my')

@section('content')

<div class="container">
    <h1>一覧</h1><BR>
    <!-- <div class="table-responsive"><BR>-->
        <?php $i=1; ?>
            @foreach ($images as $image)

                    <a href="{{ url('images/'.$image->id) }}">
                     <div class="card" style="width:250px;height:385px;display:inline-block;vertical-align:top;">
                        <div class="card-body">{{ $image->title }}</div>
                              <?php
                              //$img = base64_encode(file_get_contents('video.gif'));
                              $img=$image->img ;
                              ?>
                         <center>
                              <img src="data:image/jpg;base64,<?php echo $img; ?>" style="max-width:180px;max-height:250px;margin:auto;text-align:center;"><BR>
                              <!--
                                    <img src="img/icon_5p_192.png" style="max-width:180px;float: left;display: inline-block;">
                                -->
                         </center>
                              <BR>
                        <!--
                        <div class="media" style="display: inline;display: inline-block;float: left;display: inline-block;">
                        </div>
                        -->
                          {{ $image->updated_at }} 
                            <p> 
                                <?php
                                $bdy=mb_strimwidth( $image->body, 0, 100, "...");
                                echo $bdy;
                                ?>
                                <BR>
                                                         
                              </p>
                        </div>
                        </a>
                @if ($i%4==0 )
                    <BR><BR>
                @else

                @endif
                        <?php $i++; ?>
            @endforeach
            {{ $images->links() }}

    </div>
@endsection
