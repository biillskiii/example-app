@extends('navbar-footer')
@section('layout')
@section('title', 'keanggotaan')

@include('header')

<!-- card member -->
        <div class="card-member">
            <ul>
                <li class="ph"><a href="">Pengurus Harian</a></li>
                <li><a href="">Jurnalistik</a>
                <li><a href="">Sinematografi</a></li>
                <li><a href="">Fotografi</a></li>
                <li><a href="">Desain & Animasi</a></li>
                <li><a href="">Alumni</a></li>
            </ul>
            <div class="foto">
                <div class="img-container">
                    <img src="{{asset('picture/image 14.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>Nur Azis Kurnia R</h4>
                        <p>Ketua</p>
                    </div>
                </div>
                <div class="img-container">
                    <img src="{{asset('picture/image 11.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>Kepin</h4>
                        <p>Wakil Ketua</p>
                    </div>
                </div>
                <div class="img-container">
                    <img src="{{asset('picture/image 12.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>Uut</h4>
                        <p>Bendahara</p>
                    </div>
                </div>
                <div class="img-container">
                    <img src="{{asset('picture/image 13.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>May</h4>
                        <p>Bendahara</p>
                    </div>
                </div>
                <div class="img-container">
                    <img src="{{asset('picture/image 14.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>Nadifa</h4>
                        <p>Sekre</p>
                    </div>
                </div>
                <div class="img-container">
                    <img src="{{asset('picture/image 15.png') }}" alt="anggota">
                    <div class="img-caption">
                        <h4>Anita</h4>
                        <p>Sekre</p>
                    </div>
                </div>
            </div>
        </div>

@endsection