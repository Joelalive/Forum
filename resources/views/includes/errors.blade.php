@if($errors->any())

<ul class="list-group">
@foreach($errors->all() as $error)
    <li class="list-group-item text-danger">{{ $error }}</li>
@endforeach
</ul>
<br/>
@endif