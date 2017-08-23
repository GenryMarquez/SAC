<!-- Main content -->
<section class="content">
<?= $this->Form->create($company) ?>
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Configurador de la Empresa') ?></h3>

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
                          <h3 class="box-title"><?= __('Datos de la Empresa') ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                           
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('RIF') ?></label>
                                                    <?php echo $this->Form->input('taxid1', array('label' => false, 'class'=>'form-control','placeholder'=>'RIF')); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('NIT') ?></label>
                                                    <?php echo $this->Form->input('taxid2', array('label' => false, 'class'=>'form-control','placeholder'=>'NIT')); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Rason Social') ?></label>
                                                    <?php echo $this->Form->input('name_fiscal', array('label' => false, 'class'=>'form-control','placeholder'=>'Rason Social')); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Nombre Comercial') ?></label>
                                                    <?php echo $this->Form->input('tradename', array('label' => false, 'class'=>'form-control','placeholder'=>'Nombre Comercial')); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Telefono') ?></label>
                                                    <?php echo $this->Form->input('phone', array('label' => false, 'class'=>'form-control','placeholder'=>'Telefono')); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Pais') ?></label>
                                                    <?php echo $this->Form->input('country', array('label' => false, 'class'=>'form-control','placeholder'=>'Pais')); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Estado') ?></label>
                                                    <?php echo $this->Form->input('region', array('label' => false, 'class'=>'form-control','placeholder'=>'Estado')); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Ciudad') ?></label>
                                                    <?php echo $this->Form->input('city', array('label' => false, 'class'=>'form-control','placeholder'=>'Ciudad')); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Correo') ?></label>
                                                    <?php echo $this->Form->input('email', array('label' => false, 'class'=>'form-control','placeholder'=>'Correo')); ?>
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
                          <h3 class="box-title"><?= __('Extras de la Empresa') ?></h3>
                        </div>
                        <div class="box-body">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#tab_1" data-toggle="tab">Api SMS</a></li>
                              <!--<li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
                              <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>-->
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane active" id="tab_1">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="textinput"><?= __('Dato[1]') ?></label>
                                        <?php //echo $this->Form->input('apism.data1', array('label' => false, 'class'=>'form-control','placeholder'=>'Dato[1]')); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="textinput"><?= __('Dato[2]') ?></label>
                                        <?php //echo $this->Form->input('apism.data2', array('label' => false, 'class'=>'form-control','placeholder'=>'Dato[2]')); ?>
                                    </div>
                                </div>
                                </div>
                              </div>
                              <!-- /.tab-pane -->
                              <!--<div class="tab-pane" id="tab_2">
                            
                              </div>
                              <div class="tab-pane" id="tab_3">
                              </div>-->
                            </div>
                            <!-- /.tab-content -->
                            </div>
                            <!-- nav-tabs-custom -->
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
<!-- /.content -->
