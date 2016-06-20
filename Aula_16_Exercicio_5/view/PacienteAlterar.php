<?php
if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    include_once '../business/PacientesBl.php';
    $pacienteBl = new PacientesBl();
    $result = $pacienteBl->GetPaciente($id);
}
?>

<html>
    <head>
        <title>Sistema Hospitalar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <form action="PacienteAlterarAction.php" name="formpaciente" method="post">
            <fieldset>
                <legend>Alterar Paciente</legend>

                Id:<br>
                <input type="text" name="id" value="<?php echo $result[0]['Id'] ?>" required readonly="true"><br><br>
                
                
                Documento:<br>                
                <input type="text" name="documento" value="<?php echo $result[0]['Documento'] ?>" required><br><br>

                Nome:<br>
                <input type="text" name="nome" value="<?php echo $result[0]['Nome'] ?>" required><br><br>

                Peso:<br>
                <input type="text" name="peso"  value="<?php echo $result[0]['Peso'] ?>" required min="0" max="350"><br><br>

                Altura:<br>
                <input type="text" name="altura" value="<?php echo $result[0]['Altura'] ?>" required min="1" max="220"><br><br>

                Nascimento:<br>
                <input type="date" name="nascimento"  value="<?php echo $result[0]['Nascimento'] ?>"  required onblur="calculate()"><br><br>
                    

                Grupo sanguíneo<br>
                <select required name="tiposanguineo" id="tiposanguineo" >                     
                    <?php                    
                    include_once '../business/TipoSanguineoBl.php';
                    $tipoSanguineoBl = new TipoSanguineoBl();
                    foreach ($tipoSanguineoBl->GetAll() as $tipo) {
                        print "<option value=" . $tipo['Id'];  
                        if ($result[0]['IdTipoSanguineo'] == $tipo['Id']) {
                            print "selected";
                        }
                        print  ">";
                        print $tipo['Nome'];                         
                        print "  </option>";
                    }
                    ?>
                </select>
                <br><br>
                
                <select required name="sexo" id="sexo"> 
                    <?php
                    include_once '../business/SexoBl.php';
                    $sexoBl = new SexoBl();
                    foreach ($sexoBl->GetAll() as $tipo) {
                        print "<option value=" . $tipo['Id'];  
                        if ($result[0]['IdSexo'] == $tipo['Id']) {
                            print "selected";
                        }
                        print  ">";
                        print $tipo['Nome'];                         
                        print "  </option>";
                    }
                    ?>
                </select>
                <br><br>
                Descrição<br>
                <textarea name="descricao"  rows="4" cols="50"><?php echo $result[0]['Descricao'] ?></textarea><br><br>
                <input type="submit" value="Gravar">
            </fieldset>
        </form>


    </body>
</html>
