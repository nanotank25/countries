<?php 
$collection = R::findCollection( 'countries', ' ORDER BY id ASC ' ); //Весь список
while( $item = $collection->next() ) { //Менее затратный вывод записей ?>

<div class="media">
	<a class="pull-left" href="#">
		<img class="media-object" src="<?php echo htmlspecialchars($item->url);?>" style="width: 100px">
	</a>
	<div class="media-body">
		<h4 class="media-heading"><?php echo htmlspecialchars($item->name); ?></h4>
		<b>Население:</b> <?php echo htmlspecialchars($item->population); ?><br>
		<b>Описание:</b> <?php echo htmlspecialchars($item->description); ?><br>
	</div>
</div>
<br>
<?php }  ?>