@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($tweets as $tweet)
                <div class="media">
                    <div class="media-left media-">
                        <a href="#">
                            <img style="width: 60px; height: 60px;" class="media-object" src="https://avatars0.githubusercontent.com/u/6479063?s=460&v=4">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $tweet->user->name }}</h4>
                        {{ $tweet->content }}
                        <div class="clearfix">
                            <div class="pull-right">{{ $tweet->created_at }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
