

<?php
    //membuat koneksi
    $con = mysqli_connect("localhost", "root", "", "latihan");

    
    //memasukkan data ke array
        $nama_mitra       = $_POST['nama_mitra'];
        

        $total = count($nama_mitra);


    //melakukan perulangan input
    for($i=0; $i<$total; $i++){

        mysqli_query($con, "insert into mitra set
            nama_mitra    = '$nama_mitra[$i]',
            
        ");
    }

    //kembali ke halaman sebelumnya
    header("location: mitraindex.blade.php");

