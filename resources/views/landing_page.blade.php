<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Screenshot</title>

    {{-- font style --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&display=swap');
    </style>

    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/landing.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="content">
        <!-- Navbar Section -->
        <div>
            <nav>
                <div class="logo">
                    <a href="#"><h3>Screenshot</h3></a>
                </div>
                <ul class="navmenu">
                    <li class="navitem"><a href="#keanggotaan">Keanggotaan</a></li>
                    <li class="navitem"><a href="#portofolio">Portofolio</a></li>
                    <li class="navitem"><a href="#event">Event</a></li>
                </ul>
                <a class="btn btn-light" type="submit">Bergabung</a>

                {{-- menut toggle --}}

                <div class="menu-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>

            <br><br>

            <!-- content utama -->
            <main>
                <div class="container-hero">
                    Content....
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium labore repellendus! Alias, id asperiores, doloremque saepe neque repellendus nulla eligendi voluptatem dolorem, consequatur nam laudantium deserunt maiores voluptas sapiente.</p>
                </div>
                <!-- Info section-->
                <!-- tujuan section-->
                <!-- divisi section -->
                <!-- thankyou section -->
            </main>
        </div>


        <br><br>
        <!-- Footer Section -->
        <footer>
            <div class="copyright">
                <h6>© Screenshot 2023 All Rights Reserved</h6>
            </div>
            <ul>
                <li><a href=""><i class="bi bi-envelope-fill"></i>&nbsp Mail</a></li>
                <li><a href=""><i class="bi bi-instagram"></i>&nbsp Instagram</a></li>
                <li><a href=""><i class="bi bi-youtube"></i>&nbsp Youtube</a></li>
            </ul>
        </footer>
    </div>

    <script>
        const menu = document.querySelector('.menu-toggle');
        const navmenu = document.querySelector('.navmenu');

        menu.addEventListener('click', () => {
            menu.classList.toggle('active');
            navmenu.classList.toggle('active');
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
