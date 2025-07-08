<?php
    // untuk menyambungkan database
    $conn = mysqli_connect("localhost", "root", "", "php_dasar" );

    function query($query){
        global $conn;
        // untuk menjalankan query
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        
        $query = "INSERT INTO mahasiswa (nama, nim, email, jurusan) 
                    VALUES ('$nama', '$nim', '$email', '$jurusan')";
        // untuk menjalankan sql
        mysqli_query($conn, $query);

        // untuk mengembalikan baris yg terpengaruh oleh query
        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
?>