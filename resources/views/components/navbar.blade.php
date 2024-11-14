<nav class="navbar">
    <a href="{{ route('index') }}" class="{{ Request::is('/') ? 'active' : '' }}">Asosiy</a>
    <a href="{{ route('conferences') }}" class="{{ Request::is('conferences') ? 'active' : '' }}">Ilmiy-Amaliy Anjumanlar</a>
    <a href="{{ route('articles') }}" class="{{ Request::is('articles') ? 'active' : '' }}">Maqolalar</a>
    <a href="{{ route('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">Biz haqimizda</a>
</nav>