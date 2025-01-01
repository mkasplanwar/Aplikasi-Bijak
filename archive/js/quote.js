document.addEventListener('DOMContentLoaded', () => {
    const card = document.querySelector('.bijak__content-card');

    // Parallax effect on mouse move
    card.addEventListener('mousemove', (e) => {
        const { left, top, width, height } = card.getBoundingClientRect();
        const x = (e.clientX - left) / width - 0.5;
        const y = (e.clientY - top) / height - 0.5;

        card.style.transform = `
            perspective(1000px)
            rotateY(${x * 4}deg)
            rotateX(${-y * 4}deg)
            translateZ(10px)
        `;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'none';
    });
});