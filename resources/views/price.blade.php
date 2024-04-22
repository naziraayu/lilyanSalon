{{-- konten pricelist --}}
@extends('landing')

@section('main')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


<div class="container">
    <div class="mt-5">
        <div class="d-style btn btn-brc-tp border-2 bgc-white btn-outline-blue btn-h-outline-blue btn-a-outline-blue w-100 my-2 py-3 shadow-sm">
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricelist</h2>
                <p>Daftar Harga Treatment</p>
            </div>
            <!-- Basic Plan -->
            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                    <h4 class="pt-3 text-170 text-600 text-primary-d1 letter-spacing">
                    Hair Treatment
                    </h4>
                </div>

                <ul class="list-unstyled mb-0 col-12 col-md-4 text-dark-l1 text-90 text-left my-4 my-md-0">
                    <li>Potong</li>
                    <li>Potong Cuci Tonic</li>
                    <li>Potong Cuci Blow</li>
                    <li>Cuci Catok</li>
                    <li>Cuci Blow</li>
                    <li>Cuci Curly</li>
                    <li>Smoothing</li>
                </ul>

                <div class="col-12 col-md-4 text-center">
                    <ul class="list-unstyled text-left my-4 my-md-0">
                        <li>Rp 15.000</li>
                        <li>Rp 25.000</li>
                        <li>Rp 25.000</li>
                        <li>Rp 20.000</li>
                        <li>Rp 20.000</li>
                        <li>Rp 20.000</li>
                        <li>Rp 150.000 - Rp 200.000</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="d-style bgc-white btn btn-brc-tp btn-outline-green btn-h-outline-green btn-a-outline-green w-100 my-2 py-3 shadow-sm border-2">
            <!-- Pro Plan -->
            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                    <h4 class="pt-3 text-170 text-600 text-green-d1 letter-spacing">
                    Beauty Treatment
                    </h4>   
                </div>

                <ul class="list-unstyled mb-0 col-12 col-md-4 text-dark-l1 text-90 text-left my-4 my-md-0">
                    <li>Facial Sari Ayu</li>
                    <li>Facial Viva</li>
                    <li>Message Wajah</li>
                    <li>Lashlift</li>
                </ul>

                <div class="col-12 col-md-4 text-center">
                    <ul class="list-unstyled text-left my-4 my-md-0">
                        <li>Rp 35.000</li>
                        <li>Rp 30.000</li>
                        <li>Rp 25.000</li>
                        <li>Rp 35.000 - Rp 40.000</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="d-style btn btn-brc-tp border-2 bgc-white btn-outline-purple btn-h-outline-purple btn-a-outline-purple w-100 my-2 py-3 shadow-sm">
            <!-- Premium Plan -->
            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                    <h4 class="pt-3 text-170 text-600 text-purple-d1 letter-spacing">
                    Hair Spa/Mask
                    </h4>
                </div>

                <ul class="list-unstyled mb-0 col-12 col-md-4 text-dark-l1 text-90 text-left my-4 my-md-0">
                    <li>Pende</li>
                    <li>Medium</li>
                    <li>Panjang</li>
                    <li>Creambath</li>
                </ul>

                <div class="col-12 col-md-4 text-center">
                    <ul class="list-unstyled text-left my-4 my-md-0">
                        <li>Rp 35.000</li>
                        <li>Rp 40.000</li>
                        <li>Rp 45.000</li>
                        <li>Rp 45.000 - Rp 50.000</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<br>
@endsection