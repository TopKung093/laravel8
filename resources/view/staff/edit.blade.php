@extends('bootstrap-theme')

@section('content')

<h1>Edit Staff #{{ $staff->id }}</h1>

<form method="POST" action="{{ url('/staff/' . $staff->id) }}" enctype="multipart/form-data" style="width:50%">
    @method('PATCH')
    @csrf

    @include ('staff.form')

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Update">
    </div>

</form>
@endsection