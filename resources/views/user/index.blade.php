@extends('basic')
@section('title')
    Index
@endsection
@section('content')
    <table class="table">
        @include('user.contain.header_table')
        <tbody>
        @foreach($users as $user)
            @include('user.contain.row_table')
        @endforeach
        </tbody>
    </table>
    <div>
        <a href="{{ route('user.create') }}" class="btn btn-success">Add new</a>
    </div>

    <script>
        $('#nav-standard').addClass('active');
    </script>
@endsection
