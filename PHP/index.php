<?php
/**
 * Created by PhpStorm.
 * User: anonyx
 * Date: 15/09/16
 * Time: 08:01
 */
  include ('conexao.php');

$sql="select * from aula22set";
$consulta= $conn->prepare($sql);

$resultado= $consulta->execute();
$registros= $consulta->fetchall(PDO::FETCH_OBJ);


$editar=false;

if(!empty($_GET['id'])){
    $id = $_GET['id'];

    $sql="SELECT * FROM aula22set WHERE id = :id";
    $consulta= $conn->prepare($sql);
    $consulta->bindParam(':id', $id);

    $resultado= $consulta->execute();
    $registro= $consulta->fetch(PDO::FETCH_OBJ);


    if($consulta->rowCount()>0){
        $editar=true;
    }
}

 ?>
<!DOCTYPE HTML>
<html>
<head LANG="pt-br">
    <meta charset="utf-8">
    <title>CADASTRO PESSOA FÍSICA</title>
    <link REL="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css"  >
    <link href="../bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript">

</head>

<body>

    <div class="container">
        <div class="row">
            <h4 align="center" >FORMULARIO DE CASDASTRO PESSOA FÍSICA</h4>
        </div><!-- div row1-->

            <div class="row">

                <div class="col-md-1"> </div>

                <div class="col-md-10" >

                    <form class="form-horizontal" method="post" action="<?php if($editar){?>update.php<?php }else{?> cadastro.php <?php } ?>">

                         <div class="form-inline" >

                            <table class="table table-striped table table-hover ">
                            <tr>
                                <!-- <td>
                                //    <input type="checkbox" id="habilida_id" onclick="document.getElementById('id').disabled = !this.checked" >   Habilite para fazer um update
                                </td> -->
                                <td></td>
                                <td>
                                    <?php if($editar) { ?>
                                    ID: <input type="number" id="id" name="id"  readonly
                                    value="<?php echo $registro->id;   ?>" >
                                    <?php } ?>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="nome" placeholder="NOME" size="45"
                                           value="<?php if($editar) echo $registro->nome;   ?>">
                                </td>
                                <td>
                                    <select name="sexo">
                                        <option value="" selected DISABLED>SEXO</option>
                                        <option value="M" <?php  if($editar && $registro->sexo == "M") echo "selected";   ?>>Masculino</option>
                                        <option value="F" <?php  if($editar && $registro->sexo == "F") echo "selected";   ?>>Femenino</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="cpf" placeholder="CPF" SIZE="14"
                                           value="<?php if($editar) echo $registro->cpf;   ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    RG: <input type="number" name="rg_numero" placeholder="NUMERO"
                                               value="<?php if($editar) echo $registro->rg;   ?>">
                                </td>
                                <td>
                                    <input type="text"  name="rg_Org_expedidor" placeholder="Orgão expedidor"
                                           value="<?php if($editar) echo $registro->RG_Org_expedidor;   ?>">
                                </td>
                                <td>
                                    <input type="date"  name="rg_data_emissao" placeholder="Data de Emissao"
                                           value="<?php if($editar) echo $registro->RG_data_emissao;   ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="email" name="email" placeholder="email"
                                           value="<?php if($editar) echo $registro->email;   ?>">
                                </td>
                                <td>
                                    <input type="text" name="telefone" placeholder="TELEFONE"
                                           value="<?php if($editar) echo $registro->telefone;   ?>">
                                </td>
                                <td>

                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                        <input type="submit" class="btn btn-default">

                                </td>
                                <td></td>
                            </tr>
                            </table>
                            </div
                        </form>


                   <?php include('registro.php') ?>



                </div>
                <div class="col-md-1">

                </div>
        </div> <!-- class ROW -->
    </div> <!-- div container -->

</body>

</html>
