<?php
echo '<table class="table table-success">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Genre</th>
          <th scope="col">Actor</th>
          <th scope="col">Movie</th>
          <th scope="col">Location</th>
          <th scope="col">Price</th>
        </tr>
      </thead>
      <tbody>';

while ($row = $result->fetch_assoc()) {
    echo '<tr data-id="' . $row["id"] . '" onclick="clickTableRow(this)">';
    echo '<td>' . $row["id"] . '</td>';
    echo '<td>' . $row["genre"] . '</td>';
    echo '<td>' . $row["actor"] . '</td>';
    echo '<td>' . $row["movie"] . '</td>';
    echo '<td>' . $row["location"] . '</td>';
    echo '<td>' . $row["price"] . '</td>';
    echo '</tr>';
}

if (mysqli_num_rows($result) == 0) {
    echo '<tr>
            <td colspan="6">No data</td>
          </tr>';
}


echo '</tbody>';
echo '</table>';