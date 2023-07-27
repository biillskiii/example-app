@extends('navbar-footer')
@section('layout')
@section('title', 'keanggotaan')
@include('header')
@push('section-scripts')
    <link rel="stylesheet" type="text/css" href="{{asset('css/keanggotaan.css') }}">
@endpush

<!-- card member -->
        <div class="card-member">
            <ul>
                <li class="my-button" data-category="all"><a href="">All</a></li>
                <li class="my-button" data-category="pengurus harian"><a href="">Pengurus Harian</a></li>
                <li class="my-button" data-category="jurnalistik"><a href="">Jurnalistik</a></li>
                <li class="my-button" data-category="sinema"><a href="">Sinematografi</a></li>
                <li class="my-button" data-category="fotografi"><a href="">Fotografi</a></li>
                <li class="my-button" data-category="dna"><a href="">Desain & Animasi</a></li>
                <li class="my-button" data-category="alumni"><a href="">Alumni</a></li>
            </ul>
            <div class="foto">
                {{-- PH --}}
                <div class="img-container" data-category="pengurus harian">
                    <img src="{{asset('picture/image 14.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>Nur Azis Kurnia R</h4>
                        <p>Ketua</p>
                    </div>
                </div>

                {{-- JURNALISTIK --}}
                <div class="img-container" data-category="jurnalistik">
                    <img src="{{asset('picture/image 11.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>Kepin</h4>
                        <p>Wakil Ketua</p>
                    </div>
                </div>

                {{-- SINEMA --}}
                <div class="img-container" data-category="sinema">
                    <img src="{{asset('picture/image 12.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>Uut</h4>
                        <p>Bendahara</p>
                    </div>
                </div>

                {{-- FOTOGRAFI --}}
                <div class="img-container" data-category="fotografi">
                    <img src="{{asset('picture/image 13.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>May</h4>
                        <p>Bendahara</p>
                    </div>
                </div>

                {{-- DNA --}}
                <div class="img-container" data-category="dna">
                    <img src="{{asset('picture/image 13.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>Nadifa</h4>
                        <p>Sekre</p>
                    </div>
                </div>

                {{-- ALUMNI --}}
                <div class="img-container" data-category="alumni">
                    <img src="{{asset('picture/image 15.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>Anita</h4>
                        <p>Sekre</p>
                    </div>
                </div>
            </div>
        </div>

@endsection