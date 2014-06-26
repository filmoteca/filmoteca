<h4 class="billboard-title">Programación</h4>
<span class="billboard-date">
	<?php 
		if (isset($time) )
		{
			printf(
				'del %s de %s de %s',
				date('d', $time),
				__( date('F', $time) ),
				date('Y', $time));
		}else{

			printf(
				'del %s al %s de %s de %s',
				$this->Time->format($monday, '%d'),
				$this->Time->format($sunday, '%d'),
				__( date('F') ),
				date('Y'));
		}
	?>
</span>
<div class="screen">
	<div class="next"></div>
	<div class="prev"></div>
	<div class="sections">
		<ul>
			<?php if( count($exhibitions) == 0):?>
				<li>
					<?php echo $this->Html->image('/assets/imgs/no-exhibitions.jpg');?>
				</li>
			<?php endif?>
			<?php foreach ($exhibitions as $exhibition): ?>
				<li>
					<?php

					$img = '/assets/imgs/no-photo.jpg';

					if (file_exists(
							WWW_ROOT . DS . 'img' . DS . 'films/thumbnail_' . $exhibition['Exhibition']['film_id'] . '.jpg')){
						$img = 'films/thumbnail_' . $exhibition['Exhibition']['film_id'] . '.jpg';
					}

					echo $this->Html->link(
							$this->Html->image($img), 
							array(
								'controller' => 'exhibitions',
								'action' => 'detail',
								$exhibition['Exhibition']['id']), array('title' => $exhibition['Film']['título'], 'escape' => false));
					?>
					<p class="ver-mas">
						<?php
						echo $this->Html->link('Ver detalles', array(
							'controller' => 'exhibitions',
							'action' => 'detail',
							$exhibition['Exhibition']['id']));
						?>
					</p>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>