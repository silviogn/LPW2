<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <form action="PacienteAction.php" method="post">
            <fieldset>
                <legend>Cadastro de Paciente</legend>

                Documento:<br>
                <input type="text" name="documento"><br><br>

                Nome:<br>
                <input type="text" name="nome"><br><br>

                Peso:<br>
                <input type="text" name="peso"><br><br>
                
                Altura:<br>
                <input type="text" name="altura"><br><br>

                Nascimento<br>
                <input type="date" name="nascimento"><br><br>

                Grupo sanguíneo<br>
                <select name="tiposanguineo"> 
                    <option value="0">--------</option>
                    <?php
                    print "aqui";
                    include_once '../business/TipoSanguineoBl.php';
                    $tipoSanguineoBl = new TipoSanguineoBl();
                    foreach ($tipoSanguineoBl->GetAll() as $tipo) {
                        print "<option value=" . $tipo['Id'] . ">" . $tipo['Nome'] . "</option>";
                    }
                    ?>
                </select>
                <br><br>

                <select name="sexo"> 
                    <option value="0">--------</option>
                    <?php
                    include_once '../business/SexoBl.php';
                    $sexoBl = new SexoBl();
                    foreach ($sexoBl->GetAll() as $tipo) {
                        print "<option value=" . $tipo['Id'] . ">" . $tipo['Nome'] . "</option>";
                    }
                    ?>
                </select>
                <br><br>
                Descrição<br>
                <textarea name="descricao"  rows="4" cols="50"></textarea><br><br>


                <input type="submit" value="Gravar">
            </fieldset>
        </form>


    </body>
</html>
