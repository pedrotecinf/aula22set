<?php
/**
 * Created by PhpStorm.

 * Date: 15/09/16
 * Time: 08:31
 */
include("conexao.php");



// if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_nome = $_POST['nome'];
    $_sexo = $_POST['sexo'];
    $_cpf = $_POST['cpf'];
    $_rg = $_POST['rg_numero'];
    $_rg_Org_expedidor = $_POST['rg_Org_expedidor'];
    $_rg_data_emissao = $_POST['rg_data_emissao'];
    $_email = $_POST['email'];
    $_telefone = $_POST['telefone'];
    $id=$_POST['id'];

//}
    /*if(!empty($_POST['id'])){
          // include('update.php');
        $sql ="UPDATE aula22set SET nome=:_nome WHERE id= :id";
        $update= $conn->prepare($sql);

        $update->bindParam(':_nome',$_nome);

        $resultado=$update->execute();


        if($resultado){
        echo "Registro atualizado com sucesso!";
    }   else{
        echo "Ocorreu erro ao atualizar";
        }

    }else {*/


    $sql="INSERT INTO aula22set (nome, sexo, cpf, rg, RG_Org_expedidor, RG_data_emissao, Email, telefone)  VALUES(:_nome, :_sexo, :_cpf, :_rg, :_rg_Org_expedidor,:_rg_data_emissao,:_email, :_telefone)";


    $stmt  = $conn->prepare($sql);

    $stmt->bindParam(':_nome',$_nome);
    $stmt->bindParam(':_sexo',$_sexo);
    $stmt->bindParam(':_cpf',$_cpf);
    $stmt->bindParam(':_rg',$_rg);
    $stmt->bindParam(':_rg_Org_expedidor',$_rg_Org_expedidor);
    $stmt->bindParam(':_rg_data_emissao',$_rg_data_emissao);
    $stmt->bindParam(':_email',$_email);
    $stmt->bindParam(':_telefone',$_telefone);


    $result=$stmt->execute();




    if( ! $result)
    {
        var_dump($stmt->errorInfo());
        exit;

    }
    echo $stmt->rowCount()."linhas inseridas";

// $sql= "select * from Cadastro_P_Fisica ";

//}

    header('location:index.php');
?>
