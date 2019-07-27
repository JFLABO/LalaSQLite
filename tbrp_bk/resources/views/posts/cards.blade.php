@extends('layouts.my')

@section('content')

<div class="container">
    <h1>一覧</h1>
    <div class="table-responsive">
        <?php $i=1; ?>
            @foreach ($posts as $post)

                    <a href="{{ url('posts/'.$post->id) }}">
                     <div class="card" style="width:250px;display:inline-block;">
                          <div>
                        <div class="card-body">{{ $post->title }}</div>
                        <img src="img/icon_5p_192.png" style="max-width:80px;float: left;display: inline-block;">
                        <div class="media" style="display: inline;display: inline-block;float: left;display: inline-block;">
                        </div>
                        <div>
                          <div class="media-body">
                        <h4 class="media-heading">{{ $post->updated_at }} </h4>
                        <p> 
                            {{ $post->body }} <BR>
                                                         
                              </p>
                          </div>
                          </div>
                      </div>
                    </div>
                        </a>
                @if ($i%2==0 )
                    <BR><BR>
                @else

                @endif
                        <?php $i++; ?>
            @endforeach

    </div>
</div>
@endsection
