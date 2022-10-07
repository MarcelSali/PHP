<!DOCTYPE html>
<html>
    <body>
        <h1 style="font-size: 40px;">FORM BIODATA - REVIEW</h1>
        <table border="1" cellspacing="1" cellpadding="7">
            <tr>
                <td>Nama : </td>
                <td><?php echo $_POST["pesan"];?></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><?php echo $_POST["pesan1"];?></td>
            </tr>
            <tr>
                <td>Umur : </td>
                <td><?php echo $_POST["pesan2"];?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin : </td>
                <td><?php echo $_POST["jenisKelamin"];?></td>
            </tr>
            <tr>
                <td>Hobby : </td>
                <td><?php $hobby = $_POST["hobi"];
                    foreach($hobby as $hobi){
                        echo $hobi." , ";
                    }
                        ?>
            </td>
            </tr>
        </table>
    </body>
</html>