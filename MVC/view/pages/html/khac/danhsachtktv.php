<?php
    echo "<table class='table'>";
    $dt = isset($data["listvi"]) ? $data["listvi"]:NULL;
    echo "<thead>
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>Tên thành viên</th>
      <th scope='col'>Mật khẩu</th>
      <th scope='col'>Ngày sinh</th>
      <th scope='col'>Địa chỉ</th>
      <th scope='col'>Email</th>
      <th scope='col'>Xóa</th>
    </tr>
     </thead>";
     echo "<tbody>";
     while($row = mysqli_fetch_array($dt))
    {
        $tg = $row[4];
       $k = date("d/m/Y",strtotime($tg));
        echo "<tr>
        <th scope='row'>$row[0]</th>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        <td>$k</td>
        <td><img src='https://img.icons8.com/ios/50/000000/delete--v3.png'/></td>
        </tr>";
    }
    echo "</tbody>";
    echo "</table>";
 ?>