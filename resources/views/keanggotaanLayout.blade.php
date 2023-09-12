@extends('navbar-footer')
@section('layout')
@section('title', 'keanggotaan')
@include('header')
@push('section-scripts')
    <link rel="stylesheet" type="text/css" href="{{asset('css/keanggotaan.css') }}">
@endpush

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- card member -->

<div class="card-member">

    <div class="list-divisi">
        <div class="select">
            <ul>
                <li class="my-button active" data-category="All"><a href="">All <i class="fas fa-caret-down"></i></a></li>
            </ul>
        </div>
        <ul class="menu">
            <li class="my-button hidden" data-category="All"><a href="">All <i class="fas fa-caret-down"></i></a></li>
            <li class="my-button" data-category="PH"><a href="">PH <i class="fas fa-caret-down"></i></a></li>
            <li class="my-button" data-category="Jurnalistik"><a href="">Jurnalistik <i class="fas fa-caret-down"></i></a></li>
            <li class="my-button" data-category="Sinema"><a href="">Sinema <i class="fas fa-caret-down"></i></a></li>
            <li class="my-button" data-category="Fotografi"><a href="">Fotografi <i class="fas fa-caret-down"></i></a></li>
            <li class="my-button" data-category="Dna"><a href="">DnA <i class="fas fa-caret-down"></i></a></li>
            <li class="my-button" data-category="Alumni"><a href="">Alumni <i class="fas fa-caret-down"></i></a></li>
        </ul> 
    </div>
    <div class="foto">
        {{-- PH --}}
        <div class="img-container" data-category="PH">
            <img src="{{asset('picture/keanggotaan/PH_Azis.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Nur Azis Kurnia Rianto</h4>
                <p>Ketua</p>
            </div>
        </div>
        <div class="img-container" data-category="PH">
            <img src="{{asset('picture/keanggotaan/PH_Kevyn.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Kevyn Alifian H W</h4>
                <p>Wakil Ketua</p>
            </div>
        </div>
        <div class="img-container" data-category="PH">
            <img src="{{asset('picture/keanggotaan/PH_Nadhifah.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Nadhifah Nur A R</h4>
                <p>Sekretaris I</p>
            </div>
        </div>
        <div class="img-container" data-category="PH">
            <img src="{{asset('picture/keanggotaan/PH_Anita.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Anita Cahyani</h4>
                <p>Sekretaris II</p>
            </div>
        </div>
        <div class="img-container" data-category="PH">
            <img src="{{asset('picture/keanggotaan/PH_Maylinna.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Maylinna Rahayu N</h4>
                <p>Bendahara I</p>
            </div>
        </div>
        <div class="img-container" data-category="PH">
            <img src="{{asset('picture/keanggotaan/PH_Uut.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Uut Milanda</h4>
                <p>Bendahara II</p>
            </div>
        </div>

        {{-- JURNALISTIK --}}
        <div class="img-container" data-category="Jurnalistik">
            <img src="{{asset('picture/keanggotaan/JURNALIS_Nabila.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Nabila Purti D</h4>
                <p>Ketua Divisi</p>
            </div>
        </div>
        <div class="img-container" data-category="Jurnalistik">
            <img src="{{asset('picture/keanggotaan/JURNALIS_Wiyanda.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Wiyanda Puspita</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Jurnalistik">
            <img src="{{asset('picture/keanggotaan/JURNALIS_Susi.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Putri Susi S</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Jurnalistik">
            <img src="{{asset('picture/keanggotaan/JURNALIS_Della.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Della Egyta P</h4>
                <p>Staff Anggota</p>
            </div>
        </div>

        {{-- SINEMA --}}
        <div class="img-container" data-category="Sinema">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Aditya Kurniawan</h4>
                <p>Ketua Divisi</p>
            </div>
        </div>
        <div class="img-container" data-category="Sinema">
            <img src="{{asset('picture/keanggotaan/SINEMA_Syadu.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Syadu Budi Kusuma</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Sinema">
            <img src="{{asset('picture/keanggotaan/SINEMA_Ito.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Anggito Wahyu Adi</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Sinema">
            <img src="{{asset('picture/keanggotaan/SINEMA_Maul.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Maulida Darennita</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Sinema">
            <img src="{{asset('picture/keanggotaan/SINEMA_Ubai.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Ahmad Ubai Dullah</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Sinema">
            <img src="{{asset('picture/keanggotaan/SINEMA_Anindya.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Anindya Salsabila P</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Sinema">
            <img src="{{asset('picture/keanggotaan/SINEMA_Febri.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Muchammad Febry S</h4>
                <p>Staff Anggota</p>
            </div>
        </div>  

        {{-- FOTOGRAFI --}}
        <div class="img-container" data-category="Fotografi">
            <img src="{{asset('picture/keanggotaan/FOTO_Nabiel.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Mohammad Nabiel Dwi A</h4>
                <p>Ketua Divisi</p>
            </div>
        </div>
        <div class="img-container" data-category="Fotografi">~
            <img src="{{asset('picture/keanggotaan/FOTO_Dzaki.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Muhammad Dzaki A</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Fotografi">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Ahmad Riza Hamka</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Fotografi">
            <img src="{{asset('picture/keanggotaan/FOTO_Sheva.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Reyhan Dzaki Sheva P</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Fotografi">
            <img src="{{asset('picture/keanggotaan/FOTO_Radit.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Raditya Diyandra R A</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Fotografi">
            <img src="{{asset('picture/keanggotaan/FOTO_Sefi.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Dina Wachidah S</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Fotografi">
            <img src="{{asset('picture/keanggotaan/FOTO_Faris.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Ali Ainun Najib Al Farisi</h4>
                <p>Staff Anggota</p>
            </div>
        </div>

        {{-- DNA --}}
        <div class="img-container" data-category="Dna">
            <img src="{{asset('picture/keanggotaan/DNA_Ilham.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Ilham Maulana</h4>
                <p>Ketua Divisi</p>
            </div>
        </div>
        <div class="img-container" data-category="Dna">
            <img src="{{asset('picture/keanggotaan/DNA_AFM.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Aditya Fajar Mulyana</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Dna">
            <img src="{{asset('picture/keanggotaan/femaleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Salma Aprilia Huda P</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Dna">
            <img src="{{asset('picture/keanggotaan/DNA_AYD.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Aditya Yoga Darmawan</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Dna">
            <img src="{{asset('picture/keanggotaan/DNA_Azka.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>M Azka Nabhan Sauqi</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Dna">
            <img src="{{asset('picture/keanggotaan/DNA_Agus.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Agus Sutiyanto</h4>
                <p>Staff Anggota</p>
            </div>
        </div>
        <div class="img-container" data-category="Dna">
            <img src="{{asset('picture/keanggotaan/DNA_Nafis.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Muhammad Nafis Hafi</h4>
                <p>Staff Anggota</p>
            </div>
        </div>

        {{-- ALUMNI --}}
        <div class="img-container" data-category="Alumni">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>Adam Satrio Khanza</h4>
                <p>Ketua 2022</p>
            </div>
        </div>
        <div class="img-container" data-category="Alumni">
            <img src="{{asset('picture/keanggotaan/maleProfile.png') }}" alt="anggota">
            <div class="img-caption">
                <h4>M Khoirul Anam</h4>
                <p>Wakil Ketua 2022</p>
            </div>
        </div>
    </div>
</div>
@endsection