<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div>
            <form action="pages/seleziona.php" method="POST">
                <label for="scrittori">SELEZIONA SCRITTORE: </label>
                <select name="scrittore">
                    <?php
                        include "db/connection.php";
                        $conn=db();
                        $query="SELECT NomeAutore FROM autori";
                        $res=$conn->query($query);
                        while($row=mysqli_fetch_array($res)){
                            $nomea=stripslashes($row['NomeAutore']);
                            echo"<option value='$nomea' name=nomea>$nomea</option>";
                        }
                    ?>
                </select>
                <br>
                <input type="submit" value="SELEZIONA AUTORE">
            </form>
            <form action="pages/ricerca.php" method="POST">
                <label for="libro">CODICE LIBRO: </label>
                <input type="number"name="libro">
                <br>
                <input type="submit" value="CERCA LIBRO">
            </form>
            <br>
            <form action="pages/autori.php" method="POST">
                <label for="autori">CERCA AUTORI IN VITA</label>
                <input type="submit" value="CERCA">
            </form>
        </div>
    </body>
</html>