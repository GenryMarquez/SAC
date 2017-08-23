<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><?= __('Grupos') ?></h3>
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
                    <table class="table table-hover table-condensed" data-filter="#filter" data-page-size="8">
                      <thead class="thead-inverse">
                        <tr>
                          <th data-toggle="true">#</th>
                          <th>Nombre</th>
                          <th>Titulo</th>
                          <th data-hide="phone"><em class="fa fa-cog"></em>&nbsp;Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php $i = 1 ?>    
                    <?php foreach ($groups as $group): ?> 
                        <tr>
                            <td><?= $this->Number->format($i++) ?></td>
                            <td><?= h($group->name_grupos) ?></td>
                            <td><?= h($group->titulo_grupos) ?></td>
                            <td class="footable-editing">
                                <div role="group" class="btn-group">
                                    <?= $this->Html->link(__(''), ['action' => 'view', $hashids->encode($group->id)],['class'=>'btn btn-default btn-sm fa fa-eye','title'=>'Ver']) ?>
                                    <?= $this->Html->link(__(''), ['action' => 'edit', $hashids->encode($group->id)],['class'=>'btn btn-default btn-sm fa fa-pencil','title'=>'Editar']) ?>
                                    <?= $this->Html->link(__(''), ['action' => 'permission', $hashids->encode($group->id)],['class'=>'btn btn-default btn-sm fa fa-unlock','title'=>'Permisos']) ?>
                                    <?= $this->Form->postLink(__('<div class="btn btn-default btn-sm fa fa-trash-o" title="Eliminar"></div>'), ['action' => 'delete', $hashids->encode($group->id)], ['escape'   => false,'confirm' => __('Are you sure you want to delete # {0}?', $group->name_grupos)]) ?>
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
                <div class="box-footer no-padding">
                  <div class="mailbox-controls">
                    <div class="pull-right-g">
                      <div class="btn-group">
                         <?php echo $this->Html->link(' Nuevo', ['action' => 'add'], ['class'=>'btn btn-default btn-lg fa fa-file','title'=>'Nuevo'] )?>
                      </div>
                      <!-- /.btn-group -->
                    </div>
                    <!-- /.pull-right -->
                  </div>
                </div>
            </div>
          <!-- /. box -->
        </div>
    <!-- /.col -->
    </div>
     <!-- /.row -->
</section>
<!-- /.content -->