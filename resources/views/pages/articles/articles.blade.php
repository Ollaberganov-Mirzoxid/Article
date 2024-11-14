<x-layouts.app>

    <x-slot:title>
        Maqolalar
    </x-slot:title>


    <section class="blog-section">
        <div class="container">
            <div class="section-header">
                <h2>Latest Articles From Our Blog Post</h2>
                <p>Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna
                    lorem stet.</p>
            </div>
            <div class="blog-grid">
                @foreach ($articles as $article)
                    <div class="blog-card">
                        <img src="{{ asset('images/img.jpg') }}" alt="Blog Image">
                        <div class="blog-date">
                            <span>{{$article->created_at->format('j-M')}}</span> {{$article->created_at->format('Y')}}
                        </div>
                        <div class="blog-content">
                            <span>ADMIN | CLEANING</span>
                            <h3>{{ $article->title }}</h3>
                            <p>{{ $article->description }}</p>
                            <a href="{{ route('article_show', ['article' => $article->id]) }}" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="pagination">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">»</a>
            </div>
        </div>
    </section>
    </body>

    </html>

</x-layouts.app>
