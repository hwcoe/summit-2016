				<div id="image-nav" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

					<?php if ( is_active_sidebar( 'image-nav' ) ) : ?>

						<?php dynamic_sidebar( 'image-nav' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

					<?php endif; ?>

				</div>
