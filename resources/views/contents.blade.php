@extends('layout')

@section('content')
<form method="POST" action="/contents" enctype="multipart/form-data">

   {{ csrf_field() }}

   <input type="file" name='content'></input>
   <button type="submit">Submit</button>

</form>
@endsection('content')


