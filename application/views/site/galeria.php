<div class="site-wrap galeria">

<div class="swiper-container gallery-top" >
	<div class="swiper-wrapper" >

	<?php foreach($fotos as $foto): ?>
	<div class="swiper-slide cover " data-swiper-autoplay="30000" style="background-image: url('<?= base_url("assets/uploads/files/$foto->foto")?>');">
	  <a href="<?= base_url("assets/uploads/files/$foto->foto")?>" data-fancybox="gallery" class="zoom"><span class="icon-search fa-lg"></span></a>
	  <div class="img-info">
	    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
	    <div class="img-info-content">
	      <h2><?= $foto->titulo; ?></h2>
	      <div class="scrollbar-inner style-scrollbar-sm js-scrollbar-container">
	        <p class="mb-0"><?= $foto->descricao; ?></p>
	      </div>
	    </div>
	  </div>
	</div>
	<?php endforeach; ?>
	
	</div>

	<div class="swiper-button-next swiper-button-white"></div>
	<div class="swiper-button-prev swiper-button-white"></div>
</div>


<div class="swiper-container gallery-thumbs">
	<div class="swiper-wrapper">
		<?php foreach($fotos as $foto): ?>
			<div class="swiper-slide cover" style="background-image:url(<?= base_url("assets/uploads/files/$foto->foto")?>)"></div>
		<?php endforeach; ?>
	</div>
</div>

</div>