@extends('template')

@section('content')
<style>
        .bg-custom-944E63 {
            background-color: #944E63;
        }

        .bg-custom-B47B84 {
            background-color: #B47B84;
        }

        .bg-custom-CAA6A6 {
            background-color: #CAA6A6;
        }
    </style>

    <h5 class="card-title">Dashboard</h5>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house-door"></i></a></li>
            {{-- <li class="breadcrumb-item"><a href="#">Library</a></li> --}}
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-3">
            <div class="card card-body bg-custom-944E63 text-white mb-3">
                <label>Total Treatments</label>
                <h1>{{$totalTreatments}}</h1>
                <a href="{{ url('/data_menu') }}" class="text-white">view</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-custom-B47B84 text-white mb-3">
                <label>Total Users</label>
                <h1>{{$totalUsers}}</h1>
                <a href="{{ url('/customer') }}" class="text-white">view</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-custom-B47B84 text-white mb-3">
                <label>Today Booking</label>
                <h1>{{$totalTreatments}}</h1>
                <a href="{{ url('/data_menu') }}" class="text-white">view</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-custom-944E63 text-white mb-3">
                <label>Total Booking</label>
                <h1>{{$totalTreatments}}</h1>
                <a href="{{ url('/data_menu') }}" class="text-white">view</a>
            </div>
        </div>
   
@endsection
