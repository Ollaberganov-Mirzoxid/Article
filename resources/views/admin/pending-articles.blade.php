<!-- resources/views/admin/pending-articles.blade.php -->

<h1>Tasdiqlanishi kerak bo'lgan maqolalar</h1>

@foreach ($articles as $article)
    <div>
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->content }}</p>
        <form action="{{ route('admin.approveArticle', $article->id) }}" method="POST">
            @csrf
            <button type="submit">Tasdiqlash</button>
        </form>
    </div>
@endforeach
