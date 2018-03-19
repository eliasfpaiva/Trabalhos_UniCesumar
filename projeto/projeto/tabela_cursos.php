

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Banco de Dados</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div id="wrapper">        
        <div id="page-wrapper" style="margin-left:0px">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            Relatório de Usuários
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Assuntos</th>
                                            <th>Curso</th>
                                            <th>-</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include '../includes/conexao.php';


                                            $sqlUsuarios = "select * from usuario order by nome ASC";
                                            $consulta = mysqli_query($conexao, $sqlUsuarios);
                                            while($linha = mysqli_fetch_array($consulta)){
                                                $idCurso = (int) $linha['curso'];
                                                $sql2 = "select * from curso where id = $idCurso";
                                                $consulta2 = mysqli_query($conexao, $sql2);
                                                $nomeCurso = mysqli_fetch_array($consulta2);
                                        ?>
                                        <tr>
                                            <td><?php echo $linha['id'] ?></td>
                                            <td><?php echo $linha['nome'] ?></td>
                                            <td><?php echo $linha['email'] ?></td>
                                            <td><?php echo $linha['assuntos'] ?></td>
                                            <td><?php echo $nomeCurso['nome'] ?></td>
                                            <td>
                                                <a href="./usuario.php?id=<?php echo $linha['id']?>">Editar</a>
                                                <br />
                                                <a href="./usuario_excluir.php?id=<?php echo $linha['id']?>">Excluir</a></td>
                                        </tr>
                                        <?php
                                            } // fim do while
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>