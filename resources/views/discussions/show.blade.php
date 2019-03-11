@extends('layouts.app')

@section('content')

<div class="card"> 
                <div class="card-header">
                <img src="{{asset($discussion->user->avatar)}}" width="40px" height="40px" alt="">
                <span class="pl-2">{{$discussion->user->name}}</span>
                <span class="pl-2">{{$discussion->created_at->diffForHumans()}}</span>
                </div>

                <div class="card-body">
                <h4 class="text-center">
                {!! $discussion->title !!}
                </h4>
                <hr/>
                <h5 class="text-center">
                {!! $discussion->content !!}
                </h5>
                </div>
                <div class="card-footer">
                {{$discussion->replies->count()}} Replies
                </div>
            </div>

@endsection
