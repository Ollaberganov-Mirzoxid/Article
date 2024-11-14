<x-layouts.app>
    <x-slot:title>Create New Article</x-slot:title>



    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="form-group py-2">
            <div class="input-field">
                <input name="title" type="text" placeholder="Sarlavha" required>
            </div>
        </div>
        <div class="form-group py-2">
            <div class="input-field">
                <input name="description" type="text" placeholder="Qisqacha mazmuni" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-3">Saqlash</button>

    </form>

</x-layouts.app>
