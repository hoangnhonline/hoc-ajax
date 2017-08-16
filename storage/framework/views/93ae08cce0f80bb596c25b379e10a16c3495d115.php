<option value="">-Chon-</option>
<?php $__currentLoopData = $districtList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<option value="<?php echo $district->id; ?>"><?php echo $district->name; ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>