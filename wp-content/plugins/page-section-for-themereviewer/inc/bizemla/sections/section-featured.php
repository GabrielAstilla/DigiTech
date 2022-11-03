<?php
if ( ! function_exists( 'bizemla_section_info_activate' ) ) :
	function bizemla_section_info_activate(){
		$sections = array();
		$featured_section = apply_filters('bizemla_section', $sections);

		$quantity  = get_theme_mod( 'featured_section_number', 3 );
		?>
			<div class="featured-section_data">
			    <div id="featured-section" class="featured-section section">
					<div class="card-container featured_content">
					<?php for ( $i = 1; $i <= $quantity ; $i++ ) { ?>
						<?php if(!empty(get_theme_mod( 'features_one_icon'.$i, $featured_section['featured_section']['icon'][$i-1])) || !empty(get_theme_mod( 'featured_section_title_'.$i, $featured_section['featured_section']['title'][$i-1])) || !empty(get_theme_mod( 'featured_section_description_'.$i,$featured_section['featured_section']['description'][$i-1]))){
						?>
						<div class="card section-featured-wrep"> 
							<div class="thumbnail_featured_section">
								<div class="side featured-thumbnail">
									<?php
									if(!empty(get_theme_mod( 'features_one_icon'.$i, $featured_section['featured_section']['icon'][$i-1]))){
										?>
										<div class="featured-icon"> 
											<i class="<?php echo esc_attr(get_theme_mod( 'features_one_icon'.$i, $featured_section['featured_section']['icon'][$i-1]))?>"></i>
										</div>
										<?php
									} 
									?>						
									<div class="featured-title"> 
										<?php if(!empty(get_theme_mod( 'featured_section_title_'.$i,$featured_section['featured_section']['title'][$i-1]))){ ?>
											<header class="entry-header">
												<h4>
													<?php echo esc_attr(get_theme_mod( 'featured_section_title_'.$i ,$featured_section['featured_section']['title'][$i-1])); ?>
												</h4>
											</header>
										<?php } ?>
									</div>
								</div>
								<div class="side back featured-thumbnail">
									<div class="thumbnail_featured_back">
										<?php
										if(!empty(get_theme_mod( 'features_one_icon'.$i,  $featured_section['featured_section']['icon'][$i-1]))){
											?>
											<div class="featured-iconf"> 
												<i class="<?php echo esc_attr(get_theme_mod( 'features_one_icon'.$i, $featured_section['featured_section']['icon'][$i-1]))?>"></i>
											</div>
											<?php
										} 
										?>						
										<div class="featured-titlef"> 
											<?php if(!empty(get_theme_mod( 'featured_section_title_'.$i,$featured_section['featured_section']['title'][$i-1]))){ ?>
												<header class="entry-header">
													<h4>
														<?php echo esc_attr(get_theme_mod( 'featured_section_title_'.$i ,$featured_section['featured_section']['title'][$i-1])); ?>
													</h4>
												</header>
											<?php } ?>
										</div>
										<?php if(!empty(get_theme_mod( 'featured_section_description_'.$i, $featured_section['featured_section']['description'][$i-1]))){ ?>
											<div class="entry-content">
												<?php echo esc_attr(get_theme_mod( 'featured_section_description_'.$i, $featured_section['featured_section']['description'][$i-1] )); ?>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php } } ?>
					</div>
				</div>
			</div>
	<?php
	}
endif;
