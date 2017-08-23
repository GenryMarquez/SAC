<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><?= __('Permisos') ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
 					<div class="table-responsive mailbox-messages">
		              <div class="box-group" id="accordion">
		              <?php $i = 0; $j = 0;?>
						<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
						<?php foreach ($parents AS $cod => $nodopadre) :	?>
							
						<div class="panel box box-primary">
							<div class="box-header with-border">
								<h4 class="box-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $i=$i+1 ?>">
										<?= $nodopadre; ?>
									</a>
								</h4>
							</div>
							<div id="collapse<?= $j=$j+1 ?>" class="panel-collapse collapse">
								<table class="table table-hover table-striped">
				                  <tbody>
				                  	<?php foreach ($child[$cod] as $idhijo => $hijoalias): ?>
										<tr>
											<td class="mailbox-name"><?= $nodopadre; ?></td>
											<td class="mailbox-subject"><?= $hijoalias ?></td>
											<td class="mailbox-date"><?= $this->Html->link(__(''), ['action' => 'edit', $hashids->encode($idhijo)],['class'=>'btn btn-default btn-sm fa fa-pencil','title'=>'Editar']) ?></td>
										</tr>
									<?php endforeach; ?>	
				                  </tbody>
				                </table>
								
							</div>
						</div>
						<?php endforeach; ?>

						</div>	
		            </div>
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