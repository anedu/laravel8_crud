<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Посты</title>
</head>
<body>
	<div>
		<form action="/insert" method="POST">
			@csrf
			<input type="text" name="title" placeholder="Заголовок">
			<input type="text" name="text" placeholder="Текст">
			<button type="submit">Создать</button>
		</form>
	</div>
	@foreach($posts as $post)
	<div>
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->text }}</p>
		<p><span style="font-weight: bold;">ID: </span>{{ $post->id }}</p>
		<div>
			<form action="/delete" method="POST">
				@csrf
				<?php echo '<input type="text" name="id" value="' . $post->id . '">'; ?>
				<button>Удалить</button>
			</form>			
		</div>
		<div>
			<form action="/update" method="POST">
				@csrf
				<?= '<input type="text" name="title" value="' . $post->title . '">'; ?>
				<?= '<input type="text" name="text" value="' . $post->text . '">'; ?>
				<?= '<input type="text" name="id" value="' . $post->id . '">'; ?>
				<button type="submit">Обновить</button>
			</form>
		</div>
	</div>
	@endforeach
	<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
	<script>
		
	</script>
</body>
</html>