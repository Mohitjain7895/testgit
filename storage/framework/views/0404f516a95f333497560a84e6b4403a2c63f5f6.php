 



<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="<?php echo e(PREFIX); ?>"><i class="mdi mdi-home"></i></a> </li>
							<?php if(checkRole(getUserGrade(2))): ?>
							<li><a href="<?php echo e(URL_USERS); ?>"><?php echo e(getPhrase('users')); ?></a> </li>
							<li class="active"><?php echo e(isset($title) ? $title : ''); ?></li>
							<?php else: ?>
							<li class="active"><?php echo e(getphrase('change_password')); ?></li>
							<?php endif; ?>
						</ol>
					</div>
				</div>
					<?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<!-- /.row -->
				
	<div class="panel panel-custom col-lg-6 col-lg-offset-3">
					<div class="panel-heading">
					 	<h1><?php echo e($title); ?>  </h1>
					</div>


					<div class="panel-body form-auth-style">
					<?php $button_name = getPhrase('create'); ?>
					<?php if($record): ?>
					 <?php $button_name = getPhrase('update'); ?>
						<?php echo e(Form::model($record, 
						array('url' => ['users/change-password', $record->slug], 
						'method'=>'patch', 'novalidate'=>'', 'name'=>"changePassword"))); ?>

					<?php endif; ?>

					 <?php echo $__env->make('users.change-password.form_elements', array('button_name'=> $button_name, 'record' => $record), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
					 
					<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
	<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>