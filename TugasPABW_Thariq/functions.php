<?php
function Koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'db_pabw');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);


  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
