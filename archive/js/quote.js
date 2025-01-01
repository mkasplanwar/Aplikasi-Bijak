document.addEventListener('DOMContentLoaded', () => {
    const quoteWrapper = document.querySelector('.bijak__quote-wrapper');
    
    // Initial animation
    quoteWrapper.style.opacity = '0';
    quoteWrapper.style.transform = 'translateY(30px)';
    
    setTimeout(() => {
        quoteWrapper.style.transition = 'all 0.8s cubic-bezier(0.16, 1, 0.3, 1)';
        quoteWrapper.style.opacity = '1';
        quoteWrapper.style.transform = 'translateY(0)';
    }, 300);

    // Subtle hover effect
    const quoteInner = document.querySelector('.bijak__quote-inner');
    quoteInner.addEventListener('mousemove', (e) => {
        const rect = quoteInner.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width - 0.5;
        const y = (e.clientY - rect.top) / rect.height - 0.5;
        
        quoteInner.style.transform = `
            perspective(1000px)
            rotateX(${y * 2}deg)
            rotateY(${x * 2}deg)
        `;
    });

    quoteInner.addEventListener('mouseleave', () => {
        quoteInner.style.transform = 'none';
    });
});