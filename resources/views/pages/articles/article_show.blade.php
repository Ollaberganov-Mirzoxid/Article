<x-layouts.app>
    <x-slot:title>{{ $article->title }}</x-slot:title>

    <section>
        <div class="left_show_articles">
            <a class="back_url" href="{{ url()->previous() }}"><i class="fa-solid fa-arrow-left"></i> </a>
            <div class="left_show_articles_title">
                <span>{{ $article->created_at->format('j-F Y') }}-yil</span>
                <h1>{{ $article->title }}</h1>
            </div>
            <div class="left_show_articles_file">
                <div id="pdf-container" style="overflow: auto; width: 100%; height: 900px;"></div>
                <button id="download-btn" style="display:none; margin-top: 20px; padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">Faylni yuklab olish</button>
                
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
                <script>
                    var url = '{{ asset('storage/'.$article->file) }}';
                    var downloadButton = document.getElementById('download-btn');
                
                    // PDF'ni yuklash
                    pdfjsLib.getDocument(url).promise.then(function(pdf) {
                        var totalPages = pdf.numPages;
                        var container = document.getElementById('pdf-container');
                
                        // Har bir sahifani ko'rsatish
                        for (var pageNum = 1; pageNum <= totalPages; pageNum++) {
                            pdf.getPage(pageNum).then(function(page) {
                                // Konteynerning o'lchamiga mos ravishda skalani hisoblash
                                var containerWidth = container.offsetWidth;
                                var scale = containerWidth / page.getViewport({ scale: 1 }).width;
                                var viewport = page.getViewport({ scale: scale });
                
                                // Canvas uchun konteyner yaratish
                                var canvas = document.createElement('canvas');
                                var context = canvas.getContext('2d');
                                canvas.height = viewport.height;
                                canvas.width = viewport.width;
                                
                                // Canvas'ni konteynerga qo'shish
                                container.appendChild(canvas);
                
                                // Sahifani render qilish
                                page.render({ canvasContext: context, viewport: viewport });
                            });
                        }
                
                        // PDF tugallanganidan so'ng yuklab olish tugmasini ko'rsatish
                        downloadButton.style.display = 'block';
                    });
                
                    // Yuklab olish tugmasiga bosilganda faylni yuklab olish
                    downloadButton.addEventListener('click', function() {
                        var link = document.createElement('a');
                        link.href = url;
                        link.download = url.substring(url.lastIndexOf('/') + 1); // Fayl nomini olish
                        link.click();
                    });
                </script>
                
                
            </div>
        </div>
        <div class="right_shov_articles">
            <div class="author_about">
                <div class="author_about_in">
                    <img src="{{ asset('images/img.jpg') }}" alt="">
                    <h1>Ollaberganov Mirzoxid Ollabergan o'g'li</h1>
                    <p>aaaaaaaaaa aaaaaaa aaaaaaa aaaaaaa
                        aaaaaaa aaaaaaaaa aaaaaaaa aaaaaaa
                        aaaaa aaaaaaa aaaaaaaa aaaaaaaaaaaaaa
                        aaaaaaaaaa aaaaaa aaaaaaa aaaaaaaaaaa
                    </p>
                </div>
            </div>
            <div class="categories">
                <h1>Kategoriyalar</h1>
                <div class="categories_in">
                    <div class="categories_url">
                        <a href=""><i class="fas fa-clock"></i>IT uchun</a>
                        <span>200</span>
                    </div>
                    <div class="categories_url">
                        <a href=""><i class="fas fa-clock"></i>Sport uchun</a>
                        <span>200</span>
                    </div>
                    <div class="categories_url">
                        <a href=""><i class="fas fa-clock"></i>Biznes uchun</a>
                        <span>200</span>
                    </div>
                    <div class="categories_url">
                        <a href=""><i class="fas fa-clock"></i>Texnologiya uchun</a>
                        <span>200</span>
                    </div>
                </div>  
            </div>
            <div class="recent_articles">
                <h1>Recent Articles</h1>
                @foreach ($recent_articles as $article)
                    <div class="recent_articles_in">
                        <div class="recent_articles_url">
                            <img src="{{ asset('storage/'.$article->photo) }}" alt="">
                            <div class="recent_article_title">
                                <a href="{{ route('article_show', ['article' => $article->id]) }}">
                                    <h1>{{ $article->title }}</h1>
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
