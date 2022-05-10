<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div>
            <table border="solid">
                <tr>
                    <td>Titolo</td>
                    <td>NomeAutore</td>
                    <td>AnnoN</td>
                    <td>AnnoM</td>
                    <td>Nazione</td>
                </tr>
                <?php
                    include "../db/connection.php";
                    $conn=db();
                    $query="SELECT a.*, r.Titolo FROM autori a INNER JOIN romanzi r on r.NomeAutore=a.NomeAutore WHERE r.CodiceR='{$_POST['libro']}'";
                    $res=$conn->query($query);
                    while($row=mysqli_fetch_array($res)){
                        $titolo=stripslashes($row['Titolo']);
                        $nomea=stripslashes($row['NomeAutore']);
                        $AnnoN=stripslashes($row['AnnoN']);
                        if($row['AnnoM']==null){
                            $AnnoM="ancora in vita";
                        }
                        else{
                            $AnnoM=stripslashes($row['AnnoM']);
                        }
                        $nazione=stripslashes($row['Nazione']);
                        echo $titolo. $nomea .$AnnoN .$AnnoM .$nazione;
                        echo"<tr>
                                <td>'$titolo'</td>
                                <td>'$nomea'</td>
                                <td>'$AnnoN'</td>
                                <td>'$AnnoM'</td>
                                <td>'$nazione'</td>
                            </tr>
                        ";
                    }
                ?>
            </table>
            <br>
            <button><a href="../index.php">TORNA INDIETRO</a></button>
        </div>
    </body>
</html>