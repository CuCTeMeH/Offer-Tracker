function addRow(tableID){
 
    var table = document.getElementById(tableID);
 
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);       

    var cell1 = row.insertCell(0);
    cell1.innerHTML = rowCount;
			
	var cell2 = row.insertCell(1);
    var element1 = document.createElement("input");
    element1.type = "text";
	element1.id = "col1";
    cell2.appendChild(element1);
			
	var cell3 = row.insertCell(2);
    var element2 = document.createElement("input");
    element2.type = "text";
	element2.id = "col2";
    cell3.appendChild(element2);
			
	var cell4 = row.insertCell(3);
    var element3 = document.createElement("input");
    element3.type = "text";
	element3.id = "col3";
    cell4.appendChild(element3);
			
	var cell5 = row.insertCell(4);
    var element4 = document.createElement("input");
    element4.type = "text";
	element4.id = "col4";
    cell5.appendChild(element4);
			
	var cell6 = row.insertCell(5);
    var element5 = document.createElement("input");
    element5.type = "text";
	element5.id = "col5";
    cell6.appendChild(element5);
			
	var cell7 = row.insertCell(6);
    var element6 = document.createElement("input");
    element6.type = "text";
	element6.id = "col6";
    cell7.appendChild(element6);
	
	for (var i = 0, row; row = table.rows[i]; i++) {
   //iterate through rows
   //rows would be accessed using the "row" variable assigned in the for loop
			for (var j = 0, col; col = row.cells[j]; j++) {
				 
   }  
}
}
function deleteRow(tableID){
	document.getElementById("dataTable").deleteRow(-1);
}