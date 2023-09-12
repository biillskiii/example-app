@extends('navbar-footer')
@section('layout')
@section('title', 'keanggotaan')
@push('section-scripts')
    <link rel="stylesheet" type="text/css" href="{{asset('css/karya.css') }}">
@endpush

{{-- Portofolio Page --}}
<div class="karya">
    <div class="judul">
        <div class="Title">
            <h1 style="w-700">KARYA-Karya KAMI</h1>
            <div class="running-text">
                <div class="marquee">
                    <span>Mempersembahkan karya-karya hebat yang kami hasilkan&nbsp;&nbsp;&nbsp;</span>
                    <span>Mempersembahkan karya-karya hebat yang kami hasilkan&nbsp;&nbsp;&nbsp;</span>
                    <span>Mempersembahkan karya-karya hebat yang kami hasilkan&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
            <p></p>
        </div>
    </div>

    <div class="list-karya">

        <div class="content-karya" data-aos="zoom-in">
            <img class="preview-container"src={{asset('/picture/portofolio/photo-gallery.png')}} class="preview-karya" alt="" />
            <div class="info-karya">
                <div class="deskripsi">
                    <p class="judul-karya">Judul Karya</p>
                    <p class="bidang-karya">Jenis Bidang Karya</p>
                </div>
                <a href="https://instagram.com/screenshotilkom" target="_blank"  class="link"> <i class="bi bi-link-45deg"></i> </a>
            </div>
        </div>

        <div class="content-karya" data-aos="zoom-in">
            <img class="preview-container"src={{asset('/picture/portofolio/photo-gallery.png')}} class="preview-karya" alt="" />
            <div class="info-karya">
                <div class="deskripsi">
                    <p class="judul-karya">Judul Karya</p>
                    <p class="bidang-karya">Jenis Bidang Karya</p>
                </div>
                <a href="https://instagram.com/screenshotilkom" target="_blank"  class="link"> <i class="bi bi-link-45deg"></i> </a>
            </div>
        </div>
        
        <div class="content-karya" data-aos="zoom-in">
            <img class="preview-container"src={{asset('/picture/portofolio/photo-gallery.png')}} class="preview-karya" alt="" />
            <div class="info-karya">
                <div class="deskripsi">
                    <p class="judul-karya">Judul Karya</p>
                    <p class="bidang-karya">Jenis Bidang Karya</p>
                </div>
                <a href="https://instagram.com/screenshotilkom" target="_blank"  class="link"> <i class="bi bi-link-45deg"></i> </a>
            </div>
        </div>
        {{-- ADD MOREE --}}

        
    </div>
</div>

@endsection        