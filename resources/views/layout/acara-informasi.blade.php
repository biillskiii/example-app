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
            <img class="preview-container" src={{asset('/picture/infoEvent/informative.png')}} class="preview-karya" alt="" />
            <div class="info-event">
                <p class="judul">Past Event</p>
                <div class="detail-event">
                    <div class="running-text">
                        <div class="marquee">
                            <span class="deskripsi mb-5">Belum ada deskripsi&nbsp;&nbsp;&nbsp;</span>
                        </div>
                    </div>
                    <p class="waktu"><i class="bi bi-alarm"></i>Waktu</p>
                    <p class="tempat"><i class="bi bi-geo-alt"></i>Tempat</p>
                </div>
                <a href="#event" class="link"> Lihat </a>
            </div>
        </div>
        <div class="content-event" data-aos="zoom-in">
            <img class="preview-container" src={{asset('/picture/infoEvent/informative.png')}} class="preview-karya" alt="" />
            <div class="info-event">
                <p class="judul">Past Event</p>
                <div class="detail-event">
                    <div class="running-text">
                        <div class="marquee">
                            <span class="deskripsi mb-5">Belum ada deskripsi&nbsp;&nbsp;&nbsp;</span>
                        </div>
                    </div>
                    <p class="waktu"><i class="bi bi-alarm"></i>Waktu</p>
                    <p class="tempat"><i class="bi bi-geo-alt"></i>Tempat</p>
                </div>
                <a href="#event" class="link"> Lihat </a>
            </div>
        </div>
        <div class="content-event" data-aos="zoom-in">
            <img class="preview-container" src={{asset('/picture/infoEvent/informative.png')}} class="preview-karya" alt="" />
            <div class="info-event">
                <p class="judul">Past Event</p>
                <div class="detail-event">
                    <div class="running-text">
                        <div class="marquee">
                            <span class="deskripsi mb-5">Belum ada deskripsi&nbsp;&nbsp;&nbsp;</span>
                        </div>
                    </div>
                    <p class="waktu"><i class="bi bi-alarm"></i>Waktu</p>
                    <p class="tempat"><i class="bi bi-geo-alt"></i>Tempat</p>
                </div>
                <a href="#event" class="link"> Lihat </a>
            </div>
        </div>
        {{-- ADD MOREE --}}

        
    </div>
</div>

@endsection        