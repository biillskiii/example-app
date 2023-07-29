@extends('navbar-footer')
@section('layout')
@section('title', 'keanggotaan')
@include('header')
@push('section-scripts')
    <link rel="stylesheet" type="text/css" href="{{asset('css/keanggotaan.css') }}">
@endpush

<!-- card member -->
<div class="card-member">
    <div class="list-divisi">
        <ul>
            <li class="my-button" data-category="all"><a href="">All</a></li>
            <li class="my-button" data-category="pengurus harian"><a href="">Pengurus Harian</a></li>
            <li class="my-button" data-category="jurnalistik"><a href="">Jurnalistik</a></li>
            <li class="my-button" data-category="sinema"><a href="">Sinematografi</a></li>
            <li class="my-button" data-category="fotografi"><a href="">Fotografi</a></li>
            <li class="my-button" data-category="dna"><a href="">Desain & Animasi</a></li>
            <li class="my-button" data-category="alumni"><a href="">Alumni</a></li>
        </ul> 
    </div>
    <div class="foto">
        {{-- PH --}}
        <div class="img-container" data-category="pengurus harian">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Nur Azis Kurnia Rianto</h4>
                <p>Ketua</p>
            </div>
        </div>
        <div class="img-container" data-category="pengurus harian">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Kevyn Alifian Hernanda W</h4>
                <p>Wakil Ketua</p>
            </div>
        </div>
        <div class="img-container" data-category="pengurus harian">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Nadhifah Nur Annisa R</h4>
                <p>Sekretaris I</p>
            </div>
        </div>
        <div class="img-container" data-category="pengurus harian">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Anita Cahyani</h4>
                <p>Sekretaris II</p>
            </div>
        </div>
        <div class="img-container" data-category="pengurus harian">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Maylinna Rahayu N</h4>
                <p>Bendahara I</p>
            </div>
        </div>
        <div class="img-container" data-category="pengurus harian">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Uut Milanda</h4>
                <p>Bendahara II</p>
            </div>
        </div>

        {{-- JURNALISTIK --}}
        <div class="img-container" data-category="jurnalistik">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Nabila Purti D</h4>
                <p>Ketua Divisi</p>
            </div>
        </div>
        <div class="img-container" data-category="jurnalistik">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Wiyanda Puspita</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="jurnalistik">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Putri Susi S</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="jurnalistik">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Kezia Gabriella</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="jurnalistik">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Della Egyta P</h4>
                <p>Staff Anggota</p>
            </div>
        </div>

        {{-- SINEMA --}}
        <div class="img-container" data-category="sinema">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Aditya Kurniawan</h4>
                <p>Ketua Divisi</p>
            </div>
        </div>
        <div class="img-container" data-category="sinema">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Syadu Budi Kusuma</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="sinema">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Anggito Wahyu Adi</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="sinema">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Maulida Darennita</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="sinema">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Ahmad Ubai Dullah</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="sinema">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Anindya Salsabila P</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="sinema">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Muchammad Febry S</h4>
                <p>Staff Anggota</p>
            </div>
        </div>

        {{-- FOTOGRAFI --}}
        <div class="img-container" data-category="fotografi">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Muhammad Nabiel Dwi A</h4>
                <p>Ketua Divisi</p>
            </div>
        </div>
        <div class="img-container" data-category="fotografi">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Muhammad Dzaki Arrozaq</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="fotografi">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Ahmad Riza Hamka</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="fotografi">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Reyhan Dzaki Sheva P</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="fotografi">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Raditya Diyandra R A</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="fotografi">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Dina Wachidah Septiana</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="fotografi">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Ali Ainun Najib Al Farisi</h4>
                <p>Staff Anggota</p>
            </div>
        </div>

        {{-- DNA --}}
        <div class="img-container" data-category="dna">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Ilham Maulana</h4>
                <p>Ketua Divisi</p>
            </div>
        </div>
        <div class="img-container" data-category="dna">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Aditya Fajar Mulyana</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="dna">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Salma Aprilia Huda P</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="dna">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Aditya Yoga Darmawan</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="dna">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>M Azka Nabhan Sauqi</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="dna">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Agus Sutiyanto</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="dna">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Muhammad Nafis Hafi</h4>
                <p>Staff Anggota</p>
            </div>
        </div>

        {{-- ALUMNI --}}
        <div class="img-container" data-category="alumni">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Adam Satrio Khanza</h4>
                <p>Ketua 2022</p>
            </div>
        </div>
        <div class="img-container" data-category="alumni">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>M Khoirul Anam</h4>
                <p>Wakil Ketua 2022</p>
            </div>
        </div>
    </div>
</div>
@endsection