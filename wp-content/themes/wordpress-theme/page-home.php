<?php /* template name: HOME */ ?>
<?php get_header();?>

  <?php
    
        $marketing_text=get_field('marketing_text');
        $marketing_list_1=get_field('marketing_list_1');
        $marketing_list_2=get_field('marketing_list_2');
        $marketing_list_3=get_field('marketing_list_3');
    
        $resources_text=get_field('resources_text');
        $resources_list_1=get_field('resources_list_1');
        $resources_list_2=get_field('resources_list_2');
        $resources_list_3=get_field('resources_list_3');
    
        $strategy_text=get_field('strategy_text');
        $strategy_list_1=get_field('strategy_list_1');
        $strategy_list_2=get_field('strategy_list_2');
        $strategy_list_3=get_field('strategy_list_3');

        $about_image_1=get_field('about_image_1');
        $about_image_2=get_field('about_image_2');
        $about_image_3=get_field('about_image_3');
        $about_image_4=get_field('about_image_4');
        $about_video=get_field('$about_video');

        $service_main_title=get_field('service_main_title');
        $service_main_text=get_field('service_main_text');

        $team_title=get_field('team_title');
        $team_text=get_field('team_text');
        
        $contact_title=get_field('contact_title');
        $contact_text=get_field('contact_text');
        $contact_code=get_field('contact_code');

        
    
    ?>


<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col">
				
				<div class="fh5co-2col-inner left">
						
						<div class="fh5co-tabs-container">
							<ul class="fh5co-tabs fh5co-three">
								<li class="active"><a href="#" data-tab="marketing">Marketing</a></li>
								<li><a href="#" data-tab="analysis">Resources</a></li>
								<li><a href="#" data-tab="strategy">Strategy</a></li>
							</ul>
							<div class="fh5co-tab-content active" data-tab-content="marketing">
								    <?php echo $marketing_text; ?>  
								<ul class="checked">
									<li><?php echo $marketing_list_1; ?></li>
									<li><?php echo $marketing_list_2; ?></li>
									<li><?php echo $marketing_list_3; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
							</div>

							<div class="fh5co-tab-content" data-tab-content="analysis">
								    <?php echo $resources_text; ?>
								<ul class="checked">
									<li><?php echo $resources_list_1; ?></li>
									<li><?php echo $resources_list_2; ?></li>
									<li><?php echo $resources_list_3; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
							</div>

							<div class="fh5co-tab-content" data-tab-content="strategy">
								    <?php echo $strategy_text; ?>
								<ul class="checked">
									<li><?php echo $strategy_list_1; ?></li>
									<li><?php echo $strategy_list_2; ?></li>
									<li><?php echo $strategy_list_3; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
							</div>

						</div>

				</div>

			</div>
    
    
    <!--- end about div-->
    
    
			<div class="fh5co-2col fh5co-text">
				<div class="fh5co-grid">
					<div class="fh5co-grid-item" style="background-image: url('<?php echo $about_image_1["url"];?>')"></div>
					<div class="fh5co-grid-item" style="background-image: url('<?php echo $about_image_2["url"];?>')"></div>
					<div class="fh5co-grid-item" style="background-image: url('<?php echo $about_image_3["url"];?>')"></div>
					<div class="fh5co-grid-item" style="background-image: url('<?php echo $about_image_4["url"];?>')"></div>
				</div>
			</div>
		</div>
    <!-- END about-images -->

		<div id="fh5co-services" data-section="services">
			<div class="fh5co-video"><a href="<?php echo $about_video ; ?>" class="popup-vimeo" class="popup-vimeo"><i class="icon-play2"></i></a></div>
            
			<div class="container">
                
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $service_main_title;?></h2>
					<p><?php echo $service_main_text;?></p>
				</div>
                
                <?php $loop=new WP_Query(array('post_type'=>'services','orderby'=>'post_id','order'=>'ASC')); ?>
                
                <?php while($loop->have_posts()):$loop->the_post(); ?>
                     
				<div class="col-md-4">
					<div class="service">
						<div class="icon"><i class="<?php the_field('service_icon');?>"></i></div>
						<h3><?php the_field('service _title');?></h3>
						<p><?php the_field('service_text');?></p>
					</div>
                </div>
                    <?php endwhile; wp_reset_query(); ?>   
				
                
				<div class="col-md-12 text-center"> 
					<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
				</div>

			 </div>

		  </div> <!-- END fh5co-services -->
		
            
		<div id="fh5co-gallery">
            
            <?php $loop=new WP_Query(array('post_type'=>'gallery','orderby'=>'post_id','order'=>'ASC')); ?>
            
            <?php while($loop->have_posts()):$loop->the_post(); ?>
            
            <?php
                
                $gimg=get_field('gallery_image');
            
            
            ?>
            
			<a href="<?php echo $gimg['url']?>" class="fh5co-item image-popup" style="background-image: url(<?php echo $gimg['url']?>)">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-copy">
					<div class="fh5co-copy-inner">
						<h2><?php the_field('gallery_title') ?></h2>
						<h3><?php the_field('gallery_text') ?></h3>
					</div>
				</div>
			</a>
			
            <?php endwhile; wp_reset_query(); ?>
            
		</div> <!-- END fh5co-gallery -->

            
            
		<div id="fh5co-team" data-section="team">
            
			<div class="container">
                
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php the_field('team_title')?></h2>
					<p><?php the_field('team_text')?></p>
				</div>
                
                <?php $loop=new WP_Query(array('post_type'=>'team','orderby'=>'post_id','order'=>'ASC')); ?>
                
                <?php while($loop->have_posts()) : $loop->the_post();?>
                
				<div class="col-md-4">
                    
                    <?php
                        $eimg=get_field('employee_image');
                    ?> 
                    
					<div class="person">
						<img src="<?php echo $eimg['url']; ?>" alt="" class="img-responsive">
						<h3><?php echo the_field('employee_name'); ?></h3>
						<h4><?php echo the_field('employee_job'); ?></h4>
						<p><?php echo the_field('job_description'); ?></p>
						<ul class="social">
							<li><a href="<?php echo the_field('employee_facebook'); ?>"><i class="icon-facebook"></i></a></li>
							<li><a href="<?php echo the_field('employee_twitter'); ?>"><i class="icon-twitter"></i></a></li>
							<li><a href="<?php echo the_field('employee_be'); ?>"><i class="icon-behance"></i></a></li>
							<li><a href="<?php echo the_field('employee_instagram'); ?>"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
                <?php endwhile;  wp_reset_query(); ?>
			</div>
            
            
		</div> <!-- END fh5co-team -->

		<div id="fh5co-contact" data-section="contact">
            
			<div class="container">
                
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $contact_title; ?></h2>
					<p><?php echo $contact_text; ?></p>
				</div>
                
				
					<div class="row">
                        
						<?php echo $contact_code; ?>
                        
					</div>
				
			</div>
            
		</div>

<?php get_footer();?>