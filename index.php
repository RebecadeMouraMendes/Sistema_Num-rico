<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema númerico</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div>
                    <br><br>
                    <h1>Calculadora de Sistema Númerico</h1><br>
                </div>
                <form name="calculadora" method="POST" action="">

                    <?php echo "<h3>Selecione o tipo da entrada<h3>" ?>
                    <br>
                    <button type="submit" class="btn btn-secondary" name="Binário" value="Submit1">Binário</button>
                    <button type="submit" class="btn btn-dark" name="Octal" value="Submit2">Octal</button>
                    <button type="submit" class="btn btn-secondary" name="Decimal" value="Submit3">Decimal</button>
                    <button type="submit" class="btn btn-dark" name="Hexadecimal" value="Submit4">Hexadecimal</button>


                    <?php


                    if (isset($_POST['Binário'])) {
                    ?> <br> <br>
                        <div class="gap-2 col-4 mx-auto">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Número:</span>
                                <input type="text" name="numBi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> <br> <br>
                            </div>
                            <br>
                            <?php echo "<h3>Selecione o tipo da saída<h3>" ?>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-secondary" name="Octal2" value="Submit6">Octal</button>
                        <button type="submit" class="btn btn-secondary" name="Decimal2" value="Submit7">Decimal</button>
                        <button type="submit" class="btn btn-secondary" name="Hexadecimal2" value="Submit8">Hexadecimal</button>
                    <?php
                    }
                    if (isset($_POST['Octal'])) {
                    ?> <br> <br>
                        <div class="gap-2 col-4 mx-auto">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Número:</span>
                                <input type="text" name="numOc" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> <br> <br>
                            </div>
                            <br>
                            <?php echo "<h3>Selecione o tipo da saída<h3>" ?>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-secondary" name="Binário3" value="Submit5">Binário</button>
                        <button type="submit" class="btn btn-secondary" name="Decimal3" value="Submit7">Decimal</button>
                        <button type="submit" class="btn btn-secondary" name="Hexadecimal3" value="Submit8">Hexadecimal</button>
                    <?php
                    }
                    if (isset($_POST['Decimal'])) {
                    ?> <br> <br>
                        <div class="gap-2 col-4 mx-auto">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Número:</span>
                                <input type="text" name="numDec" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> <br> <br>
                            </div>
                            <br>
                            <?php echo "<h3>Selecione o tipo da saída<h3>" ?>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-secondary" name="Binário4" value="Submit5">Binário</button>
                        <button type="submit" class="btn btn-secondary" name="Octal4" value="Submit6">Octal</button>
                        <button type="submit" class="btn btn-secondary" name="Hexadecimal4" value="Submit8">Hexadecimal</button>
                    <?php
                    }
                    if (isset($_POST['Hexadecimal'])) {
                    ?> <br> <br>
                        <div class="gap-2 col-4 mx-auto">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Número:</span>
                                <input type="text" name="numHexa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> <br> <br>
                            </div>
                            <br>
                            <?php echo "<h3>Selecione o tipo da saída<h3>" ?>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-secondary" name="Binário4" value="Submit5">Binário</button>
                        <button type="submit" class="btn btn-secondary" name="Octal5" value="Submit6">Octal</button>
                        <button type="submit" class="btn btn-secondary" name="Decimal5" value="Submit7">Decimal</button>
                    <?php

                    } ?>
                    <div id="varBi" style="display: none;">
                        <?php
                        $NumBi = $_POST['numBi'];
                        ?>
                    </div>

                    <div id="varOc" style="display: none;">
                        <?php
                        $NumOc = $_POST['numOc'];
                        ?>
                    </div>

                    <div id="varDec" style="display: none;">
                        <?php
                        $NumDec = $_POST['numDec'];
                        ?>
                    </div>

                    <div id="varHex" style="display: none;">
                        <?php
                        $NumHex = $_POST['numHexa'];
                        ?>
                    </div>
                    <?php

                    if (isset($_POST['Octal2'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varBi = "<?php echo "$NumBi" ?>";
                                var i;
                                verificacaoBi = false;
                                for (i = 0; i < varBi.length; i++) {
                                    if (varBi[i] == "0" || varBi[i] == "1") {
                                        verificacaoBi = true;
                                    } else {
                                        verificacaoBi = false;
                                        break;
                                    }
                                }
                                if (verificacaoBi == true) {
                                    var octal = parseInt(varBi, 2).toString(8);
                                    alert("O número " + varBi + " é igual a " + octal + " em um sistema octal");
                                } else {
                                    alert("O valor não está em binário");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }

                    if (isset($_POST['Decimal2'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varBi = "<?php echo "$NumBi" ?>";
                                var i;
                                verificacaoBi = false;
                                for (i = 0; i < varBi.length; i++) {
                                    if (varBi[i] == "0" || varBi[i] == "1") {
                                        verificacaoBi = true;
                                    } else {
                                        verificacaoBi = false;
                                        break;
                                    }
                                }
                                if (verificacaoBi == true) {
                                    var dec = parseInt(varBi, 2).toString(10);
                                    alert("O número " + varBi + " é igual a " + dec + " em um sistema decimal");
                                } else {
                                    alert("O valor não está em binário");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }


                    if (isset($_POST['Hexadecimal2'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varBi = "<?php echo "$NumBi" ?>";
                                var i;
                                verificacaoBi = false;
                                for (i = 0; i < varBi.length; i++) {
                                    if (varBi[i] == "0" || varBi[i] == "1") {
                                        verificacaoBi = true;
                                    } else {
                                        verificacaoBi = false;
                                        break;
                                    }
                                }
                                if (verificacaoBi == true) {
                                    var hex = parseInt(varBi, 2).toString(16);
                                    alert("O número " + varBi + " é igual a " + hex + " em um sistema hexadecimal");
                                } else {
                                    alert("O valor não está em binário");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }

                    // OCTAL

                    if (isset($_POST['Binário3'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varOc = "<?php echo "$NumOc" ?>";
                                var i;
                                let verificacaoOc = false;
                                for (i = 0; i < varOc.length; i++) {
                                    if (varOc[i] == "0" || varOc[i] == "1" || varOc[i] == "2" || varOc[i] == "3" || varOc[i] == "4" || varOc[i] == "5" || varOc[i] == "6" || varOc[i] == "7") {
                                        verificacaoOc = true;
                                    } else {
                                        verificacaoOc = false;
                                        break;
                                    }
                                }
                                if (verificacaoOc == true) {
                                    var bin = parseInt(varOc, 8).toString(2);
                                    alert("O número " + varOc + " é igual a " + bin + " em um sistema binário");
                                } else {
                                    alert("O valor não está em octal");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }

                    if (isset($_POST['Decimal3'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varOc = "<?php echo "$NumOc" ?>";
                                var i;
                                verificacaoOc = false;
                                for (i = 0; i < varOc.length; i++) {
                                    if (varOc[i] == "0" || varOc[i] == "1" || varOc[i] == "2" || varOc[i] == "3" || varOc[i] == "4" || varOc[i] == "5" || varOc[i] == "6" || varOc[i] == "7") {
                                        verificacaoOc = true;
                                    } else {
                                        verificacaoOc = false;
                                        break;
                                    }
                                }
                                if (verificacaoOc == true) {
                                    var dec = parseInt(varOc, 8).toString(10);
                                    alert("O número " + varOc + " é igual a " + dec + " em um sistema decimal");
                                } else {
                                    alert("O valor não está em octal");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }

                    if (isset($_POST['Hexadecimal3'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varOc = "<?php echo "$NumOc" ?>";
                                var i;
                                verificacaoOc = false;
                                for (i = 0; i < varOc.length; i++) {
                                    if (varOc[i] == "0" || varOc[i] == "1" || varOc[i] == "2" || varOc[i] == "3" || varOc[i] == "4" || varOc[i] == "5" || varOc[i] == "6" || varOc[i] == "7") {
                                        verificacaoOc = true;
                                    } else {
                                        verificacaoOc = false;
                                        break;
                                    }
                                }
                                if (verificacaoOc == true) {
                                    var hexa = parseInt(varOc, 8).toString(16);
                                    alert("O número " + varOc + " é igual a " + hexa + " em um sistema hexadecimal");
                                } else {
                                    alert("O valor não está em octal");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }


                    //DECIMAL
                    if (isset($_POST['Binário4'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varDec = "<?php echo "$NumDec" ?>";
                                var i;
                                verificacaoDec = false;
                                for (i = 0; i < varDec.length; i++) {
                                    if (varDec[i] == "0" || varDec[i] == "1" || varDec[i] == "2" || varDec[i] == "3" || varDec[i] == "4" || varDec[i] == "5" || varDec[i] == "6" || varDec[i] == "7" || varDec[i] == "8" || varDec[i] == "9") {
                                        verificacaoDec = true;
                                    } else {
                                        verificacaoDec = false;
                                        break;
                                    }
                                }
                                if (verificacaoDec == true) {
                                    var bin = parseInt(varDec, 10).toString(2);
                                    alert("O número " + varDec + " é igual a " + bin + " em um sistema binário");
                                } else {
                                    alert("O valor não está em decimal");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }

                    if (isset($_POST['Octal4'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varDec = "<?php echo "$NumDec" ?>";
                                var i;
                                verificacaoDec = false;
                                for (i = 0; i < varDec.length; i++) {
                                    if (varDec[i] == "0" || varDec[i] == "1" || varDec[i] == "2" || varDec[i] == "3" || varDec[i] == "4" || varDec[i] == "5" || varDec[i] == "6" || varDec[i] == "7" || varDec[i] == "8" || varDec[i] == "9") {
                                        verificacaoDec = true;
                                    } else {
                                        verificacaoDec = false;
                                        break;
                                    }
                                }
                                if (verificacaoDec == true) {
                                    var oc = parseInt(varDec, 10).toString(8);
                                    alert("O número " + varDec + " é igual a " + oc + " em um sistema octal");
                                } else {
                                    alert("O valor não está em decimal");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }

                    if (isset($_POST['Hexadecimal4'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varDec = "<?php echo "$NumDec" ?>";
                                var i;
                                verificacaoDec = false;
                                for (i = 0; i < varDec.length; i++) {
                                    if (varDec[i] == "0" || varDec[i] == "1" || varDec[i] == "2" || varDec[i] == "3" || varDec[i] == "4" || varDec[i] == "5" || varDec[i] == "6" || varDec[i] == "7" || varDec[i] == "8" || varDec[i] == "9") {
                                        verificacaoDec = true;
                                    } else {
                                        verificacaoDec = false;
                                        break;
                                    }
                                }
                                if (verificacaoDec == true) {
                                    var hex = parseInt(varDec, 10).toString(16);
                                    alert("O número " + varDec + " é igual a " + hex + " em um sistema hexadecimal");
                                } else {
                                    alert("O valor não está em decimal");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }

                    //HEXA
                    if (isset($_POST['Octal5'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varHex = "<?php echo "$NumHex" ?>";
                                var i;
                                verificacaoHex = false;
                                for (i = 0; i < varHex.length; i++) {
                                    if (varHex[i] == "0" || varHex[i] == "1" || varHex[i] == "2" || varHex[i] == "3" || varHex[i] == "4" || varHex[i] == "5" || varHex[i] == "6" || varHex[i] == "7" || varHex[i] == "8" || varHex[i] == "9" || varHex[i] == "a" || varHex[i] == "b" || varHex[i] == "c" || varHex[i] == "d" || varHex[i] == "e" || varHex[i] == "f" || varHex[i] == "A" || varHex[i] == "B" || varHex[i] == "C" || varHex[i] == "D" || varHex[i] == "E" || varHex[i] == "F") {
                                        verificacaoHex = true;
                                    } else {
                                        verificacaoHex = false;
                                        break;
                                    }
                                }
                                if (verificacaoHex == true) {
                                    var octal = parseInt(varHex, 16).toString(8);
                                    alert("O número " + varHex + " é igual a " + octal + " em um sistema octal");
                                } else {
                                    alert("O valor não está em hexadecimal");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }

                    if (isset($_POST['Decimal5'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varHex = "<?php echo "$NumHex" ?>";
                                var i;
                                verificacaoHex = false;
                                for (i = 0; i < varHex.length; i++) {
                                    if (varHex[i] == "0" || varHex[i] == "1" || varHex[i] == "2" || varHex[i] == "3" || varHex[i] == "4" || varHex[i] == "5" || varHex[i] == "6" || varHex[i] == "7" || varHex[i] == "8" || varHex[i] == "9" || varHex[i] == "a" || varHex[i] == "b" || varHex[i] == "c" || varHex[i] == "d" || varHex[i] == "e" || varHex[i] == "f" || varHex[i] == "A" || varHex[i] == "B" || varHex[i] == "C" || varHex[i] == "D" || varHex[i] == "E" || varHex[i] == "F") {
                                        verificacaoHex = true;
                                    } else {
                                        verificacaoHex = false;
                                        break;
                                    }
                                }
                                if (verificacaoHex == true) {
                                    var dec = parseInt(varHex, 16).toString(10);
                                    alert("O número " + varHex + " é igual a " + dec + " em um sistema decimal");
                                } else {
                                    alert("O valor não está em hexadecimal");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }


                    if (isset($_POST['Binário5'])) {
                    ?> <br> <br>
                        <div class="input-group mb-3">
                            <script type="text/javascript">
                                var varHex = "<?php echo "$NumHex" ?>";
                                var i;
                                verificacaoHex = false;
                                for (i = 0; i < varHex.length; i++) {
                                    if (varHex[i] == "0" || varHex[i] == "1" || varHex[i] == "2" || varHex[i] == "3" || varHex[i] == "4" || varHex[i] == "5" || varHex[i] == "6" || varHex[i] == "7" || varHex[i] == "8" || varHex[i] == "9" || varHex[i] == "a" || varHex[i] == "b" || varHex[i] == "c" || varHex[i] == "d" || varHex[i] == "e" || varHex[i] == "f" || varHex[i] == "A" || varHex[i] == "B" || varHex[i] == "C" || varHex[i] == "D" || varHex[i] == "E" || varHex[i] == "F") {
                                        verificacaoHex = true;
                                    } else {
                                        verificacaoHex = false;
                                        break;
                                    }
                                }
                                if (verificacaoHex == true) {
                                    var binar = parseInt(varHex, 16).toString(2).padStart(8, '0');
                                    alert("O número " + varHex + " é igual a " + binar + " em um sistema binário");
                                } else {
                                    alert("O valor não está em hexadecimal");
                                }
                            </script>
                        </div>
                        <br>
                    <?php
                    }
                    ?>
                </form>
            </div>
        </div>
</body>

</html>