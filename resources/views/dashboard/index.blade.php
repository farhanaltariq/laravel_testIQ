@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')
<script language="javascript">

function createTable() {

    // Get the data
	var excelData = document.getElementById('csv').value;
	
    // split into rows
    excelRow = excelData.split(String.fromCharCode(10));

    // split rows into columns
    for (i=0; i<excelRow.length; i++) {
        excelRow[i] = excelRow[i].split(String.fromCharCode(9));

    }
	
	// start to create the HTML table
	var myTable = document.createElement("table");
    myTable.setAttribute("class", "table table-striped");
	var myTbody = document.createElement("tbody");
	
	// Loop over the rows
    for (i=0; i<excelRow.length - 1; i++) {

		// create a row in the HTML table
		var myRow = document.createElement("tr");
		
		// Loop over the columns and add TD to the TR
		for (j=0; j<excelRow[i].length; j++) {
			// Loop over the row columns
			if (excelRow[i][j].length != 0) {
					var myCell = document.createElement("td");
					myCell.innerHTML = excelRow[i][j];
            }			
			myRow.appendChild(myCell);			
		}
		myTbody.appendChild(myRow);	
	}
		myTable.appendChild(myTbody);

    document.getElementById('datas').appendChild(myTable);
	// console.log(myTable)
}
</script>
<div id="datas"></div>
<textarea id="csv" placeholder="Paste XLSX content here" style="width: 100%; height: 50px;"></textarea><br/>
<input type="button" value="Hitung" onclick="createTable()" >
@endsection