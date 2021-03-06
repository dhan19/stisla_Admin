@extends('layouts.app')
@section('title')
    User Details 
@endsection
@section('css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>All Users</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('userDetails.create')}}" class="btn btn-primary form-btn">Add User <i class="fas fa-plus"></i></a>
            </div>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('user_details.table')
                    @include('user_details.templates.templates')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        let recordsURL = "{{ route('userDetails.index') }}/";
    </script>
    <script src="{{ 'http://localhost/stisla_Admin/public/assets/js/jquery.dataTables.min.js' }}"></script>
    <script src="{{ 'http://localhost/stisla_Admin/public/assets/js/custom/custom-datatable.js' }}"></script>
    <script src="{{ 'http://localhost/stisla_Admin/public/assets/js/user_details/user_details.js' }}"></script>
@endsection
