@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">CINEMAXD</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">CINEMAXD</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="d-flex">
                <div class="card mb-3 " style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('posters/1.jpg') }}" class="img-fluid rounded-start" alt="a quiet place">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3>A Quiet Place</h3>
                                <p class="card-text mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolores
                                    veritatis perferendis quidem illo eum alias aliquam ipsam facilis, mollitia esse
                                    perspiciatis impedit atque repellat. Possimus ratione veritatis at unde illum..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('posters/3.jpg') }}" class="img-fluid rounded-start" alt="a quiet place">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3>American Psycho</h3>
                                <p class="card-text mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolores
                                    veritatis perferendis quidem illo eum alias aliquam ipsam facilis, mollitia esse
                                    perspiciatis impedit atque repellat. Possimus ratione veritatis at unde illum..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex">
                <div class="card mb-3 " style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('posters/4.jpg') }}" class="img-fluid rounded-start" alt="a quiet place">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3>Arrival</h3>
                                <p class="card-text mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolores
                                    veritatis perferendis quidem illo eum alias aliquam ipsam facilis, mollitia esse
                                    perspiciatis impedit atque repellat. Possimus ratione veritatis at unde illum..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('posters/5.jpg') }}" class="img-fluid rounded-start" alt="a quiet place">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3>Get Out</h3>
                                <p class="card-text mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolores
                                    veritatis perferendis quidem illo eum alias aliquam ipsam facilis, mollitia esse
                                    perspiciatis impedit atque repellat. Possimus ratione veritatis at unde illum..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
