titleAT = document.querySelectorAll('td.titleAT');
inputAT = document.querySelector('input#searchTitle');
//nlistItems = document.querySelectorAll('tr.tableData');
limitResultsAT = document.querySelector('input#limitResults');

function searchDefault(){
    window.location.href = "../index.php?searchTerm=Disney" + "&limitResults=" + limitResultsAT.value;
}

function searchByTerm(){
    window.location.href = "../index.php?searchTerm=" + inputAT.value + "&limitResults=" + limitResultsAT.value;
}