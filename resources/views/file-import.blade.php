@extends('basic')
@section('title')
    Import \ Export
@endsection
@section('content')
    <script>$('#nav-import-export').addClass('active');</script>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            Import and Export CSV & Excel to Database
        </h2>
        <form action="{{ route('file_import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                </div>
            </div>
            <button class="btn btn-primary">Import data</button>
            <a class="btn btn-success" href="{{ route('file_export') }}">Export data</a>
        </form>
    </div>
@endsection
