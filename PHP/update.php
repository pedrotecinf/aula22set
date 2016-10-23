<?php
/**
 * Created by PhpStorm.
 * User: anony
 * Date: 21/09/16
 * Time: 13:34
 */

include("conexao.php");


    $_id =$_POST['id'];
    $_nome =filter_var( $_POST['nome']);
    $_sexo =filter_var( $_POST['sexo']);
    $_cpf = filter_var($_POST['cpf']);
    $_rg = filter_var($_POST['rg_numero']);
    $_rg_Org_expedidor = filter_var($_POST['rg_Org_expedidor']);
    $_rg_data_emissao = filter_var($_POST['rg_data_emissao']);
    $_email =filter_var( $_POST['email']);
    $_telefone = filter_var($_POST['telefone']);


    echo $_id, $_nome;
    $sql=
        "UPDATE aula22set SET  nome = :_nome, sexo =  :_sexo, cpf = :_cpf, rg = :_rg, RG_Org_expedidor = :_rg_Org_expedidor,  RG_data_emissao = :_rg_data_emissao, email = :_email, telefone = :_telefone WHERE id = :_id";
    $update= $conn->prepare($sql);

    $update->bindParam(':_id',$_id);
    $update->bindParam(':_nome',$_nome);
    $update->bindParam(':_sexo',$_sexo);
    $update->bindParam(':_cpf',$_cpf);
    $update->bindParam(':_rg',$_rg);
    $update->bindParam(':_rg_Org_expedidor',$_rg_Org_expedidor);
    $update->bindParam(':_rg_data_emissao',$_rg_data_emissao);
    $update->bindParam(':_email',$_email);
    $update->bindParam(':_telefone',$_telefone);

    $resultado=$update->execute();


if( ! $resultado)
{   echo "erro ao atualizar";
    var_dump($update->errorInfo());
    exit;

}
echo "Sucesso ao atualizar";

   header('location:index.php');





