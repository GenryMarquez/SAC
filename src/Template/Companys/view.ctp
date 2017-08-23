<!-- Main content -->
<section class="content">
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
                                                    <div class="form-control"><?= h($company->taxid1) ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('NIT') ?></label>
                                                    <div class="form-control"><?= h($company->taxid2) ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Rason Social') ?></label>
                                                    <div class="form-control"><?= h($company->name_fiscal) ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Nombre Comercial') ?></label>
                                                    <div class="form-control"><?= h($company->tradename) ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Telefono') ?></label>
                                                    <div class="form-control"><?= h($company->phone) ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Pais') ?></label>
                                                    <div class="form-control"><?= h($company->country) ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Estado') ?></label>
                                                    <div class="form-control"><?= h($company->region) ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Ciudad') ?></label>
                                                    <div class="form-control"><?= h($company->city) ?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="textinput"><?= __('Correo') ?></label>
                                                    <div class="form-control"><?= h($company->email) ?></div>
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
                                        <div class="form-control"><?= h("DEMO") ?></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="textinput"><?= __('Dato[2]') ?></label>
                                        <div class="form-control"><?= h("DEMO") ?></div>
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
            </div>
        </div>
    </div>
    <!-- /.box -->
 
</section>
<!-- /.content -->


