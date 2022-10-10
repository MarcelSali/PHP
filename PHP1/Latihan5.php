<!DOCTYPE html>
<html>
<body>
    <form action="Latihan5.php" method="POST">
        <pre>Username : <input type="text" name="input" value=""/></pre>
        <pre>Password : <input type="text" name="input1" value=""/></pre>
        
        <input type="submit" value="Login" style="margin-left: 78px;">
    </form>    

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