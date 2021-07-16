<script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>

<div class="page-content page-container" id="page-content">
<table id="tblData">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Country</th>
    </tr>
    <tr>
        <td>John Doe</td>
        <td>john@gmail.com</td>
        <td>USA</td>
    </tr>
    <tr>
        <td>Michael Addison</td>
        <td>michael@gmail.com</td>
        <td>UK</td>
    </tr>
    <tr>
        <td>Sam Farmer</td>
        <td>sam@gmail.com</td>
        <td>France</td>
    </tr>
</table>
<button onclick="exportTableToExcel('tblData')">Export Table Data To Excel File</button>
</div>