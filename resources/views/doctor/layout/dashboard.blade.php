@extends('doctor.layout.main')

@section('title-tab', 'Dashboard')
@section('title-page', 'Dashboard')

@section('mainContent')
    <!-- Info boxes -->
    <div class="row">



        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>


        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Registered Member</span>
                    <span class="info-box-number">1</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection