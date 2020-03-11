<?php
	header("HTTP/1.0 404 Not Found");	
	require "variable/title.php";
	$title = "$error_404_Title";
	$description = "$error_404_Description";
	require "header.php";			
?>

<section class="page-not-found py-60">
	<div class="container py-90">
		<div class="row py-90">
			<div class="col-md-8 offset-md-2 text-center py-90">
				<div class="not-found">
					<h1>404 ошибка</h1>
					<p>Извините. Запрашиваемая страница не найдена!<br>Перейти на <a href="/"><u>главную страницу</u></a></p><br>
				</div>
			</div>
		</div>
	</div>
</section>

<?php	
	require "footer.php";
?>