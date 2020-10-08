<?php
$slider = new Slider();
$list = $slider->getAllNoLimit();

?>


<div class="slider-area">
	<!-- Slider -->
	<div class="block-slider block-slider4">
		<ul class="" id="bxslider-home4">
			<?php
			foreach ($list as $r) {
			?>
				<li>
					<img  src="<?php echo 'admin/slider/uploads/' . $r['img'] ?>" alt="Slide">
					
				</li>
			<?php
			}
			?>
		</ul>
	</div>
	<!-- ./Slider -->
</div> <!-- End slider area -->
