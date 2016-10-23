<?php
/**
 * Created by PhpStorm.
 * User: anony
 * Date: 22/09/16
 * Time: 16:09
 */

include('conexao.php');

if(empty($_GET['id'])){

    header('location:index.php');
}else{

    $id=$_GET['id'];


    $sql="DELETE FROM aula22set WHERE id = :id";
    $update= $conn->prepare($sql);
    $update->bindParam(':id',$id);
    $resultado= $update->execute();
    header('location:index.php');


}