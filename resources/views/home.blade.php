@extends('basic')
@section('title')
    Home
@endsection
@section('content')
    @php($ajax = '1')
    <table class="table">
        @include('user.contain.header_table')
        <tbody>
        @foreach($users as $user)
            @include('user.contain.row_table')
        @endforeach
        </tbody>
    </table>
    <div>
        <div href="{{ route('user.create') }}" class="btn btn-success" id="add_new">Add new</div>
    </div>
    @unset($user)
    @include('user.contain.modal')
    <script>$('#nav-ajax').addClass('active');</script>

    <script src="{{ asset('/user/click_add.js') }}"></script>
    <script src="{{ asset('/user/click_edit.js') }}"></script>
    <script src="{{ asset('/user/click_delete.js') }}"></script>
@endsection
