
<!-- Main content -->
<section class="content">
  	<div class="row">
	    <!-- /.col -->
	    <div class="col-md-12">
	      	<div class="box box-primary">
		        <div class="box-header with-border">
		          <h3 class="box-title">Permisos</h3>

		          	<!--<div class="box-tools pull-right">
		                <div class="has-feedback">
		                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
		                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
		                </div>
		          	</div>-->
		          <!-- /.box-tools -->
		        </div>
		        <!-- /.box-header -->
		        <div class="box-body no-padding">
		          	<div class="mailbox-controls">
			            <!-- Check all button -->
			            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
			            </button>
			            <div class="btn-group">
			              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
			              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
			              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
			            </div>
			            <!-- /.btn-group -->
			            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
			            <div class="pull-right">
			              <div class="btn-group">
			                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
			                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
			              </div>
			              <!-- /.btn-group -->
			            </div>
			            <!-- /.pull-right -->
		          	</div>
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
				                  	<?php $permisosflag; ?>
				                  	<?php foreach ($child[$cod] as $idhijo => $hijoalias): ?>
										<tr>
											<td class="mailbox-name"><?= $hijoalias ?></td>
										<?php if(!$permiso[$idhijo]) { ?>
											<?php $permisosflag = 0; ?>
											<td class="mailbox-subject texto">Este Grupo no tiene permisos</td>
											<td id='enviar' class="mailbox-date">
												<i alt="<?='key='.$Groups->id.'&key2='.$nodopadre."/".$hijoalias.'&key3='.$permisosflag ?>" class="fa fa-fw fa-remove fa-3x tilde" style="display:inline;"></i>
												<i class="fa fa-spinner fa-pulse fa-2x fa-fw cargador" style="display:none;"></i>
												<span class="sr-only">Loading...</span>
											</td>
										<?php } else { ?>
											<?php $permisosflag = 1; ?>
											<td class="mailbox-subject texto">Este Grupo tiene permisos</td>
											<td id='enviar' class="mailbox-date">
												<i alt="<?='key='.$Groups->id.'&key2='.$nodopadre."/".$hijoalias.'&key3='.$permisosflag ?>" class="fa fa-fw fa-check fa-3x tilde" style="display:inline;"></i>
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
		          <!-- /.mail-box-messages -->
		        </div>
		        <!-- /.box-body -->
		        <div class="box-footer no-padding">
		          <div class="mailbox-controls">
		            <!-- Check all button -->
		            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
		            </button>
		            <div class="btn-group">
		              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
		              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
		              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
		            </div>
		            <!-- /.btn-group -->
		            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
		            <div class="pull-right">
		              1-50/200
		              <div class="btn-group">
		                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
		                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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




