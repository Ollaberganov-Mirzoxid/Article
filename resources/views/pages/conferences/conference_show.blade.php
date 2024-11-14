<x-layouts.app>
    <x-slot:title>{{ $conference->title }}</x-slot:title>

    <section>
        <div class="left_show_conferences">
            <div class="back_url_div">
                <a class="back_url" href="{{ url()->previous() }}"><i class="fa-solid fa-arrow-left"></i> </a>
            </div>
            <div class="left_show_conferences_title">
                <span>{{ $conference->created_at->format('j-F Y') }}-yil</span>
                <h1>{{ $conference->title }}</h1>
            </div>
            <div class="left_show_conferences_content_all">
                <div class="left_show_conferences_content_1">
                    <img src="{{ asset('storage/'.$conference->photo1) }}" alt="">
                    <p>{{ $conference->description1 }}</p>
                </div>
                <div class="left_show_conferences_content_2">
                    <img src="{{ asset('storage/'.$conference->photo2) }}" alt="">
                    <p>{{ $conference->description2 }}</p>
                </div>
                <div class="left_show_conferences_content_3">
                    <img src="{{ asset('storage/'.$conference->photo3) }}" alt="">
                    <p>{{ $conference->description3 }}</p>
                </div>
            </div>
        </div>
        <div class="right_shov_articles">


            <div class="recent_articles">
                <h1>Recent Articles</h1>
                @foreach ($recent_conferences as $conference)
                    <div class="recent_articles_in">
                        <div class="recent_articles_url">
                            <img src="{{ asset('storage/'.$conference->photo1) }}" alt="">
                            <div class="recent_article_title">
                                <a href="{{ route('conference_show', ['conference' => $conference->id]) }}">
                                    <h1>{{ $conference->title }}</h1>
                                </a>
                                <p>Username</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script src="{{ asset('js/pdf-viewer.js') }}"></script>
</x-layouts.app>
