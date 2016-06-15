<!DOCTYPE html>

<script language="javascript">
    function calculate()
    {   
        var nascimento = document.getElementsByName('nascimento');
        var date = nascimento[0].value;
        var born = new Date(date);
        var today = new Date();
        var age = today.getFullYear() - born.getFullYear();
        document.getElementById('idade').value =  age;
    }
</script>


<html>
    <head>
        <title>Sistema Hospitalar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <form action="PacienteAction.php" name="formpaciente" method="post">
            <fieldset>
                <legend>Cadastro de Paciente</legend>

                Documento:<br>
                <input type="text" name="documento" required><br><br>

                Nome:<br>
                <input type="text" name="nome" required><br><br>

                Peso:<br>
                <input type="text" name="peso" required min="0" max="350"><br><br>

                Altura:<br>
                <input type="text" name="altura" required min="1" max="220"><br><br>

                Nascimento:<br>
                <input type="date" name="nascimento" required onblur="calculate()"><br><br>
                
                Idade:<br>
                <input type="text" name="idade" id="idade" readonly="true"><br><br>
                

                Grupo sanguíneo<br>
                <select required name="tiposanguineo" > 
                    <option value="">--------</option>
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

                <select required name="sexo"> 
                    <option value="">--------</option>
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


                <input type="submit" value="Gravar"> <input type="reset" value="Limpar">
            </fieldset>
        </form>


    </body>
</html>
