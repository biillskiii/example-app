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

    <div class="isi">
        <div class="top-boxes">
            <div class="box">
            <div class="subbox">
                <p class="porto">LBRN Exclusive</p>
                <p class="subporto">UI/UX Design, Desain & Animasi/p>
                <p></p>
                <img src={{asset('assets/components/panahin.svg')}} class="gambarPanah" alt="" />
            </div>
        </div>

        <div class="box">
            <div class="subbox">
                <p class="porto">LBRN Exclusive</p>
                <p class="subporto">UI/UX Design, Desain & Animasi/p>
                <p></p>
                <img src={{asset('assets/components/panahin.svg')}} class="gambarPanah" alt="" />
            </div>
        </div>
    </div>
    <div class="bottom-boxes">
        <div class="box">
            <div class="subbox">
                <p class="porto">LBRN Exclusive</p>
                <p class="subporto">UI/UX Design, Desain & Animasi/p>
                <p></p>
                <img src={{asset('assets/components/panahin.svg')}} class="gambarPanah" alt="" />
            </div>
        </div>
        <div class="box">
            <div class="subbox">
                <p class="porto">LBRN Exclusive</p>
                <p class="subporto">UI/UX Design, Desain & Animasi/p>
                <p></p>
                <img src={{asset('assets/components/panahin.svg')}} class="gambarPanah" alt="" />
            </div>
        </div>
    </div>
    </div>
</div>

@endsection        