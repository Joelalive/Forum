@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit channel : {{$channel->title}}</div>

                <div class="card-body">
                    <form action="{{route('channels.update', ['channel' => $channel->id])}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                    <input type="text" value="{{$channel->title}}" name="channel" class="form-control">
                    </div>
                    <div class="form-group text-center">
                    <button class="btn btn-sm btn-success" type="submit">
                    Update Channel
                    </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
