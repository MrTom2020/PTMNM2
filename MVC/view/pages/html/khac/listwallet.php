<?php
    echo "<table class='table'>";
    $dt = isset($data["listvi"]) ? $data["listvi"]:NULL;
    echo "<thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>First</th>
      <th scope='col'>Last</th>
      <th scope='col'>Handle</th>
      <th scope='col'>Xóa</th>
    </tr>
     </thead>";
     echo "<tbody>";
     while($row = mysqli_fetch_array($dt))
    {
        echo "<tr>
        <th scope='row'>1</th>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td><img src='https://img.icons8.com/ios/50/000000/delete--v3.png'/></td>
        </tr>";
      echo $row[1];
    }
    echo "</tbody>";
    echo "</table>";
    // echo "<table class='table'>";
    // echo "<thead>
    // <tr>
    //   <th scope='col'>#</th>
    //   <th scope='col'>First</th>
    //   <th scope='col'>Last</th>
    //   <th scope='col'>Handle</th>
    //   <th scope='col'>Xóa</th>
    // </tr>
    //  </thead>";
    //  echo "<tbody>";
    // for($i = 0;$i < 10;++$i)
    // {
    //     echo " <tr>
    //     <th scope='row'>$i</th>
    //     <td>$i</td>
    //     <td>$i</td>
    //     <td>$i</td>
    //     <td><img src='https://img.icons8.com/ios/50/000000/delete--v3.png'/></td>
    //     </tr>";
    // }
    // echo "</tbody>";
    // echo "</table>";
 ?>