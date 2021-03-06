<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header text-center success " >Funcionàrios</h3>
            </div>



            <!--Tablela simples -->
            <div class="row">
                <div class="col-lg-12">
                    <?php if (isset($atualizado)and $atualizado == 'sim') { ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                            <center> Funcionário Atualizado!</center>
                        </div>
                    <?php } ?>
                    <?php if (isset($deletado)and $deletado == 'sim') { ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                            <center> Fucionário Deletado!</center>
                        </div>
                    <?php } ?>

                    <div class="panel-heading">
                        <div class="search">

                            <a style="right: auto" class="btn btn-success" href="<?php echo base_url('index.php/funcionario/novo'); ?>"><i class="fa fa-plus-circle"></i> Adicionar</a>



                        </div>
                    </div>
                    <!-- /.panel-heading -->
                  <!--  <div class="table-responsive"> -->
                        <table width="100%" class="table table-striped table-bordered table-hover" id="lista_funcionarios">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>UF</th>
                                    <th>Cidade</th>
                                    <th>Bairro</th>
                                    <th>Rua</th>
                                    <th>Nº</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($funcionario)) {
                                    // var_dump($);
                                    foreach ($funcionario as $dfuncionario) {
                                        ?>
                                        <tr>
                                            <td><?php echo $dfuncionario->nome; ?></td> 
                                            <td><?php echo $dfuncionario->uf; ?></td>   
                                            <td><?php echo $dfuncionario->cidade; ?></td>
                                            <td><?php echo $dfuncionario->nm_bairro; ?></td>
                                            <td><?php echo $dfuncionario->nm_rua; ?></td>
                                            <td><?php echo $dfuncionario->rua; ?></td>
                                            <td><a href="<?php echo base_url('index.php/funcionario/editar/' . $dfuncionario->id_funcionario . '') ?>" title="Editar" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Editar</a>
                                            <td><a href="<?php echo base_url('index.php/funcionario/excluir/' . $dfuncionario->id_funcionario . '') ?>" title="Excluir" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a></td>
        <?php echo '</tr>';
    }
} ?>
                            </tbody>

                            <!-- aqui vai a parte da busca no banco de dados view_cliente -->

                        </table>

                   <!-- </div> -->
                    <!-- /.table-responsive -->
<?php //  echo "<div class='paginate_button'>".$links_paginacao."</div>"; ?>

                    <!-- /.panel-body -->


                    <!-- /.panel -->
                </div>

                <!--fim tabela-->
            </div>
            <!-- /.col-lg-12 -->
