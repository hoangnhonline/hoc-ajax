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
	@if($cityList)
		@foreach($cityList as $city)
			<option value="{!! $city->id !!}">{!! $city->name !!}</option>
		@endforeach
	@endif
</select>
<select name="district_id" id="district_id">
	<option value="">-Chon-</option>
	
</select>
<h1>My First Heading</h1>
<p>My first paragraph.</p>
<script type="text/javascript">
	$(document).ready(function(){
		$('#city_id').change(function(){
			alert('123');
		});
	});
</script>
</body>
</html>