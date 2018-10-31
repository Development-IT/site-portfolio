<!DOCTYPE html>
<html>
<head>
	<title>Отправить заявку</title>
	<meta name="Description" content="Отправить заявку"/>
	<meta name="Keywords" content="отправить заявку"/>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="text-title">
			<p>Отправить заявку на приобретение нашей продукции</p>
			</div>
		</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
		<div class="col-md-5">
			<a href="img/foto/01.jpg" data-lightbox="image-1" data-title="Мои фотографии"><img src="/img/foto/01.jpg" width="80%" alt="" class="main-foto"></a>
			<div class="botton-gallery">
			<a href="img/foto/02.jpg" data-lightbox="image-1" data-title="Мои фотографии"><img src="/img/foto/prev-02.jpg" width="80%" height="80%" alt=""></a>
			<a href="img/foto/03.jpg" data-lightbox="image-1" data-title="Мои фотографии"><img src="/img/foto/prev-03.jpg" width="80%" height="80%" alt=""></a>
			<a href="img/foto/04.jpg" data-lightbox="image-1" data-title="Мои фотографии"><img src="/img/foto/prev-04.jpg" width="80%" height="80%" alt=""></a>
			<a href="img/foto/05.jpg" data-lightbox="image-1" data-title="Мои фотографии"><img src="/img/foto/prev-05.jpg" width="80%" height="80%" alt=""></a>
			<a href="img/foto/06.jpg" data-lightbox="image-1" data-title="Мои фотографии"><img src="/img/foto/prev-06.jpg" width="80%" height="80%" alt=""></a>
			</div>
		</div>
		<div class="col-md-7">
			<div class="head-content">
					<h1>О нашей продукции:</h1>
				<hr>	
			<p>Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци.</p> 
			<p>Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци. Описание нашей продукци.</p>
			<h2>Параметры продукции:</h2>
			<hr>
			<p>
			Дополнительная информация о продукции. Дополнительная информация о продукции. Дополнительная информация о продукции. Дополнительная информация о продукции. 
			</p>
			</div>
		</div>
	</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="head-forma">
				<form method="POST" class="block-form" enctype="multipart/form-data" action="/site-file/send.php">
				<input type="hidden" value="Отправить заявку">

			<div class="block-form-label"><label>Имя: <span class="required" title="Обязательное поле">*</span></label></div>

			<div class="block-form-input"><input class="form-field" type="text" id="name" value="" placeholder="Как вас зовут?" name="formname" required=""></div>

			<div class="block-form-label"><label for="phone">Телефон: </label></div>

			<div class="block-form-input"><input class="form-field contacts" type="tel" id="phone" value="" placeholder="Ваш телефон?" name="formphone"></div>

			<div class="block-form-label"><label for="email">E-mail:</label></div>

			<div class="block-form-input"><input class="form-field contacts" type="email" id="email" value="" placeholder="Для тех, у кого нет телефона" name="formemail" ></div>
			
			<div class="block-form-label"><label>Ваш сайт:</label></div>

			<div class="block-form-input"><input class="form-field" type="url" value="" placeholder="Ссылка на ваш сайт" name="formsocial"></div>

			<div class="block-form-label"><label>Файл заявки:<span class="required" title="Обязательное поле">*</span></label></div>
			 
			<input type="hidden" name="MAX_FILE_SIZE" value="100000000">
			<input type="file" name="photo[]" multiple accept="image/*" required="">

			<div class="block-form-label"><label>Дополнительная информация о заявке:</label></div>

			<div class="block-form-textarea"><textarea class="form-field-textarea" placeholder="Всё что вы хотели сообщить дополнительно" name="formabout"></textarea></div>

			<input class="block-form-submit" type="submit" name="submit" value="Отправить">
			<p>Поля отмеченные <span class="required">*</span> обязательны для заполнения.</p>
			</form>
		</div>
		</div>
		</div>
	</div>
</body>
</html>