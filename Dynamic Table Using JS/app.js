function addRow(){
    var table = document.getElementById('data-table');
    var rowCount = table.rows.length;
    var cellCount = table.rows[0].cells.length;
    var row = table.insertRow(rowCount);

    for(var i = 0; i <= cellCount; i++){
        var cell = row.insertCell(i);
        var copyCell = document.getElementById('c-' + (i+1)).innerHTML;
        cell.innerHTML = copyCell;
    }
}

function deleteRow() {
    var table = document.getElementById('data-table');
    var rowCount = table.rows.length;

    if (rowCount > 1) {
        table.deleteRow(rowCount - 1);
    } else {
        console.log("Cannot delete the last row. There must be at least one row.");
    }
}

