<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Table de multiplication</title>
        <link rel="stylesheet" href="style.css">
        </head>
        <body style="overflow-y: auto;height: auto;padding: 20vh;">
            
            <?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    // if(isset($x) && isset($y)){
        // $a = $x;
        // $b = $y;
        // echo "$a $b";
    // }
    ?>
    <section class="main" style="height: auto">
        <h1>Tables de multiplication</h1>
        <table>
            <thead>
                <tr>
                    <th>a</th>
                    <th>b</th>
                    <th>Reponse</th>
                    <th>Action</th>
                </tr>
                
            </thead>
            <tbody>
                <?php for($i=1;$i<=$b;$i++){
                    $res = $i*$a;
                    $color = $i % 2 == 0 ? "#0f0" : "#00f";
                    $li = 0;
                    if(isset($li)&&isset($x)&&isset($y)){
                        $line = $li;
                        $dis = $i == $line ? "none" : "block";
                    }
                    echo "<tr id='row-$i' style='background-color: $color;'>";
                    echo "<td>$i</td>";
                    echo "<td>$a</td>";
                    echo "<td>$res</td>";
                    echo "<td style='padding: 0 1vw;display: flex;justify-content: space-between;align-items: center;'><button id='mod' class='btn btn-primary'>Modifier</button><button style='background-color: #f00;color: #fff;' class='btn btn-primary'><a href='test.php?x=$a&y=$b&li=$i'>Supprimer</a></button></td>";
                    echo "</tr>";
                }?>
            </tbody>
        </table>
        <form id="modif-form" action="test.php" method="post" class="modif" style="display: none;">
            <h1>Les modifications</h1>
            <label for="x">La nouvelle valeur de a </label>
            <input type="text" name="x" id="x" class="var" /><br>
            <label for="y">La nouvelle valeur de b </label>
            <input type="text" name="y" id="y" class="var" />
            <input type="hidden" name="id" id="id" />
            <input type="hidden" name="action" id="action" value="edit" />
            <input type="submit" value="Modifier" class="submit"/>
        </form>
    </section>
    </body>
    </html>
