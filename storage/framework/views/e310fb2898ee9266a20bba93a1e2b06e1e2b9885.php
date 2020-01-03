<style type="text/css">
	.custom-img{
	    border-radius: 24px;
		height: 43px;
	}
</style>
<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body app-home">
	<div class="row">
		<div class="col-md-2">
			<input type="date" class="form-control" name="">
		</div>
		<div class="col-md-5">
			<div class="md-form active-pink active-pink-2 mb-3 mt-0">
			  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
			</div>
		</div>
		<div class="col-md-3">
			<select class="form-control group">
				<option value="0">All Group</option>
				<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
				<option value="<?php echo e($group->id); ?>"><?php echo e($group->group_name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>				
	</div>


	<table class="table table-resonsive table-striped table-bordered" style="margin-top: 10px;">
	  <thead>
	    <tr>	     
	      <th scope="col">Group Name</th>
	      <th scope="col">Group Type</th>
	      <th scope="col">Account Name</th>
	      <th scope="col">Post Text</th>
	      <th scope="col">Time</th>	      
	    </tr>
	  </thead>
	  <tbody>

	  <div class="append-div">
	  	<span class="span-display">
	  		<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	    
		    <tr>   
		      <th scope="row"><?php echo e($group->group_name); ?></th>     
		      <th scope="row"><?php echo e($group->group_type); ?></th>  
		      <th scope="row">
		      	<img src="<?php echo e($group->avatar); ?>" class="custom-img">
		      </th>     
		      <th scope="row"><?php echo e($group->post_text); ?></th> 	       
		      <th scope="row"><?php echo e($group->created_at); ?></th>     
		    </tr>	    
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  	</span>	  	
	  </div>	  
	  </tbody>
</table>
<?php echo e($groups->links()); ?>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>