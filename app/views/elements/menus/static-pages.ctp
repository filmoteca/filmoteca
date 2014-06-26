<?php if( !isset( $selected )) $selected = 0 ?>

<div class="static-pages-menu">
	<ul>
	<?php foreach($menu as $key => $value): ?>
		<li class="<?php echo ( isset($value[2]) && !empty($value[2]))? "has-sub": ""?>">
			<a href="<?php echo $value[1]?>" class="<?php echo ($key == $selected)? 'selected': '' ?>">
				<span><?php echo $value[0] ?></span>
			</a>
			<?php if( isset($value[2]) &&
						!empty($value[2])):?>
				<ul>					
					<li class="last">
						<a href="<?php echo $value[2][1]?>">
							<span><?php echo $value[2][0] ?></span>							
						</a>
					</li>
				</ul>
			<?php endif?>
		</li>
	<?php endforeach ?>
	</ul>
</div>