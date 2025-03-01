document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.title').forEach(title => {
        let content = title.nextElementSibling; // Target p setelah a
        let lineHeight = parseFloat(window.getComputedStyle(title).lineHeight); // Ambil line height
        let titleLines = Math.round(title.clientHeight / lineHeight); // Hitung jumlah baris

        // Set class berdasarkan jumlah baris title
        if (titleLines === 1) {
            content.classList.remove('line-clamp-2');
            content.classList.add('line-clamp-3');
        } else {
            content.classList.remove('line-clamp-3');
            content.classList.add('line-clamp-2');
        }
    });
});