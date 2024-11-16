function myFunction() {
    const toggleButton = document.getElementById('togglelight');
    const body = document.body;

    toggleButton.addEventListener('click', () => {
        body.classList.toggle('darkmode');
        body.classList.toggle('lightmode');
    });
}
