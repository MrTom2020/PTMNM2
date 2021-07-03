<?php
  echo '<h1>THÔNG BÁO</h1>';
    $dt = isset($data['tbc']) ? $data['tbc']:NULL;
    echo "<table class='table'>
    <thead>
      <tr>
        <th scope='col'>Tiêu đề</th>
        <th scope='col'>Nội dung</th>
        <th scope='col'></th>
        <th scope='col'></th>
        <th scope='col'>Ngày đăng</th>
        <th scope='col'>Xóa</th>
      </tr>
    </thead>
    <tbody>";
     while($row = mysqli_fetch_array($dt))
    {

        echo "<form class='login-container' action='../xemthongbao/xemtb' method='POST'>
        <tr>
      <td>$row[3]</td>
      <td colspan='3'>$row[4]</td>
      <td>$row[5]</td>
      <td><button type='submit' name='xoatb' value='$row[0]' class='btn btn-primary'>Xóa</button></td>
       </tr> 
      </form>";
    }
    echo "</tbody>
    </table>";
 ?>