<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'sigapotek');

	function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }

  function cari($keyword) {
    $query = "SELECT * FROM apotek WHERE
                  nama LIKE '%".$keyword."%' OR
                  alamat LIKE '%".$keyword."%'
                ";
    return query($query);
  }
 ?>