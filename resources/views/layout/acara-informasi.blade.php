@extends('navbar-footer')
@section('layout')
@section('title', 'keanggotaan')

@push('section-scripts')
    <link rel="stylesheet" type="text/css" href="{{asset('css/acara-informasi.css') }}">
@endpush

{{-- Acara dan Infomrasi Page --}}
<div class="info-acara">
    <div class="judul">
        <div class="Title">
            <h1 style="w-700">Acara & Informasi</h1>
            <div class="running-text">
                <div class="marquee">
                    <span>Bergabunglah dengan kami dalam merayakan dunia multimedia dan jurnalistik yang penuh kreativitas dan kemajuan! - Screenshot Ilkom UNNES&nbsp;&nbsp;&nbsp;</span>
                    <span>Bergabunglah dengan kami dalam merayakan dunia multimedia dan jurnalistik yang penuh kreativitas dan kemajuan! - Screenshot Ilkom UNNES&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
        </div>
    </div>

    <div class="list-event">

        <div class="content-event" data-aos="zoom-in">
            <img class="preview-container" src={{asset('/picture/infoEvent/SSA.jpg')}} class="preview-karya" alt="" />
            <div class="info-event">
                <p class="judul">ScreenShot Academy</p>
                <div class="detail-event">
                    <div class="running-text">
                        <div class="marquee">
                            <span class="deskripsi mb-5">𝐒𝐜𝐫𝐞𝐞𝐧 𝐒𝐡𝐨𝐭 𝐀𝐜𝐚𝐝𝐞𝐦𝐲 𝟐𝟎𝟐𝟑 dengan tema "𝑨𝒓𝒕𝑺𝒄𝒂𝒑𝒆: 𝑺𝒄𝒂𝒑𝒊𝒏𝒈 𝑨𝒓𝒕𝒊𝒔𝒕𝒊𝒄 𝑽𝒊𝒔𝒖𝒂𝒍𝒔 𝒊𝒏 𝑫𝒆𝒔𝒊𝒈𝒏, 𝑨𝒏𝒊𝒎𝒂𝒕𝒊𝒐𝒏, 𝑷𝒉𝒐𝒕𝒐𝒈𝒓𝒂𝒑𝒉𝒚, 𝑪𝒊𝒏𝒆𝒎𝒂𝒕𝒐𝒈𝒓𝒂𝒑𝒉𝒚, 𝒂𝒏𝒅 𝑱𝒐𝒖𝒓𝒏𝒂𝒍𝒊𝒔𝒎"&nbsp;&nbsp;&nbsp;</span>
                        </div>
                    </div>
                    <p class="waktu"><i class="bi bi-alarm"></i>9 Oktober 2023</p>
                    <p class="tempat"><i class="bi bi-geo-alt"></i>Zoom Meeting</p>
                </div>
                <a target="_blank" href="https://bit.ly/PendaftranSSA2023"  class="link"> Lihat </a>
            </div>
        </div>
        <div class="content-event" data-aos="zoom-in">
            <img class="preview-container" src={{asset('/picture/infoEvent/informative.png')}} class="preview-karya" alt="" />
            <div class="info-event">
                <p class="judul">ScreenShot Competition</p>
                <div class="detail-event">
                    <div class="running-text">
                        <div class="marquee">
                            <span class="deskripsi mb-5">Coming Soon&nbsp;&nbsp;&nbsp;</span>
                        </div>
                    </div>
                    <p class="waktu"><i class="bi bi-alarm"></i>Coming Soon</p>
                    <p class="tempat"><i class="bi bi-geo-alt"></i>Coming soon</p>
                </div>
                <a href="#event" class="link"> Lihat </a>
            </div>
        </div>
        {{-- ADD MOREE --}}

        
    </div>
</div>

@endsection        