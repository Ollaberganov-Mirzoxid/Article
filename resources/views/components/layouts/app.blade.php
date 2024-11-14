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
                <div class="profile-header" onclick="toggleDropdown()">
                    <img src="{{ asset('images/user.png') }}" alt="Profil Rasmi" class="profile-pic">
                    <h3 class="profile-name">Ollaberganov Mirzoxid</h3><i class="fas fa-right-arrow"></i>
                </div>
                <div class="dropdown-content" id="dropdownMenu">
                    <a href="#"><i class="fas fa-message"></i> Xabarlar</a>
                    <a href="#"><i class="fas fa-user-pen"></i> Tahrirlash</a>
                    <a href="{{ route('create_articles') }}"><i class="fas fa-plus"></i> Maqola Qo'shish</a>
                    <a href="#"><i class="fas fa-newspaper"></i> Mening Maqolalarim</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button><i class="fas fa-right-from-bracket"></i> Chiqish</button>
                    </form>
                </div>
            </div>

            <script>
                function toggleDropdown() {
                    var menu = document.getElementById("dropdownMenu");
                    if (menu.style.display === "none" || menu.style.display === "") {
                        menu.style.display = "block";
                    } else {
                        menu.style.display = "none";
                    }
                }

                // Tashqarida bosilganda menyuni yopish
                window.addEventListener("click", function(event) {
                    var menu = document.getElementById("dropdownMenu");
                    var profileHeader = document.querySelector(".profile-header");
                    if (menu.style.display === "block" && !profileHeader.contains(event.target)) {
                        menu.style.display = "none";
                    }
                });
            </script>
        @else
            <div class="login">
                <div class="main">
                    <a href="{{ route('login') }}"><img src="{{ asset('images/user.png') }}" alt=""></a>
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
                    <h4>Sahifalar</h4>
                    <ul>
                        <li><a href="#">Asosiy</a></li>
                        <li><a href="#">Maqolalar</a></li>
                        <li><a href="#">Biz haqimizda</a></li>
                        <li><a href="#">Ilmiy-Amali Anjumanlar</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>yordam oling</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Maxfiylik siyosati</a></li>
                        <li><a href="#">bizning xizmatlarimiz</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Kategoriyalar</h4>
                    <ul>
                        <li><a href="#">IT uchun</a></li>
                        <li><a href="#">Sport uchun</a></li>
                        <li><a href="#">Biznes uchun</a></li>
                        <li><a href="#">Texnologiya uchun</a></li>
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
