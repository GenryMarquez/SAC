<!-- Main content -->
<section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Visualizacion de Grupos de la Aplicacion') ?></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title"><?= __('Datos del Grupo') ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                           
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Nombre') ?></label>
                                                    <div class="form-control"><?= h($group->name_grupos) ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Titulo') ?></label>
                                                    <div class="form-control"><?= h($group->titulo_grupos) ?></div>
                                                </div>
                                            </div>
                                        </div>
                                              
                                    </fieldset>
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                          <h3 class="box-title"><?= __('Relacion de Usuarios') ?></h3>
                        </div>
                        <div class="mailbox-controls">
                            <div class="pull-right-g">
                              <div class="btn-group">
                                <?php echo $this->Form->input('Search', array('type'=>'text','id'=>'filter','label'=>false, 'class'=>'form-control','placeholder'=>'Search')); ?>
                                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                              </div>
                              <!-- /.btn-group -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-hover table-condensed" data-filter="#filter" data-page-size="4">
                                <thead class="thead-inverse">
                                    <tr>
                                      <th data-toggle="true">#</th>
                                      <th>Usuario</th>
                                      <th>Correo</th>
                                      <th data-hide="phone"><em class="fa fa-cog"></em>&nbsp;Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>  
                            <?php $i = 1; ?>
                            <?php foreach ($group->users as $users): ?> 
                                <tr>
                                    <td><?= $this->Number->format($i++) ?></td>
                                    <td><?= h($users->username) ?></td>
                                    <td><?= h($users->email_usuario) ?></td>
                                    <td class="footable-editing">
                                        <div role="group" class="btn-group">
                                            <?= $this->Html->link(__(''), ['controller'=>'Users','action' => 'view', $hashids->encode($users->id)],['class'=>'btn btn-default btn-sm fa fa-eye','title'=>'Ver']) ?>
                                            <?= $this->Html->link(__(''), ['controller'=>'Users','action' => 'edit', $hashids->encode($users->id)],['class'=>'btn btn-default btn-sm fa fa-pencil','title'=>'Editar']) ?>
                                            <?= $this->Form->postLink(__('<div class="btn btn-default btn-sm fa fa-trash-o" title="Eliminar"></div>'), ['controller'=>'Users','action' => 'delete', $hashids->encode($users->id)], ['escape'   => false,'confirm' => __('Estas seguro que quieres borrar [ {0} ] ?', $users->name)]) ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">
                                            <nav class="paginations pagination-centered"></nav>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="mailbox-controls">
                <div class="btn-group">
                  <?= $this->Html->link(__('    Listar'), ['action' => 'index'],['class'=>'btn btn-default btn-lg fa fa-list','title'=>'Listar']) ?>
                </div>
                <!-- /.btn-group -->
                <div class="pull-right">
                    <div class="btn-group">
                        <?php echo $this->Html->link(' Agrgar', ['controller'=>'Users','action' => 'add'], ['class'=>'btn btn-default btn-lg fa fa-plus','title'=>'Agregar'] )?>
                    </div>
                    <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
            </div>
        </div>
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->
