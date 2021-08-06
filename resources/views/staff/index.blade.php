@extends('bootstrap-theme')
@section('content')
<h1>Staff</h1>
<a href="{{ url('/staff/create') }}" class="btn btn-sm btn-success mr-4">Add Staff</a>
<form action="{{ url('/staff') }}" method="GET" class="my-4">
    <input name="search" id="search" value="{{ request('search') }}" />
    <button type="submit">Search</button>
</form>
<table class="table table-sm table-bordered text-end" style="width:70%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    @foreach($staff as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->Name }}</td>
        <td>{{ number_format( $item->Age ) }}</td>
        <td>{{ $item->Phone }}</td>
        <td>{{ $item->Salary }}</td>
        <td>
            <a href="{{ url('/staff/'.$item->id ) }}" class="btn btn-sm btn-primary">View</a>
            <a href="{{ url('/staff/'.$item->id.'/edit' ) }}" class="btn btn-sm btn-warning">Edit</a>
            <form method="POST" action="{{ url('/staff' . '/' . $item->id) }}" style="display:inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirm delete?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="mt-4">{{ $staff->links() }}</div>
@endsection