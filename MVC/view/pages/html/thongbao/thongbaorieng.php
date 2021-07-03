<?php
    echo "<table class='table'>";
    $dt = isset($data["thongbaocn"]) ? $data["thongbaocn"]:NULL;
    echo "<thead>
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>Tên ví</th>
    </tr>
     </thead>";
     echo "<tbody>";
     while($row = mysqli_fetch_array($dt))
    {
        echo "<tr>
        <th scope='row'>$row[0]</th>
        <td>$row[1]</td>
        </tr>";
    }
    echo "</tbody>";
    echo "</table>";
 ?>