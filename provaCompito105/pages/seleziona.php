<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div>
            <table border="solid">
                <tr>
                    <td>CodiceR</td>
                    <td>Titolo</td>
                    <td>NomeAutore</td>
                    <td>Anno</td>
                </tr>
                <?php
                    include "../db/connection.php";
                    $conn=db();
                    $query="SELECT * FROM romanzi WHERE NomeAutore='{$_POST['scrittore']}'";
                    $result=$conn->query($query);
                    while($row=mysqli_fetch_array($result)){
                        $codiceR=stripslashes($row['CodiceR']);
                        $titolo=stripslashes($row['Titolo']);
                        $nomea=stripslashes($row['NomeAutore']);
                        $anno=stripslashes($row['Anno']);
                        echo"<tr>
                                <td>'$row[CodiceR]'</td>
                                <td>'$titolo'</td>
                                <td>'$nomea'</td>
                                <td>'$anno'</td>
                            </tr>";
                    }
                ?>
            </table>
            <button><a href="../index.php">TORNA INDIETRO</a></button>
        </div>
    </body>
</html>