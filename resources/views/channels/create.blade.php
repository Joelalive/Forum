@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new channel</div>

                <div class="card-body">
                    <form action="{{route('channels.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                    <input type="text" name="channel" class="form-control">
                    </div>
                    <div class="form-group text-center">
                    <button class="btn btn-sm btn-success" type="submit">
                    Store Channel
                    </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
