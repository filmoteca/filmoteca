<div class="noticias_h3">
	<h3>Noticias en corto</h3>
</div>
<div class="news_content">

	<?php foreach($news as $value): ?>
		<?php $new = $value['News'] ?>

		<div class="last_news_element">
			<div class="last_news_img">
				<?php 
					echo $this->Html->link(
							$this->Html->image(
								'/assets/imgs/camara_accion.png', 
								array(
									'alt' => 'Cine cámara, acción',
									'title' => 'Curso Cine cámara, acción')),
							array(
								'controller' => 'news',
								'action' => 'detail',
								$new['id']),
							array('escape' => false))
				?>
			</div>
			<div class="last_news_content">
				<div class="last_news_titulo">
					<?php
						echo $this->Html->link(
							$new['title'],
							array(
								'controller' => 'news',
								'action' => 'detail',
								$new['id']))
					?>
				</div>
				<div class="last_news_data">
					<div>
					<?php 
						echo $this->Time->format('h:m - d ', $new['created_at']);
						echo __($this->Time->format('F', $new['created_at']));
						echo $this->Time->format(' Y', $new['created_at']);

					?>
					</div>
					<div class="clearer"></div>
				</div>
				<div class="last_news_text">
					<?php 
						echo $this->Text->autoParagraph(
								$this->Text->truncate($new['body']))?>
				</div>
				<div class="mas_info">
					<?php
						echo $this->Html->link(
								'Más información',
								array(
									'controller' => 'news',
									'action' => 'detail',
									$new['id']))
					?>
				</div>
			</div>
		</div>
	<?php endforeach?>
</div>