@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Channels </div>

                <div class="card-body">
                   <table class="table table-hover">
                   <thead>
                   <th>Name</th>
                   <th>Edit</th>
                   <th>Delete</th>
                   </thead>
                   <tbody>
                   <tr>
                   @foreach($channels as $channel)
                   <td>{{$channel->title}}</td>
                   <td><a class="btn btn-info btn-sm" href="{{route('channels.edit',['channel' => $channel->id])}}"> Edit </a></td>
                   <td>
                   <form action="{{route('channels.destroy',['channel' => $channel->id])}}" method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                   </form>
                   </td>
                   @endforeach
                   </tr>
                   </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
