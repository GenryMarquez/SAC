<!-- Main content -->
<section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Visualizacion de Usuarios de la Aplicacion') ?></h3>

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
                          <h3 class="box-title"><?= __('Datos del Usuario') ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textinput"><?= __('Usuario') ?></label>
                                                            <div class="form-control"><?= h($user->email_usuario) ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textinput"><?= __('Password') ?></label>
                                                            <div class="form-control"><?= h($user->password) ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textinput"><?= __('Grupo') ?></label>
                                                            <div class="form-control"><?= h($user->group->name_grupos) ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textinput"><?= __('Correo') ?></label>
                                                            <div class="form-control"><?= h($user->email_usuario) ?></div>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
  
                                        </div><!-- /.row -->
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
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="mailbox-controls">
                <div class="btn-group">
                  <?= $this->Html->link(__('    Listar'), ['action' => 'index'],['class'=>'btn btn-default btn-lg fa fa-list','title'=>'Listar']) ?>
                </div>
                <!-- /.btn-group -->
            </div>
        </div>
    </div>
    <!-- /.box -->
</section>