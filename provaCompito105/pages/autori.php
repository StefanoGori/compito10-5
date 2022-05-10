<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div>
            <table border="solid">
                <tr>
                    <td>Nome Autore</td>
                    <td>Numero Romanzi</td>
                </tr>
                <?php
                    include "../db/connection.php";
                    $conn=db();
                    $query="SELECT a.NomeAutore, COUNT(r.CodiceR) AS nlibri FROM autori a INNER JOIN romanzi r on r.NomeAutore=a.NomeAutore WHERE a.AnnoM IS null GROUP BY a.NomeAutore";
                    $res=$conn->query($query);
                    while($row=mysqli_fetch_array($res)){
                        $nomea=stripslashes($row['NomeAutore']);
                        $nlibri=stripslashes($row['nlibri']);
                        echo"<tr>
                                <td>'$nomea'</td>
                                <td>'$nlibri'</td>
                            </tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>