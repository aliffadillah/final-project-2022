@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            @if (Auth::user()->level == 'admin')
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>#</h3>
                                <p>Orders Count</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>#</h3>
                                <p>Income</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>#</h3>

                                <p>Income Today</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>0</h3>

                                <p>Customers Count</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="background-color: orange;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-12 mb-4">
                                        <div class="hero hero-bg-image hero-bg-parallax" style="font-family:'Dancing Script', cursive">
                                            <div class="hero-inner" style="color: white; text-align: center"><br>
                                                <h2>Selamat datang, di Dashboard {{ Auth::user()->name }} !</h2>
                                                <p class="lead"><b>Hak akses {{ Auth::user()->level }} telah diberikan kepada akun Anda !</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">LogActivity</h3>
                        </div>
                        <section class="content">
                            <div class="container-fluid">
                                <div class="card">
                                    <div class="card-header" style="background-color:  orange">
                                        <h3 class="card-title"><b>Activity Users</b></h3>
                                    </div>
                                    <div style="text-align: center" class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No </th>
                                                    <th class="text-nowrap">Nama Pegawai</th>
                                                    <th>Activity</th>
                                                    <th>Times</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($activity_log as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="font-w600 text-center" style="width: 100px">
                                                        <span class="badge badge-success">{{ $item->user->name }}</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="badge badge-success">{{ $item->description }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
        
            @elseif (Auth::user()->level == 'manager')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="background-color: orange;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-12 mb-4">
                                        <div class="hero hero-bg-image hero-bg-parallax" style="font-family:'Dancing Script', cursive">
                                            <div class="hero-inner" style="color: white; text-align: center"><br>
                                                <h2>Selamat datang, di Dashboard {{ Auth::user()->name }} !</h2>
                                                <p class="lead"><b>Hak akses {{ Auth::user()->level }} telah diberikan kepada akun Anda !</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">LogActivity</h3>
                        </div>
                        <section class="content">
                            <div class="container-fluid">
                                <div class="card">
                                    <div class="card-header" style="background-color:  orange">
                                        <h3 class="card-title"><b>Activity Users</b></h3>
                                    </div>
                                    <div style="text-align: center" class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No </th>
                                                    <th class="text-nowrap">Nama Pegawai</th>
                                                    <th>Activity</th>
                                                    <th>Times</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($activity_log as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="font-w600 text-center" style="width: 100px">
                                                        <span class="badge badge-success">{{ $item->user->name }}</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="badge badge-success">{{ $item->description }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
        
            @else
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="background-color: orange;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-12 mb-4">
                                        <div class="hero hero-bg-image hero-bg-parallax" style="font-family:'Dancing Script', cursive">
                                            <div class="hero-inner" style="color: white; text-align: center"><br>
                                                <h2>Selamat datang, di Dashboard {{ Auth::user()->name }} !</h2>
                                                <p class="lead"><b>Hak akses {{ Auth::user()->level }} telah diberikan kepada akun Anda !</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection