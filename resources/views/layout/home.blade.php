@extends('navbar-footer')
@section('layout')
@section('title', 'home')

@include('header')

<div class="home">
    <!-- Info section-->
    <div class="containerTentang">
        <div class="gambarTentangKami">
            <img src={{asset('picture/Tentang.png')}} class="d-block" alt="">
        </div>
        <div class="posLogoQM">
        <div class="subLogoQM"></div>
        <div class="subLogoTentang">?</div>
        </div>
        <div class="judulTentang">TENTANG</div>
        <div class="deskripsiTentang">Screenshot adalah badan semi otonom dibawah naungan Hima Ilmu Komputer Fakultas Matematika & Ilmu Pengetahuan Alam Universitas Negeri Semarang, yang berfokus pada bidang Multimedia & Jurnalistik.</div>
    </div>
    <!-- tujuan section-->
    <div class="tujuan">
        <div class="judul">
            <p class="judultujuan">TUJUAN<svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128" fill="none">
                <rect x="63.789" y="0.783722" width="89.5042" height="89.5042" transform="rotate(45 63.789 0.783722)" fill="#502BD8"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M72.6508 50.0728H45.0896V42.8062H85.0556V82.7684H77.7891V55.211L47.6606 85.3394L42.5224 80.2012L72.6508 50.0728Z" fill="#222222"/>
            </svg></p>
        </div>
        <div class="kartu">
            <div class="cardlist">
                <img src="{{asset('picture/tujuan.png')}}" alt="">
                <h5>SHARING EXPERIENCE</h5>
                <p>Sebagai media berbagi pengalaman untuk civitas akademika baik mahasiswa,
                    dosen maupun cendekiawan pada umumnya dalam
                    menghadapi fenomena.
                </p>
            </div>
            <div class="cardlist">
                <img src="{{asset('picture/tujuan.png')}}" alt="">
                <h5>SHARING EXPERIENCE</h5>
                <p>Sebagai media berbagi pengalaman untuk civitas akademika baik mahasiswa,
                    dosen maupun cendekiawan pada umumnya dalam
                    menghadapi fenomena.
                </p>
            </div>
            <div class="cardlist">
                <img src="{{asset('picture/tujuan.png')}}" alt="">
                <h5>SHARING EXPERIENCE</h5>
                <p>Sebagai media berbagi pengalaman untuk civitas akademika baik mahasiswa,
                    dosen maupun cendekiawan pada umumnya dalam
                    menghadapi fenomena.
                </p>
            </div>
        </div>
    </div><!-- divisi section -->

</div>

@endsection
