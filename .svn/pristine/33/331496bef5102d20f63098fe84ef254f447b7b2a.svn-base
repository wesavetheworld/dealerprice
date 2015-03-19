<?php
if(isset($reviews))
foreach($reviews as $review)
{ ?>
<li>
<article class="review">
	<ul class="review-rates">
		<li class="v_centered">
		<?php $rating = round($review->rating); ?>
		<ul class="rating">
			<li class="<?=$rating>=1 ? 'active': ''?>"></li>
			<li class="<?=$rating>=2 ? 'active': ''?>"></li>
			<li class="<?=$rating>=3 ? 'active': ''?>"></li>
			<li class="<?=$rating>=4 ? 'active': ''?>"></li>
			<li class="<?=$rating>=5 ? 'active': ''?>"></li>
		</ul>
		</li>
	</ul>

	<div class="review-body">

		<div class="review-meta">
			
			<h5 class="bold">
			<?php 
			if($rating == 5)
				echo 'Excelent';
			else if($rating == 4)
				echo 'Good';
			else if($rating == 3)
				echo 'Fare';
			else if($rating <=2)
				echo 'Bad';
			?>
			</h5>
			
			Review by <a href="#" class="bold"><?=$review->reviewer_name?></a> on <?=date('d/m/Y', $review->posted)?>

		</div>

		<p><?=$review->review?></p>

	</div>

</article>
</li>
<?php } ?>