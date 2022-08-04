<?php 
  header("Content-Type: application/json; charset=UTF-8");
  include 'koneksi1.php';
  
  if(isset($_GET["query"])){
    $key = "%".$_GET["query"]."%";
    $query = "SELECT * FROM kegiatan WHERE nama LIKE ? LIMIT 10";
    $dewan1 = $db1->prepare($query);
    $dewan1->bind_param('s', $key);
    $dewan1->execute();
    $res1 = $dewan1->get_result();

    while ($row = $res1->fetch_assoc()) {
        $output['suggestions'][] = [
            'value' => $row['nama_kegiatan'],
            'nama_kegiatan'  => $row['nama_kegiatan']
        ];
    }

    if (! empty($output)) {
        echo json_encode($output);
    }
  }
?>