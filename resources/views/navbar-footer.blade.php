<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Screenshot</title>

    <!-- {{-- font style --}} -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&display=swap');
    </style>

    <!-- {{-- CSS --}} -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/navbar-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/header.css') }}">
    @stack('section-scripts')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="content">
    <!-- ===== Navbar Section ===== -->
        <nav>
            <div class="logo">
                <a href="/">ScreenShot</a>
            </div>
            <ul class="navmenu">
                <div class="list">
                    <li class="navitem"><a href="/keanggotaan">Keanggotaan</a></li>
                    <li class="navitem"><a href="/portofolio">Portofolio</a></li>
                    <li class="navitem"><a href="/info-acara">Info Acara</a></li>
                </div>
                <a class="btn btn-light" type="submit">Bergabung</a>
            </ul>

            <!-- {{-- menu toggle --}} -->
            <div class="menu-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>

    <!-- ===== Layout Section ===== -->
        <main>
            @yield('layout')
        </main>


<!-- ===== Footer Section ===== -->
        <div class="textbawah">
            <div class="judul-thanks">
                <p class="thanks" data-aos="fade-down">Thanks For Scrolling</p>
                <p class="organisasi" data-aos="fade-up">SCREENSHOT</p>
            </div>
            <div class="textMiring my-5" data-aos="zoom-in">
                <div class="miring-kiri running">
                    <div class="marquee" scrollamount="10" class="miring-kiri">
                        <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya&nbsp;&nbsp;&nbsp; </span>
                        <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya&nbsp;&nbsp;&nbsp; </span>
                        <span>Screenshot Ilkom - PH | Sinematografi | Jurnalistik | Fotografi | DnA - Semangat Berkarya&nbsp;&nbsp;&nbsp; </span>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="copyright">
                <p>&copy; Screenshot 2023 All Rights Reserved</p>
            </div>
            <ul>
                <li><a href="mailto:ilkom.screenshot@gmail.com"><i class="bi bi-envelope-fill"></i><span>Mail</span></a></li>
                <li><a target="_blank" href="https://www.instagram.com/screenshotilkom/"><i class="bi bi-instagram"></i><span>Instagram</span></a></li>
                <li><a target="_blank" href="https://youtube.com/@screenshotilkom3422"><i class="bi bi-youtube"></i><span>Youtube</span></a></li>
            </ul>
        </footer>
    </div>

    <script src="{{ asset('js/landing.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="{{asset('js/arrow.js')}}"></script>
    <script src="{{asset('js/keanggotaan.js')}}"></script>
</body>
</html>
