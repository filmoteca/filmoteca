<?php
if (!isset($fieldTitle)) {
	$fieldTitle = 'título';
}
if (!isset($extraClass)) {
	$extraClass = '';
}
?>
<?php foreach ($items as $item): ?>
	<li class="item category<?php echo $item['Item']['shop_category_id'] . ' ' . $extraClass; ?>">
		<div class="wrapper-item">
			<?php
			$imageUrl = strtolower($model) . 's' . DS . 'thumbnail_' . $item[$model]['id'] . '.jpg';
			$cartUrl = array(
				'controller' => 'items',
				'action' => 'addToCart',
				$item['Item']['id']
			);
			$detailUrl = array(
				'controller' => strtolower($model) . 's',
				'action' => 'detail',
				$item[$model]['id']);
			
			if (file_exists(WWW_ROOT . 'img' . DS . $imageUrl)) {
				echo $this->Html->image($imageUrl, array('alt' => 'Detalles'));
			}else{
				echo $this->Html->image('/assets/imgs/no-photo.jpg', array('alt' => 'Detalles'));
			}

			echo $this->Html->link(
					$item[$model][$fieldTitle], 
					$detailUrl, 
					array(
						'class' => 'fancybox.ajax slayer shop',
						'escape' => false))
			?>
			<div class="wrapper-name-item">
			<h5><?php echo $item[$model][$fieldTitle] ?></h5>
			</div>
			<div class="wrapper-price"><p>Precio General: <?php echo $item['Item']['precio_general'] ?></p>
			<p>Precio UNAM: <?php echo $item['Item']['precio_especial'] ?></p>
			</div>

			<?php
			echo $this->Html->link(
					'Comprar', $cartUrl, array(
				'class' => 'buy btn btn-success',
				'alt' => 'comprar'
			));
			?>
		</div>
	</li>
<?php endforeach ?>
