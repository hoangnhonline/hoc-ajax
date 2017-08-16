<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>

</head>
<body>
<select name="city_id" id="city_id">
	<option value="">-Chon-</option>
	<?php if($cityList): ?>
		<?php $__currentLoopData = $cityList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo $city->id; ?>"><?php echo $city->name; ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
</select>
<select name="district_id" id="district_id">
	<option value="">-Chon-</option>
	
</select>
<h1>My First Heading</h1>
<p>My first paragraph.</p>
<script type="text/javascript">
	$(document).ready(function(){
		$('#city_id').change(function(){
			var city_id = $(this).val();
			$.ajax({
				url : '<?php echo e(route('get-child')); ?>',
				type : 'GET',
				data : {
					city_id : city_id
				},
				success : function(response){
					$('#district_id').html(response);
				}
			});
		});
	});
</script>
</body>
</html>