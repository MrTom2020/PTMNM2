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
<?php 
    $dt = isset($data["gui"]) ? $data["gui"]:NULL;
   echo  "<table  id='htmltable' class='table table-hover'>
    <thead>
      <tr>
        <th scope='col'>Mã ví</th>
        <th scope='col'>Tên ví</th>
        <th scope='col'>Tên giao dịch</th>
        <th scope='col'>Giá trị giao dịch</th>
        <th scope='col'>Loại</th>
        <th scope='col'>Chiếm</th>
        <th scope='col'>Ngày tạo</th>
      </tr>
    </thead>
    <tbody>";
    if($dt)
    {
        while($row = mysqli_fetch_array($dt))
        {
        echo "<tr>
         <td>$row[6]</td>
         <td>$row[0]</td>
         <td>$row[2]</td>
         <td>$row[3]</td>
         <td>$row[1]</td>
         <td>$row[5]</td>
         <td>$row[7]</td>
         </tr>";
        }
    }
    echo "</tbody>
    </table>";
?>
<button onclick="exportTableToExcel('htmltable')">Export Table Data To Excel File</button>
