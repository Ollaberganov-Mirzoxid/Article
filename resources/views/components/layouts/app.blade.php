<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <header>
        <div class="brand">
            <h1>Ilmiy-Amaliy Yangiliklar</h1>
        </div>

        <x-navbar></x-navbar>

        @auth
            <div class="auth">
                <div class="main">
                    <a href="">Maqola qo'shish</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button>Chiqish</button>
                    </form>
                </div>
            </div>
        @else
            <div class="login">
                <div class="main">
                    <a href="{{ route('login') }}">Kirish</a>
                </div>
            </div>
        @endauth
    </header>

    {{ $slot }}
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>kompaniya</h4>
                    <ul>
                        <li><a href="#">Biz haqimizda</a></li>
                        <li><a href="#">sheriklik dasturi</a></li>
                        <li><a href="#">Maxfiylik siyosati</a></li>
                        <li><a href="#">bizning xizmatlarimiz</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>yordam oling</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">buyurtma holati</a></li>
                        <li><a href="#">to'lov imkoniyatlari</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>onlayn do'kon</h4>
                    <ul>
                        <li><a href="#">Soat</a></li>
                        <li><a href="#">Kiyim</a></li>
                        <li><a href="#">Sumka</a></li>
                        <li><a href="#">Poyabzal</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Bizga Qo'shiling</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    