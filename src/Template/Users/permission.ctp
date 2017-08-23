<!-- Main content -->
<section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Permisos del Usuario  '."<span class='text-light-blue'>".$user->username."</span>") ?></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">

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
								<table class="table table-hover table-condensed">
				                  <tbody>
				                  	<?php $permisosflag; ?>
				                  	<?php foreach ($child[$cod] as $idhijo => $hijoalias): ?>
										<tr>
											<td class="mailbox-name"><?= $hijoalias ?></td>
										<?php if(!$permiso[$idhijo]) { ?>
											<?php $permisosflag = 0; ?>
											<td class="mailbox-subject texto">Este Grupo no tiene permisos</td>
											<td id='enviar' class="mailbox-date">
												<i alt="<?='key='.$user->id.'&key2='.$nodopadre."/".$hijoalias.'&key3='.$permisosflag ?>" class="fa fa-fw fa-remove fa-3x tilde" style="display:inline;"></i>
												<i class="fa fa-spinner fa-pulse fa-2x fa-fw cargador" style="display:none;"></i>
												<span class="sr-only">Loading...</span>
											</td>
										<?php } else { ?>
											<?php $permisosflag = 1; ?>
											<td class="mailbox-subject texto">Este Grupo tiene permisos</td>
											<td id='enviar' class="mailbox-date">
												<i alt="<?='key='.$user->id.'&key2='.$nodopadre."/".$hijoalias.'&key3='.$permisosflag ?>" class="fa fa-fw fa-check fa-3x tilde" style="display:inline;"></i>
												<i class="fa fa-spinner fa-pulse fa-2x fa-fw cargador" style="display:none;"></i>
												<span class="sr-only">Loading...</span>
											</td>
										<?php } ?>	
										</tr>
									<?php endforeach; ?>	
				                  </tbody>
				                </table>
							</div>
						</div>
						
						<?php endforeach; ?>
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








