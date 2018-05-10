<?php include ('base/bd.php'); ?>
<html lang="ru">
<head>
	<meta charset="utf-8"><!-- Кодировка веб-страницы -->
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/style.css" >
	<title>INTERVOLGA Test</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="cardInfo">
					<h4><b>Добавить страну</b></h4><br>
					<div id="result_div_id"> 
					</div>
					<form method="POST" action="/" id="form_id">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
							<input type="text" class="form-control" name="name" maxlength="128"placeholder="Страна">
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" class="form-control" name="population" maxlength="11" placeholder="Население">
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-edit"></span></span>
							<input type="text" class="form-control" name="description" maxlength="256" placeholder="Описание">
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></span>
							<input type="text" class="form-control" name="url" maxlength="256" placeholder="Фото Ссылка">
						</div>
					</form>

					<button type="button" class="btns" id="loading-example-btn" data-loading-text="Loading..."  onclick="AjaxFormRequest('result_div_id', 'form_id', 'add.php')"><span class="glyphicon glyphicon-plus"></span> Добавить</button>	
				</div>
			</div>
			<div class="col-md-6">
				<div class="cardInfo">
					<h4><b>Список стран</b></h4><br>
					<?php include "list.php";?>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">

	function AjaxFormRequest(result_id,form_id,url) {
		jQuery.ajax({
                    url:     url, //Адрес подгружаемой страницы
                    type:     "POST", //Тип запроса
                    dataType: "html", //Тип данных
                    data: jQuery("#"+form_id).serialize(), 
                    success: function(response) { //Если все нормально
                    	document.getElementById(result_id).innerHTML = response;
                    	jQuery('#form_id')[0];
                    },
                error: function(response) { //Если ошибка
                	document.getElementById(result_id).innerHTML = "Ошибка при отправке";
                }
            });
	}		
</script>
<script>
	$('#loading-example-btn').click(function () { //Анимация Кнопки при долгом запросе
		var btn = $(this)
		btn.button('loading')
		$.ajax().always(function () {
			btn.button('reset')
		});
	});
</script>
</html>