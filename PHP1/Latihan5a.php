<!DOCTYPE html>
<html>
    <body>
    <?php
        $user = $_POST["input"];
        $pass = $_POST["input1"];
        
        if($user == "admin" && $pass == "admin123"){
            echo "Selamat Datang, Anda Sukses Login";
        }
        else{
            echo "Mohon Maaf, Anda Gagal Login";
        }
    
        ?>
    </body>
</html>
    