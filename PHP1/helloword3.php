<!DOCTYPE html>
<html>
    <body>
        <ol>
            <?php
                $daftarmenu = ["Gudeg", "Tongseng", "Sate", "Bakso"];

                foreach($daftarmenu as $menu){
                    echo "<li>$menu";
                }
            ?>
        </ol>
    </body>
</html>