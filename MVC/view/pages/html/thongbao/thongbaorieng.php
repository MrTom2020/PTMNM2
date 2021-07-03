<?php
    echo "<table class='table'>";
    $dt = isset($_SESSION['tbcnn']) ? $_SESSION['tbcnn']:NULL;
    echo "<thead>
    <tr>
      <th scope='col'>Tiêu đề</th>
      <th scope='col'>Nội dung</th>
    </tr>
     </thead>";
     echo "<tbody>";
     while($row = mysqli_fetch_array($dt))
    {
        echo "<tr>
        <th scope='row'>$row[3]</th>
        <td>$row[4]</td>
        </tr>";
    }
    echo "</tbody>";
    echo "</table>";
 ?>