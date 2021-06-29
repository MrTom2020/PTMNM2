<?php
    echo "<table class='table'>";
    echo "<thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>First</th>
      <th scope='col'>Last</th>
      <th scope='col'>Handle</th>
    </tr>
     </thead>";
     echo "<tbody>";
    for($i = 0;$i < 10;++$i)
    {
        echo " <tr>
        <th scope='row'>$i</th>
        <td>$i</td>
        <td>$i</td>
        <td>$i</td>
        </tr>";
    }
    echo "</tbody>";
    echo "</table>";
 ?>