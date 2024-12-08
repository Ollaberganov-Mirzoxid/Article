<x-layouts.app>

    <x-slot:title>
        Asosiy
    </x-slot:title>

    <section>
        <!--asosiy menyuning chap tomoni-->
        <div class="left-section">
            <!--asosiy menyuning chap tomoni ichidagi yuqori qismi-->
            <div class="left-section-in">
                <div class="card">
                    <img src="{{ asset('storage/' . $latestConference->photo1) }}" alt="Image Description">
                    <div class="overlay">
                        <h3>
                            <a href="{{ route('conference_show', ['conference' => $latestConference->id]) }}">
                                {{ $latestConference->title }}
                            </a>
                            <p class="date"><i class="far fa-clock"></i> {{ $latestConference->created_at->format('d-M Y') }}</p>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <!--asosiy menyuning o'ng tomoni-->
        <div class="right-section">
            <!--asosiy menyuning o'ng tomoni ichidagi yuqori qismi-->
            @foreach ($nextConference as $Conference)
            <div class="right-section-in">
                <div class="card">
                    <img src="{{ asset('storage/' . $Conference->photo1) }}" alt="Image Description">
                    <div class="overlay">
                        <h3>
                            <a href="{{ route('conference_show', ['conference' => $Conference->id]) }}">
                                {{ $Conference->title }}
                            </a>
                            <p class="date"><i class="far fa-clock"></i> {{ $latestConference->created_at->format('d-M Y') }}</p>
                        </h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <article>
        <!--asosiy menyuning chap tomon yuqori qismi-->
        <div class="top-left-article">
            <h1><i class="fas fa-bars"></i> IT</h1>
            <div class="top-left-article-inside">
                @foreach ($articles as $article)
                <div class="card">
                    <img src="{{ asset('storage/'.$article->photo) }}" alt="Image Description">
                    <div class="overlay">
                        <h3>
                            <a href="{{ route('article_show', ['article' => $article->id]) }}">{{ $article->title }}</a>
                            <p class="date"><i class="far fa-clock"></i> 05-Feb-2020</p>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!--asosiy menyuning o'ng tomon yuqori qismi-->
        <div class="top-right-article">
            <h1><i class="fas fa-bars"></i> Sport</h1>
            <div class="top-right-article-inside">
                @foreach ($articles as $article)
                <div class="card">
                    <img src="{{ asset('storage/'.$article->photo) }}" alt="Image Description">
                    <div class="overlay">
                        <h3>
                            <a href="{{ route('article_show', ['article' => $article->id]) }}">{{ $article->title }}</a>
                            <p class="date"><i class="far fa-clock"></i> 05-Feb-2020</p>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!--asosiy menyuning chap tomon past qismi-->
        <div class="bottom-left-article">
            <h1><i class="fas fa-bars"></i> Biznes</h1>
            <div class="bottom-left-article-inside">
                @foreach ($articles as $article)
                <div class="card">
                    <img src="{{ asset('storage/'.$article->photo) }}" alt="Image Description">
                    <div class="overlay">
                        <h3>
                            <a href="{{ route('article_show', ['article' => $article->id]) }}">{{ $article->title }}</a>
                            <p class="date"><i class="far fa-clock"></i> 05-Feb-2020</p>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!--asosiy menyuning o'ng tomon past qismi-->
        <div class="bottom-right-article">
            <h1><i class="fas fa-bars"></i> Texnologiya</h1>
            <div class="bottom-right-article-inside">
                @foreach ($articles as $article)
                <div class="card">
                    <img src="{{ asset('storage/'.$article->photo) }}" alt="Image Description">
                    <div class="overlay">
                        <h3>
                            <a href="{{ route('article_show', ['article' => $article->id]) }}">{{ $article->title }}</a>
                            <p class="date"><i class="far fa-clock"></i> 05-Feb-2020</p>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </article>

    </body>

    </html>

</x-layouts.app>
