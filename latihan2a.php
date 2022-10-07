<!DOCTYPE html>
<html>
    <body>
        <form action="latihan2b.php" method="POST">
            <pre>Nama          : <input type="text" name="pesan" value=""/></pre>
            <pre>Alamat        : <input type="text" name="pesan1" value=""/></pre>
            <pre>Umur          : <input type="text" name="pesan2" value=""/></pre>
            <pre>Jenis Kelamin : <input type="radio" name="jenisKelamin" value="Pria">Pria</pre>
                                 <pre><input style="margin-left: 119px" type="radio" name="jenisKelamin" value="Wanita">Wanita</pre>
            <pre>Hobby         : <input type="checkbox" name="hobi[]" value="Musik">Music</pre>
                                 <pre><input style="margin-left: 118px" type="checkbox" name="hobi[]" value="Programming">Programming</pre>
                                 <pre><input style="margin-left: 118px" type="checkbox" name="hobi[]" value="Game">Game</pre>
                                 <pre><input style="margin-left: 118px" type="checkbox" name="hobi[]" value="Movies">Movies</pre>
                                 <pre><input style="margin-left: 118px" type="checkbox" name="hobi[]" value="Travelling">Travelling</pre>
                                 <pre><input style="margin-left: 118px" type="checkbox" name="hobi[]" value="Sport">Sport</pre>
                                 <pre><input style="margin-left: 118px" type="checkbox" name="hobi[]" value="Organization">Organization</pre>
                                 <pre><input style="margin-left: 118px" type="checkbox" name="hobi[]" value="Outomotive">Automotive</pre>
           <input type="submit" value="Submit">
        </form>
    </body>
</html>