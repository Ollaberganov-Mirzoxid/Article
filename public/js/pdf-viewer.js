document.addEventListener('DOMContentLoaded', function () {
    var url = "{{ asset('storage/files/shablon.pdf') }}";
    var downloadButton = document.getElementById('download-btn');
    var container = document.getElementById('pdf-container');

    // PDF'ni yuklash
    pdfjsLib.getDocument(url).promise.then(function(pdf) {
        var totalPages = pdf.numPages;

        // Har bir sahifani ko'rsatish
        for (var pageNum = 1; pageNum <= totalPages; pageNum++) {
            pdf.getPage(pageNum).then(function(page) {
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
});
