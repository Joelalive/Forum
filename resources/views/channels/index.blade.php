@extends('layouts.app')

@section('content')

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
                   
                   @foreach($channel_pages as $page)
                   <tr>
                   <td>{{$page->title}}</td>
                   <td><a class="btn btn-info btn-sm" href="{{route('channels.edit',['channel' => $page->id])}}"> Edit </a></td>
                   <td>
                   <form action="{{route('channels.destroy',['channel' => $page->id])}}" method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                   </form>
                   </td>
                   </tr>
                   @endforeach
                   </tbody>
                   </table>
                   <div class="text-center">
                   {{$channel_pages->links()}}
                   </div>
                </div>
            </div>

@endsection
