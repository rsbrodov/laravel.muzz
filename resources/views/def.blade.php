
<br><br><br>
<div class="container">
	<form action="/image/upload" method="POST" enctype="multipart/form-data">
		@csrf<!--скрытое поле с токеном без него ниче не сработает-->
			<input type="file" name="image">
			<button type="submit" class="btn btn-success">Загрузить</button>
		
	</form>
	
</div>
