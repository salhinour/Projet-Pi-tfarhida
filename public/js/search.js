// public/js/search.js
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const resultsContainer = document.getElementById('resultsContainer');

    searchInput.addEventListener('input', function() {
        const searchValue = searchInput.value.trim();
        if (searchValue.length > 0) {
            fetchResults(searchValue);
        } else {
            resultsContainer.innerHTML = ''; // Effacer les résultats si la recherche est vide
        }
    });

    function fetchResults(searchValue) {
        fetch('/search', {
            method: 'POST',
            body: JSON.stringify({ query: searchValue }),
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Manipuler les données retournées et afficher les résultats dans resultsContainer
            // Exemple: resultsContainer.innerHTML = 'Résultats de la recherche';
        })
        .catch(error => console.error('Erreur lors de la recherche :', error));
    }
});
