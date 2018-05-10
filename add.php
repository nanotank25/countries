<?php include ('base/bd.php'); 
$name = htmlspecialchars($_POST['name']);  //Страна
$population = htmlspecialchars($_POST['population']); //Население
$description = htmlspecialchars($_POST['description']); //Описание
$url = htmlspecialchars($_POST['url']); //Фото Ссылка

if (!empty($name)) {

	if (!empty($population) and is_numeric($population)) {

		if (!empty($description)) {

			if (!empty($url)) {

				$book = R::findOrCreate( 'countries', [
					'name' => $name, 
					'population' => $population,
					'description' => $description,
					'url' => $url] );

				echo "<div class=\"alert alert-success alert-dismissable\">\n"; 
				echo "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>\n"; 
				echo "  <strong>Отлично!</strong> Новая страна ".$name." была добавлена.\n"; 
				echo "</div>\n"; 

			} else {
				echo "<div class=\"alert alert-warning alert-dismissable\">\n"; 
				echo "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>\n"; 
				echo "  <strong>Внимание!</strong> Строка Фото Ссылка пустая, заполните ее и попробуйте снова отправить форму\n"; 
				echo "</div>\n"; 
			}

		} else {
			echo "<div class=\"alert alert-warning alert-dismissable\">\n"; 
			echo "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>\n"; 
			echo "  <strong>Внимание!</strong> Строка Описание пустая, заполните ее и попробуйте снова отправить форму\n"; 
			echo "</div>\n"; 
		}

	} else {
		echo "<div class=\"alert alert-warning alert-dismissable\">\n"; 
		echo "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>\n"; 
		echo "  <strong>Внимание!</strong> Строка Население пустая или содержит буквы, обновите ее и попробуйте снова отправить форму\n"; 
		echo "</div>\n"; 
	}

} else {
	echo "<div class=\"alert alert-warning alert-dismissable\">\n"; 
	echo "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>\n"; 
	echo "  <strong>Внимание!</strong> Строка Страна пустая, заполните ее и попробуйте снова отправить форму\n"; 
	echo "</div>\n"; 
}
?>
