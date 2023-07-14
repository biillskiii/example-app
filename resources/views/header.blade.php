@extends('navbar-footer')
@section('layout')
@section('title', 'Header')

<div class="headerContainer">
    <div class="header">
        <p class="organisasi">SCREENSHOT</p>
        <div class="running-text">
            <marquee scrollamount="10" > 
                <span>Multimedia & Jurnalistik - Hima Ilmu Komputer - Fakultas Matematika dan Ilmu Pengetahuan Alam - Universitas Negeri Semarang</span>
                <span>Multimedia & Jurnalistik - Hima Ilmu Komputer - Fakultas Matematika dan Ilmu Pengetahuan Alam - Universitas Negeri Semarang</span>
                <span>Multimedia & Jurnalistik - Hima Ilmu Komputer - Fakultas Matematika dan Ilmu Pengetahuan Alam - Universitas Negeri Semarang</span>
                <span>Multimedia & Jurnalistik - Hima Ilmu Komputer - Fakultas Matematika dan Ilmu Pengetahuan Alam - Universitas Negeri Semarang</span>
                <span>Multimedia & Jurnalistik - Hima Ilmu Komputer - Fakultas Matematika dan Ilmu Pengetahuan Alam - Universitas Negeri Semarang</span>
                <span>Multimedia & Jurnalistik - Hima Ilmu Komputer - Fakultas Matematika dan Ilmu Pengetahuan Alam - Universitas Negeri Semarang</span>
            </marquee>
        </div>
        <div class="main-foto">
            <img src="{{asset('picture/image 6.png') }}" alt="image">
        </div>
        <div class="textMiring">
            <div class="miring-kanan">
                <marquee scrollamount="10" direction="right" class="miring-kanan"> 
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya  </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya  </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya  </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya  </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya  </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya  </span>
                </marquee>
            </div>
            <div class="miring-kiri">
                <marquee scrollamount="10" class="miring-kiri"> 
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya  </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya  </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya  </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya  </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya  </span>
                </marquee>
            </div>
        </div>
    </div>
    
    @yield('content')

</div>


@endsection