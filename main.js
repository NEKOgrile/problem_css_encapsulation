const arrow = document.getElementById('arrow');
const informationsTable = document.querySelector('.informations_table');
let isAscending = true;

arrow.addEventListener('click', function () {
    arrow.classList.toggle('rotated');
    isAscending = !isAscending;
    const rows = Array.from(informationsTable.getElementsByTagName('tr'));
    rows.shift(); // Retirer l'en-tête du tableau du tri
    rows.sort(function (a, b) {
        const aValue = parseInt(a.cells[0].innerText);
        const bValue = parseInt(b.cells[0].innerText);
        return isAscending ? aValue - bValue : bValue - aValue;
    });
    rows.forEach(function (row) {
        informationsTable.appendChild(row);
    });
});

