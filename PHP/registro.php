<h4>REGISTROS</h4>
<table class="table table-striped table table-hover table-responsive" >
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Sexo</td>
        <td>CPF</td>
        <td>RG</td>
        <td>Orgão expedidor</td>
        <td>Data Emissão</td>
        <td>Email</td>
        <td>Telefone</td>
        <td>Ações</td>
    </tr>

    <?php

    foreach ($registros as $registro){ ?>


        <tr>
            <td>
                <?php echo $registro->id; ?>
            </td>
            <td>
                <?php echo $registro->nome; ?>
            </td>
            <td>
                <?php echo $registro->sexo; ?>
            </td>
            <td>
                <?php echo $registro->cpf; ?>
            </td>
            <td>
                <?php echo $registro->rg; ?>
            </td>
            <td>
                <?php echo $registro->RG_Org_expedidor; ?>
            </td>
            <td>
                <?php echo $registro->RG_data_emissao; ?>
            </td>
            <td>
                <?php echo $registro->email; ?>
            </td>
            <td>
                <?php echo $registro->telefone; ?>
            </td>
            <td>
                <a href="index.php?id=<?php echo $registro->id; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $registro->id; ?>">excluir</a>


            </td>
        </tr>


        </tr>
    <?php } ?>
</table>