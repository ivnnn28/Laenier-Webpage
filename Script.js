document.addEventListener('DOMContentLoaded', () => {
   document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    const galleryImages = document.querySelectorAll('.gallery-item img');
    galleryImages.forEach(img => {
        img.addEventListener('click', () => {
            const lightbox = document.createElement('div');
            lightbox.id = 'lightbox';
            document.body.appendChild(lightbox);

            const lightboxImg = document.createElement('img');
            lightboxImg.src = img.src;
            lightbox.appendChild(lightboxImg);

            lightbox.addEventListener('click', () => {
                document.body.removeChild(lightbox);
            });
        });
    });
});