  
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Calculadora Javascript 2° Bimestre</title>
         <link rel="stylesheet" href="css/estilo_calculadora.css" language="javascript">
    </head>
    <body>
        <form name="calculando">
            <table align="center" border="0">
                <tr align="center">
                    <th colspan="3"><input type="text" name="tela" id="tela" readonly="readonly" class="estilo_tela"></th>
                    <th><button type="button" value="AC" onclick="AC()" class="estilo_ac"><b>AC</b></button></th>
                </tr>
                <tr align="center">
                    <td><button type="button" value="7" onclick="clica(7)" class="estilo_num">7</button></td>
                    <td><button type="button" value="8" onclick="clica(8)" class="estilo_num">8</button></td>
                    <td><button type="button" value="9" onclick="clica(9)"class="estilo_num">9</button></td>
                    <td><button type="button" value="+" onclick="clica('+')" class="estilo_operador">+</button></td>
                </tr>
                <tr align="center">
                    <td><button type="button" value="4" onclick="clica(4)" class="estilo_num">4</button></td>
                    <td><button type="button" value="5" onclick="clica(5)" class="estilo_num">5</button></td>
                    <td><button type="button" value="6" onclick="clica(6)" class="estilo_num">6</button></td>
                    <td><button type="button" value="-" onclick="clica('-')" class="estilo_operador">-</button></td>
                </tr>
                <tr align="center">
                    <td><button type="button" value="1" onclick="clica(1)" class="estilo_num">1</button></td>
                    <td><button type="button" value="2" onclick="clica(2)" class="estilo_num">2</button></td>
                    <td><button type="button" value="3" onclick="clica(3)" class="estilo_num">3</button></td>
                    <td><button type="button" value="*" onclick="clica('*')" class="estilo_operador">X</button></td>
                </tr>
                <tr align="center">
                    <td><button type="button" value="0" onclick="clica(0)" class="estilo_num">0</button></td>
                    <td><button type="button" value="." onclick="clica('.')" class="estilo_num">.</button></td>
                    <td><button type="button" value="=" onclick="resultado()" class="estilo_operador">=</button></td>
                    <td><button type="button" value="/" onclick="clica('/')" class="estilo_operador">/</button></td>
                </tr>
            </table>
        </form>
        <script src="js/calculando.js"></script>

    </body>
</html>