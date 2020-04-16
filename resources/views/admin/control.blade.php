
@extends('admin.template')
@section('content')

@foreach ($mahasiswa as $n)
{{ $n}} <br>
@endforeach

@stop