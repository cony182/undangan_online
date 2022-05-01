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

        var_dump($_POST);
        
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
        
        //query insert to mysql
                 //UPDATE dbase1 SET teks = 'learnig java', judul = 'apa' WHERE id = 8
		$query ="UPDATE dbase1 SET teks = '$note', judul = '$judul' WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($rows);
    }

?>