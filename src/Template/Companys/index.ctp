<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Configurador de la Empresa</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-hover table-condensed" data-filter="#filter" data-page-size="8">
                      <thead class="thead-inverse">
                        <tr>
                            <th data-toggle="true"><?= __('#') ?></th>
                            <th data-hide="phone"><?= __('Rif') ?></th>
                            <th data-hide="phone,tablet"><?= __('Rason Social') ?></th>
                            <th data-hide="phone,tablet"><?= __('Nombre Comercial') ?></th>
                            <th data-hide="phone,tablet"><?= __('Telefono') ?></th>
                          <th data-hide="phone"><em class="fa fa-cog"></em>&nbsp;Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php $i = 1 ?>    
                    <?php foreach ($companys as $company): ?> 
                        <tr>
                            <td><?= $this->Number->format($i++) ?></td>
                            <td><?= h($company->taxid1) ?></td>
                            <td><?= h($company->name_fiscal) ?></td>
                            <td><?= h($company->tradename) ?></td>
                            <td><?= h($company->phone) ?></td>
                            <td class="footable-editing">
                                <div role="group" class="btn-group">
                                    <?= $this->Html->link(__(''), ['action' => 'view', $hashids->encode($company->id)],['class'=>'btn btn-default btn-sm fa fa-eye','title'=>'Ver']) ?>
                                    <?= $this->Html->link(__(''), ['action' => 'edit', $hashids->encode($company->id)],['class'=>'btn btn-default btn-sm fa fa-pencil','title'=>'Editar']) ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>    
                      </tbody>
                    </table>
                </div>
                <!-- /.box-body -->

            </div>
          <!-- /. box -->
        </div>
    <!-- /.col -->
    </div>
     <!-- /.row -->
</section>
<!-- /.content -->