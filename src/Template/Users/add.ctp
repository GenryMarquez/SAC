<!-- Main content -->
<section class="content">
<?= $this->Form->create($user) ?>
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Definicion de Usuarios de la Aplicacion') ?></h3>

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
                                                            <?= $this->Form->input('username', ['label' => false, 'class'=>'form-control','placeholder'=>'Usuario']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textinput"><?= __('Password') ?></label>
                                                            <?= $this->Form->input('password', ['label' => false, 'class'=>'form-control','placeholder'=>'Password']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textinput"><?= __('Grupo') ?></label>
                                                            <?= $this->Form->input('group_id',['label'=>false,'class'=>'form-control','placeholder'=>'Enter ...',['options' => $groups]]);?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="textinput"><?= __('Correo') ?></label>
                                                            <?= $this->Form->input('email_usuario', ['label' => false, 'class'=>'form-control','placeholder'=>'Correo']); ?>
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
                <div class="pull-right">
                    <div class="btn-group">
                        <?= $this->Form->button('   Guardar',['class' => 'btn btn-default btn-lg fa fa-save','div'=>false,'title'=>'Guardar']) ?>
                    </div>
                    <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
            </div>
        </div>
    </div>
    <!-- /.box -->
<?= $this->Form->end() ?>
</section>
