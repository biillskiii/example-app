@extends('navbar-footer')
@section('layout')
@section('title', 'keanggotaan')


{{-- Portofolio Page --}}
<div class="karya">
    <div class="judul">
        <div class="Title">
            <p>Mempersembahkan karya-karya hebat yang kami hasilkan</p>
            <h1 style="w-700">KARYA KAMI</h1>
        </div>
    </div>

    <div class="list-karya">
        <div class="content-karya">
            <img class="preview-container" src={{asset('/picture/exampleIllustration.webp')}} class="preview-karya" alt="" />
            <div class="info-karya">
                <div class="deskripsi">
                    <p class="judul-karya">Abstract Face</p>
                    <p class="bidang-karya">Digital Art Desain & Animasi</p>
                </div>
                <a href="#karya" class="link"> <i class="bi bi-arrow-right"></i> </a>
            </div>
        </div>

        <div class="content-karya">
            <img class="preview-container"src={{asset('/picture/exampleArt.webp')}} class="preview-karya" alt="" />
            <div class="info-karya">
                <div class="deskripsi">
                    <p class="judul-karya">World of Virtual Reality</p>
                    <p class="bidang-karya">Digital Art Desain & Animasi</p>
                </div>
                <a href="#karya" class="link"> <i class="bi bi-arrow-right"></i> </a>
            </div>
        </div>

        <div class="content-karya">
            <img class="preview-container"src={{asset('/picture/gubug.jpg')}} class="preview-karya" alt="" />
            <div class="info-karya">
                <div class="deskripsi">
                    <p class="judul-karya">Stand Alone</p>
                    <p class="bidang-karya">Landscape Photoghraphy</p>
                </div>
                <a href="#karya" class="link"> <i class="bi bi-arrow-right"></i> </a>
            </div>
        </div>
        {{-- AND MOREE --}}

        
    </div>
</div>

@endsection        