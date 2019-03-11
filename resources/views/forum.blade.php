@extends('layouts.app')

@section('content')

    @foreach($discussions as $discussion)
            <div class="card"> 
                <div class="card-header">
                <img src="{{asset($discussion->user->avatar)}}" width="40px" height="40px" alt="">
                <span class="pl-2">{{$discussion->user->name}}</span>
                <span class="pl-2">{{$discussion->created_at->diffForHumans()}}</span>
                <a href="{{route('discussion', ['slug' => $discussion->slug])}}" class="btn btn-secondary float-right">View</a>
                </div>

                <div class="card-body">
                <h4 class="text-center">
                {!! $discussion->title !!}
                </h4>
                <h5 class="text-center">
                {!! str_limit($discussion->content, 50) !!}
                </h5>
                </div>
                <div class="card-footer">
                {{$discussion->replies->count()}} Replies
                </div>
            </div>
    @endforeach

    <div class="text-center">
    {{$discussions->links()}}
    </div>
    

@endsection
