<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./template/cabecera.php');?>

                <h1>INFORMACION DE LAS PARCELAS</h1><br>
                <div class="containerMap">
                    <!--division  por parcelas 
                    • Parcela 1: 43 hectáreas.
                    • Parcela 2: 90 hectáreas.
                    • Parcela 3: 100 hectáreas.
                    • Parcela 4: 70 hectáreas.
                    • Parcela 5: 100 hectáreas.
                    • Parcela 6: 70 hectáreas.
                    • Parcela 7: 100 hectáreas.
                    • Parcela 8: 35 hectáreas.
                    • Parcela 9: 65 hectáreas.
                    • Parcela 10: 95 hectáreas.
                    • Parcela 11: 30 hectáreas.-->

                    <map name="mapa">
                        <img src="./imagenes/DonJuanSRL1-MARCADA.png" usemap="#mapa">
                        <area id="area1" class="area" shape="rectangle" coords="494, 690 333, 626" href="parcela1.php" title="Parcela 1 [43ha]"></area>
                        <area id="area2" shape="rectangle" coords="333, 626 497, 478" class="area" href="parcela2.php" title="Parcela 2 [90ha]">
                        <area id="area" shape="rectangle" coords="494, 527 657, 367" class="area" href="parcela3.php" title="Parcela 3 [100ha]">
                        <area id=" area" shape="rectangle" coords="497, 478 334, 365" class="area" href="parcela4.php" title="Parcela 4 [70ha]">
                        <area id="area" shape="rectangle" coords="170, 481 331, 690" class="area" href="parcela5.php" title="Parcela 5 [100ha]">
                        <area id="area" shape="rectangle" coords="334, 365 170, 481" class="area" href="parcela6.php" title="Parcela 6 [70ha]">
                        <area id="area" shape="rectangle" coords="426, 365 667, 251" class="area" href="parcela7.php" title="Parcela 7 [100ha]">
                        <area id="area" shape="rectangle" coords="426, 365 342, 247" class="area" href="parcela8.php" title="Parcela 8 [35ha]">
                        <area id="area" shape="rectangle" coords="342, 247 429, 38" class="area" href="parcela9.php" title="Parcela 9 [65ha]">
                        <area id="area" shape="rectangle" coords="429, 38 542, 250" class="area" href="parcela10.php" title="Parcela 10 [95ha]">
                        <area id="area1" class="area" shape="rectangle" coords="347, 38 257, 163" href="parcela11.php" title="Parcela 11 [30ha]">
                        <br><br><br><br><br>
                    </map>
                </div>
            </table>
        </div>
        </div>
        <div>

        </div>


        <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
        <script src="main.js"></script>
</body>

</html>