<?php
    echo "<table class='table'>";
    $dt = isset($data["vtv"]) ? $data["vtv"]:NULL;
    echo "<thead>
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>Tên ví</th>
      <th scope='col'>Tiền trong ví</th>
      <th scope='col'>Mã người dùng</th>
      <th scope='col'>Tên người dùng</th>
      <th scope='col'>Ngày tạo</th>
      <th scope='col'>Loại ví</th>
    </tr>
     </thead>";
     echo "<tbody>";
     if($dt)
     {
     while($row = mysqli_fetch_array($dt))
    {
        $tg = $row[5];
       $k = date("d/m/Y",strtotime($tg));
        echo "<tr>
        <th scope='row'>$row[0]</th>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$k</td>
        <td>$row[6]</td>
        </tr>";
    }
}
    echo "</tbody>";
    echo "</table>";
 ?>