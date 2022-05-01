<?php

    include 'functions.php';

  if( isset($_POST['upload'])) {
      $allowExtension = array('zip', 'rar', '7z', 'tar', 'pdf');
      $name = $_FILES['files']['name'];
      $x = explode('.', $name);
      $extension = strtolower(end($x));
      $size = $_FILES['files']['size'];
      $file_tmp = $_FILES['files']['tmp_name'];

      if(in_array($extension, $allowExtension) === true) {
          //boleh upload file
          if($size < 10000000000) {
            move_uploaded_file($file_tmp, 'files/'.$name);
            //
            $save = mysqli_query($conn, "INSERT INTO files 
                                         VALUES 
                                         (NULL, '$name')");
            if($save) {
                echo "<script>
                        alert('File Was Uploaded!'); document.location='index.php'
                      </script>";
            } else {
                echo "<script>
                        alert('Failed to upload'); document.location='index.php'
                      </script>";
            }
          } else {
            echo "<script>
                    alert('Size too big!'); document.location='index.php'
                  </script>";              
          }
      } else {
          //tidak boleh upoad file
          echo "<script>
                    alert('Gagal'); document.location='index.php'
                </script>";
      }
  }
?>