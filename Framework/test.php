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
    // echo "$a $b";
    ?>
    <section class="main" style="height: auto">
        <h1>Tables de multiplication</h1>
        <table>
            <thead>
                <tr>
                    <th>a</th>
                    <th>b</th>
                    <th>answer</th>
                    <th>action</th>
                </tr>
                
            </thead>
            <tbody>
                <?php for($i=1;$i<=$b;$i++){
                    $res = $i*$a;
                    $color = $i % 2 == 0 ? "#0f0" : "#00f";
                    $li = 0;
                    $line = $li;
                    $dis = $i == $line ? "none" : "block";
                    echo "<tr style='background-color: $color;'>";
                    echo "<td>$i</td>";
                    echo "<td>$a</td>";
                    echo "<td>$res</td>";
                    echo "<td style='padding: 0 1vw;display: flex;justify-content: space-between;'><button class='mod'>Modifier</button><button class='del'><a href='test.php?li=<?= $i?>'>Supprimer</a></button></td>";
                    echo "</tr>";
                }?>
            </tbody>
        </table>
        <form action="test.php" method="post" class="modif">
            <h1>Les modifications</h1>
            <label for="x">La nouvelle valeur de a </label>
            <input type="text" name="x" id="x" class="var" />
            <label for="y">La nouvelle valeur de b </label>
            <input type="text" name="y" id="y" class="var" />
            <input type="submit" value="Modifier" class="submit"/>
        </form>
    </section>
    <script>
        const modif = document.querySelector('.modif');
        const mod = document.querySelector('.mod');
        mod.addEventListener('click', () => {
            modif.style.display = "block";
        })
    </script>
    </body>
    </html>