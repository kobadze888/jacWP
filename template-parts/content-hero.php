<section class="hero-slider">
    <?php 
    if( have_rows('hero_slider') ): 
        $slide_index = 0;
        while( have_rows('hero_slider') ): the_row(); 
            $bg_type = get_sub_field('bg_type'); // 'image' ან 'video'
            $video_link = get_sub_field('video_url');
            $uploaded_image = get_sub_field('image_url');
            $external_image_link = get_sub_field('image_url_source');
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            $btn_text = get_sub_field('btn_text');
            $btn_link = get_sub_field('btn_link');
            $active_class = ($slide_index === 0) ? 'active' : '';

            $final_image_url = !empty($external_image_link) ? $external_image_link : (is_array($uploaded_image) ? $uploaded_image['url'] : $uploaded_image);
            $bg_style = ($bg_type == 'image') ? 'style="background-image: url(' . esc_url($final_image_url) . ');"' : '';
    ?>
        <div class="slide <?php echo $active_class; ?> slide-<?php echo $bg_type; ?>" <?php echo $bg_style; ?>>
            <?php if($bg_type == 'video' && !empty($video_link)): ?>
                <video class="bg-video" autoplay muted loop playsinline>
                    <source src="<?php echo esc_url($video_link); ?>" type="video/mp4">
                </video>
            <?php endif; ?>
            <div class="hero-content">
                <?php if($title): ?><h1 class="hero-title"><?php echo $title; ?></h1><?php endif; ?>
                <?php if($subtitle): ?><p class="hero-subtitle"><?php echo $subtitle; ?></p><?php endif; ?>
                <?php if($btn_text && $btn_link): ?>
                    <a href="<?php echo esc_url($btn_link); ?>" class="btn-white-pill"><?php echo $btn_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
    <?php $slide_index++; endwhile; endif; ?>

    <div class="slider-indicators">
        <?php if( have_rows('hero_slider') ):
            $slider_rows = get_field('hero_slider');
            $count = is_array($slider_rows) ? count($slider_rows) : 0;
            for($i = 0; $i < $count; $i++): ?>
                <div class="indicator-line <?php echo ($i === 0) ? 'active' : ''; ?>" onclick="manualSlide(<?php echo $i; ?>)">
                    <div class="indicator-progress"></div>
                </div>
        <?php endfor; endif; ?>
    </div>
</section>