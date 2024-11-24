document.querySelectorAll('.menu li a').forEach(link => {
    link.addEventListener('click', e => {
        const mainContent = document.querySelector('.main-content');
        mainContent.classList.add('loading');
        setTimeout(() => {
            mainContent.classList.remove('loading');
        }, 800);
    });
});
