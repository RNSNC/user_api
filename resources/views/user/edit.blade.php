@extends('basic')
@section('title')
    Edit
@endsection
@section('content')
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('patch')
        @include('user.contain.form_fields')
    </form>
@endsection
