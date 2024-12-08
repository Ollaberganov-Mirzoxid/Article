<x-layouts.app>
    <x-slot:title>Create New Article</x-slot:title>



    <form  style="margin: 20px" action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="input-field">
                <input name="title" type="text" placeholder="Sarlavha" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-field">
                <input name="description" type="text" placeholder="Qisqacha mazmuni" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-field">
                <input name="photo" type="file" required>
                <input name="file" type="file" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-3">Saqlash</button>

    </form>

</x-layouts.app>
