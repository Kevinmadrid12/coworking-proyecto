document.addEventListener("DOMContentLoaded", function() {
    const searchBar = document.querySelector('.form-control');
    const cardsToHide = document.querySelectorAll('.row.my-3 .col-md-4:nth-child(-n+3)');

    searchBar.addEventListener('input', function() {
        const searchTerm = this.value.trim().toLowerCase();

        cardsToHide.forEach(card => {
            const cardTitle = card.querySelector('.card-title').textContent.trim().toLowerCase();
            if (cardTitle.includes(searchTerm)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
