@section('header')

<div class="headerContainer">
    <div class="header">
        <p class="organisasi">SCREENSHOT</p>
        <div class="running-text">
            <div class="marquee">
                <span>Multimedia & Jurnalistik - Hima Ilmu Komputer - Fakultas Matematika dan Ilmu Pengetahuan Alam - Universitas Negeri Semarang&nbsp;&nbsp;&nbsp;</span>
                <span>Multimedia & Jurnalistik - Hima Ilmu Komputer - Fakultas Matematika dan Ilmu Pengetahuan Alam - Universitas Negeri Semarang&nbsp;&nbsp;&nbsp;</span>
            </div>
        </div>
        <div class="main-foto">
            <img src="{{asset('picture/image 6.png') }}" alt="image">
        </div>
        <div class="textMiring">
            <div class="miring-kanan">
                <div class="marquee" scrollamount="10" direction="right" class="miring-kanan"> 
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya&nbsp;&nbsp;&nbsp; </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya&nbsp;&nbsp;&nbsp; </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya&nbsp;&nbsp;&nbsp; </span>
                </div>
            </div>
            <div class="miring-kiri">
                <div class="marquee" scrollamount="10" class="miring-kiri"> 
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya&nbsp;&nbsp;&nbsp; </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya&nbsp;&nbsp;&nbsp; </span>
                    <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya&nbsp;&nbsp;&nbsp; </span>
                </div>
            </div>
        </div>
    </div>
    
    @yield('content')

</div>

@show