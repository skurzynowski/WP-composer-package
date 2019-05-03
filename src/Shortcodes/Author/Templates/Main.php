<section class="about">
  <article class="about-article">
	<header>
	  <h2 class="title">
		<?php the_field( 'title', 'option' ); ?>
	  </h2>
	</header>
	<main>
	  <div class="img-container">
		<img src="<?php echo get_field( 'img', 'option' )['sizes']['medium']; ?>" alt="">
	  </div>
	  <div class="text-container">
		<h3 class="name"><?php the_field( 'name', 'option' ); ?></h3>
		<h4 class="profession"><?php the_field( 'profession', 'option' ); ?></h3>
		<div class="description" ><?php the_field( 'description', 'option' ); ?></div>
	  </div>
	</main>
  </article>
</section>
