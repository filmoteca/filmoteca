<div id="presentation" class="presentation">
	<ul>
		<?php foreach( $seats as $seat ):?>
			<?php $seat = $seat['Seat']?>
			<li>
				<div class="info">
					<h2><?php echo $seat['title'] ?></h2>
					<p><?php echo $seat['place'] ?></p>
					<p><?php echo $seat['seat_date']?></p>
				</div>
				<?php 
					echo $this->Html->link(
							$this->Html->image($seat['image']),
							$seat['link'],
							array('escape' => false)) ?>
			</li>
		<?php endforeach ?>
	</ul>
	<div class="controls">
		<?php 

			for( $i = 0 ; $i < count($seats); $i++ )
			{
				echo $this->Html->link(
						$this->Html->image(
							$seats[$i]['Seat']['image'],
							array('class' => 'thumbnail')),
						'#',
						array(
							'data-index' => $i, 
							'escape' => false));
			}

		?>
	</div>
</div>