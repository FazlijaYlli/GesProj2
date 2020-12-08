/**
 * Trie les imprimantes depuis un input
 * @param {int} column Numéro de la colonne à trier
 */
function filterByColumn(column = 0) {
    // Declare variables
    var input, filter, table, td, i, txtValue;
    input = document.getElementById('nameFilter');
    filter = input.value.toUpperCase();
    table = document.getElementById("printer-table");
    tr = table.getElementsByTagName('tr');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[column];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
    }
}

/**
 * Trie les imprimantes depuis un select
 */
function brandFilter() {
    if ($("#brandFilter :selected").val() != "null") {
        var filter = $("#brandFilter :selected").text().toUpperCase(); // The text content of the selected option
        // Declare variables
        var table, td, i;
        table = document.getElementById("printer-table");
        tr = table.getElementsByTagName('tr');
    
        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
    
            td = tr[i].getElementsByTagName("td")[2];
    
            if (td) {
              text = td.textContent || td.innerText;
              if (text.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
        }
    } else {
        // Display all the entries
        var table, td, i;
        table = document.getElementById("printer-table");
        tr = table.getElementsByTagName('tr');
    
        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            tr[i].style.display = "";
        }
    }
}

/**
 * Trie les imprimantes depuis un select
 */
function constructorFilter() {
    if ($("#constructorFilter :selected").val() != "null") {
        var filter = $("#constructorFilter :selected").text().toUpperCase(); // The text content of the selected option
        // Declare variables
        var table, td, i;
        table = document.getElementById("printer-table");
        tr = table.getElementsByTagName('tr');
    
        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
    
            td = tr[i].getElementsByTagName("td")[1];
    
            if (td) {
              text = td.textContent || td.innerText;
              if (text.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
        }
    } else {
        // Display all the entries
        var table, td, i;
        table = document.getElementById("printer-table");
        tr = table.getElementsByTagName('tr');
    
        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            tr[i].style.display = "";
        }
    }
}