<x-layouts.app>
    <x-slot:title>Yangi maqola qo'shish</x-slot:title>

    <div class="create-conference-form">
        <form action="{{ route('conferences.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="input-field">
                    <input name="title" type="text" placeholder="Sarlavha" required>
                </div>
            </div>
            <div class="form-group-out">
                <!-- 1-Rasm yuklash va ko'rsatish -->
                <div class="form-group">
                    <div class="image-field">
                        <input type="file" id="img-input-1" name="photo1" accept="image/*" required>
                        <label for="img-input-1" class="upload-btn">1-Rasm yuklang</label>
                        <img id="preview-image-1" class="preview-image" alt="Preview Image" style="display:none;">
                    </div>
                    <div class="input-field">
                        <textarea name="description1" id="" rows="10" placeholder="1-rasm uchun matn kiriting"></textarea>
                    </div>
                </div>

                <!-- 2-Rasm yuklash va ko'rsatish -->
                <div class="form-group">
                    <div class="image-field">
                        <input type="file" id="img-input-2" name="photo2" accept="image/*" required>
                        <label for="img-input-2" class="upload-btn">2-Rasm yuklang</label>
                        <img id="preview-image-2" class="preview-image" alt="Preview Image" style="display:none;">
                    </div>
                    <div class="input-field">
                        <textarea name="description2" id="" cols="64" rows="10" placeholder="2-rasm uchun matn kiriting"></textarea>
                    </div>
                </div>

                <!-- 3-Rasm yuklash va ko'rsatish -->
                <div class="form-group">
                    <div class="image-field">
                        <input type="file" id="img-input-3" name="photo3" accept="image/*" required>
                        <label for="img-input-3" class="upload-btn">3-Rasm yuklang</label>
                        <img id="preview-image-3" class="preview-image" alt="Preview Image" style="display:none;">
                    </div>
                    <div class="input-field">
                        <textarea name="description3" id="" cols="64" rows="10" placeholder="3-rasm uchun matn kiriting"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="submit-btn">Saqlash</button>
        </form>
    </div>

    <script>
        // Rasm yuklash va oldindan ko'rinishini namoyish qilish
        function previewImage(inputId, previewId) {
            const fileInput = document.getElementById(inputId);
            const previewImage = document.getElementById(previewId);

            fileInput.addEventListener('change', function() {
                const file = fileInput.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        previewImage.style.display = 'block';
                    }
                    reader.readAsDataURL(file);
                }
            });
        }

        // Initialize preview function for the image input
        previewImage('img-input-1', 'preview-image-1');
        previewImage('img-input-2', 'preview-image-2');
        previewImage('img-input-3', 'preview-image-3');
    </script>
</x-layouts.app>
