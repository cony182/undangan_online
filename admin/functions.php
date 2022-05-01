<?php
    $conn = mysqli_connect("localhost", "snoopy", "Blink@182", "db1");
    

    function query($query){

        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $db = mysqli_fetch_assoc($result)){
            $rows[] = $db;
        }
        return $rows;
    }

    function add($data) {
        global $conn;
        //ambil data dari input add
		$note  = htmlspecialchars($data["note"]);
		$judul = htmlspecialchars($data["add"]);
        
        //query insert to mysql
		$query ="INSERT INTO dbase1 VALUES (NULL, '$note', '$judul')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($rows);
    }

    function delete($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM dbase1 WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function edit($data){
        global $conn;
        //ambil data dari input add
        $id = $data["id"];
		$note  = htmlspecialchars($data["content"]);
        $judul = htmlspecialchars($data["judul"]);
        
		$query ="UPDATE dbase1 SET teks = '$note', judul = '$judul' WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($rows);
    }

    function cari($keyword){
        $query = "SELECT * FROM dbase1 WHERE
                    teks LIKE '%$keyword%' OR
                    judul LIKE '%$keyword%'
                ";
            return query($query);
    }




    function addfile($file) {
        global $conn;
        //ambil data dari input add
        $file = upload();
        if(!$file) {
            return false;
        }

        //query insert to mysql
		$query ="INSERT INTO files VALUES (NULL, '$file')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($rows);
    }

    function upload() {

        $filename = $_FILES['files']['name'];
        $filesize = $_FILES['files']['size']; //server lokal setting limit file size sebesar mungkin
        $error = $_FILES['files']['error'];
        $tmp = $_FILES['files']['tmp_name'];

        //cek pilih file
        if( $error === 4 ) {
            echo "<script>
                    alert('Please Choose File');
                 </script>";
            return false;
        }

        //cek extension
        $extension = ['zip', 'rar', '7z', 'tar'];
        $extensionfile = explode('.', $filename);
        $extensionfile = strtolower(end($extensionfile));
        //cek jenis file
        if( !in_array($extensionfile, $extension) ) {

            echo "<script>
                    alert('Wrong File!');
                 </script>";
            return false;
        }
        //cek size
        if( $filesize > 10000000000 ){
            echo "<script>
                    alert('Sorry, file size too big!');
                 </script>";
            return false;           
        }

        //file directory server
        move_uploaded_file($tmp, "files/");
        //move_uploaded_file( $_FILES['file']['tmp_name'], $todir . basename($_FILES['file']['name'] ));

        return $filename;

    }

?>