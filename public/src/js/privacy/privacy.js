// Smooth scroll untuk quick links
document.querySelectorAll('.privacy-quick-link').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(link.getAttribute('href'));
        target.scrollIntoView({ behavior: 'smooth' });
        
        // Update active state
        document.querySelectorAll('.privacy-quick-link').forEach(l => l.classList.remove('active'));
        link.classList.add('active');
    });
});

// Active state based on scroll
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('.privacy-section');
    const links = document.querySelectorAll('.privacy-quick-link');
    
    sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        if (rect.top <= 100 && rect.bottom >= 100) {
            const id = section.getAttribute('id');
            links.forEach(link => {
                link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
            });
        }
    });
});