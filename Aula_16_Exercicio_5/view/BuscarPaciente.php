<html>

    <head>

    </head>

    <body>


        <form action="" method="post">

            <tr>
                <td>Nome\Documento</td>
                <td> <input type="text" name="filtro">  </td>
                <td>
                    <select name="opcion">
                        <option value="Iniciado">Iniciado</option>
                        <option value="Contendo">Contendo</option>
                    </select>
                </td>
                <td> <input type="submit"  value="Buscar" >  </td>
            </tr>
        </form>

        <table border="1" style="width:100%">
            <tr>
                <td>Nome</td>
                <td>Documento</td>
                <td>Sexo</td>
                <td>Alterar</td>
                <td>Informações</td>
                <td>Delete</td>
            </tr>


            <?php
            
            include_once '../business/PacientesBl.php';

            if (isset($_POST['opcion']) && isset($_POST['filtro'])) {
                $pacienteBl = new PacientesBl();
                $filtro = $_POST['filtro'];
                $opcion = $_POST['opcion'];
                $result = $pacienteBl->GetListaPacientes($filtro, $opcion);

                foreach ($result as $res) {
                    echo "<tr>";
                    echo "<td>{$res['Nome']}</td>";
                    echo "<td>{$res['Documento']}</td>";
                    echo "<td>{$res['NomeSexo']}</td>";                    
                    echo "<td><a href='PacienteAlterar.php?Id={$res['Id']}'>Alterar</a></td>";
                    echo "<td><a href='PacienteInfo.php?Id={$res['Id']}'>Info</a></td>";
                    echo "<td><a href='PacienteDelete.php?Id={$res['Id']}'>Delete</a></td>";
                    echo "</tr>";
                }
            }
            ?>

        </table>

        <a href="Paciente.php"> Cadastrar Paciente </a>
    </body>

</html>