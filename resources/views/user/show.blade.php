@extends('basic')
@section('title')
    Show
@endsection
@section('content')
    <table class="table">
        @include('user.contain.header_table')
        <tbody>
            @include('user.contain.row_table')
        </tbody>
    </table>
@endsection
