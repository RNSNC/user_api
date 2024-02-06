@extends('basic')
@section('title')
    Create
@endsection
@section('content')
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        @include('user.contain.form_fields')
    </form>
@endsection
