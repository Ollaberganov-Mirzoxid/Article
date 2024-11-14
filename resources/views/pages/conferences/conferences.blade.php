<x-layouts.app>
    <x-slot:title>
        Ilmiy-Amaliy Anjumanlar
    </x-slot:title>


    <section class="conference-blog-section">
        <div class="conference-container">
            <div class="conference-section-header">
                <h2>Latest Articles From Our Blog Post</h2>
                <p>Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna
                    lorem stet.</p>
            </div>
            <div class="conference-blog-grid">
                @foreach ($conferences as $conference)
                    <div class="conference-blog-card">
                        <img src="{{ asset('storage/'.$conference->photo1) }}" alt="Blog Image">
                        <div class="conference-blog-date">
                            <span>{{$conference->created_at->format('j-M')}}</span> {{$conference->created_at->format('Y')}}
                        </div>
                        <div class="conference-blog-content">
                            <span>ADMIN | CLEANING</span>
                            <h3>{{ $conference->title }}</h3>
                            <p>{{ $conference->description1 }}</p>
                            <a href="{{ route('conference_show', ['conference' => $conference->id]) }}" class="read-more-btn">Read More</a>
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