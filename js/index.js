document.querySelector('a').addEventListener('click', function(e) {
    e.preventDefault();
    this.classList.toggle('opened');
});