@extends('bootstrap-theme')
@section('content')
<h1>#{{ $staff->id }}</h1>
<table class="table table-sm" style="width:50%">
    <tbody>
        <tr><th> ID   </th><td> {{ $staff->id }} </td></tr>
        <tr><th> Name   </th><td> {{ $staff->Name }} </td></tr>
        <tr><th> Age   </th><td> {{ $staff->Age }} </td></tr>
        <tr><th> Salary   </th><td> {{ $staff->Salary }} </td></tr>
        <tr><th> Phone   </th><td> {{ $staff->Phone }} </td></tr>
    </tbody>
</table>
@endsection