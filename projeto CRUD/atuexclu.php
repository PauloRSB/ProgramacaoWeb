<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="css/simple-sidebar.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-notify.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    function confirmacao (){
            $.notify({
                message: 'Cadastro Alterado'
            },{
                type: 'success'
            });
            return true    
        }
    </script>
    
</head>
<body>
    <div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"> Menu </div>
      <div class="list-group list-group-flush">
        <a href="index.html" class="list-group-item list-group-item-action bg-light">Cadastro</a>
        <a href="pesquisar.html" class="list-group-item list-group-item-action bg-light">Pesquisar</a>
        <a href="atuexclu.php" class="list-group-item list-group-item-action bg-light">Atualizar e Excluir</a>
      </div>
    </div>
    
        <div id="page-content-wrapper" class="text-center">
        <h1 class="text-center">Atualizar e Excluir</h1>
        <br><br>
            <section>
                <?php
                include("tabela.php");
                ?>
                    <table class="table table-striped">
                    <tr>
                    <th width="10%">ID</th>
                    <th>Nome</th>
                    <th width="16%">Data de Nascimento</th>
                    <th width="15%">Data registro</th>
                    <th width="15%"></th>
                    <th width="10%"></th>
                    </tr>
                    <?php do{ ?>
                    <tr>
                    <form method="post" action="alterar.php" onsubmit="return confirmacao()">
                    <td><input type="hidden" name="id2" id=id2 value="<?=$linha['Id']?>"><?=$linha['Id']?></td>
                    <td><input type="text" name="nome" id=nome class="form-control text-center" value="<?=$linha['Nome']?>"></td>
                    <td>
                    <script type="text/javascript">
                    $ (document).ready(function(){
                        $('#data').mask('00/00/0000');
                    });
                    </script>    
                    <input type="text" name="data" id=data class="form-control text-center" value="<?=$linha['DataNasc']?>">
                    </td>
                    <td><?=$linha['DataHora']?></td>
                    <td><input class="btn btn-primary" type="submit" name="alterar" value="Alterar"></td>
                    </form>
                    <form method="post" action="excluir.php">
                    <td>
                    <input type="hidden" name="id" id=id value="<?=$linha['Id']?>">    
                    <input class="btn btn-danger" type="submit" name="excluir" value="Excluir"></td> 
                    </form>
                    </tr>
                    <?php
                    // finaliza o loop que vai mostrar os dados
                    }while($linha = mysqli_fetch_assoc($dados));
                    ?>
                    </table>     
            </section>
        </div>
    </div>
</body>
</html>