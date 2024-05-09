<?php
add_action('product_gallery_hook', 'product_gallery_hook_fn');
function product_gallery_hook_fn()
{
    $gallery = get_field('gallery_sec');
    if (!empty($gallery)) { ?>
        <section class="main_galle_sec make_header-light">
            <div class="container">
                <div class="main_row_new">
                    <div class="sub-left">
                        <?php if(stripos($gallery[0],'.mp4') !== false){ ?>
                        <a href="<?php echo $gallery[0]; ?>" class="images_gallery" data-fancybox="estate_images">
                            <video>
                              <source src="<?php echo $gallery[0]; ?>" type="video/mp4">
                              <source src="<?php echo $gallery[0]; ?>" type="video/ogg">
                            </video>
                        </a>
                       <?php }else{ ?>
                        <a href="<?php echo $gallery[0]; ?>" class="images_gallery" data-fancybox="estate_images">
                            <img src="<?php echo $gallery[0]; ?>" alt="img">
                        </a>
                    <?php } ?>
                    </div>
                    <div class="sub-right">
                        <?php
                        foreach ($gallery as $key => $image) {
                            if(stripos($image,'.mp4') !== false){
                                 ?><a href="<?= $image; ?>" class="images_gallery" data-fancybox="estate_images">
                                <video>
                                  <source src="<?= $image; ?>" type="video/mp4">
                                  <source src="<?= $image; ?>" type="video/ogg">
                                </video>
                            </a>
                        <?php
                            }else{ 
                        ?><a href="<?= $image; ?>" class="images_gallery" data-fancybox="estate_images">
                                <img src="<?= $image; ?>" alt="img">
                            </a>
                        <?php }
                        }
                        ?>
                        <div class="see-all-btn">
                            <a id="show-all-img" href="javascript:void(0);">View All Photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><?php
                }
            }


            add_action('product_features_hook', 'product_features_hook_fn');
            function product_features_hook_fn()
            { ?>
    <section class="page_det_new make_header-light">
        <div class="container">
            <div class="main_det_con">
                <div class="main_con_det_left">
                    <div class="tit_con-top">
                        <div class="sub_tit_box">
                            <h3 class="sub_tit"><?= get_field('tag_line_title'); ?></h3>
                        </div>
                    </div>
                    <div class="features-and-ameneties">
                        <div class="features">
                            <h3>Features</h3>
                            <div class="room_det">
                                <?php
                                $features = get_field('features');
                                foreach ($features as $feature) { ?>
                                    <div class="ro_in_det">
                                        <div class="im_main">
                                            <?php
                                            if (!empty($feature['icon'])) { ?>
                                                <img src="<?= $feature['icon']; ?>" alt="img">
                                            <?php }
                                            ?>
                                        </div>
                                        <div class="main_con_in">
                                            <p><?= $feature['feature_title'] ?? ''; ?></p>
                                            <p><?= $feature['feature_description'] ?? ''; ?></p>
                                        </div>
                                    </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                        <div class="ameneties">
                            <h3>Amenities</h3>
                            <div class="ro_det_min">
                                <?php
                                $term_tags = get_the_terms(get_the_ID(), 'product_tag');
                                foreach ($term_tags as $term_tag) {
                                ?>
                                    <div class="room_bx">
                                        <div class="ro_det_img">
                                            <img src="<?= get_field("icon", "product_tag_" . $term_tag->term_id); ?>" alt="img">
                                        </div>
                                        <div class="bed_con">
                                            <p><?= $term_tag->name; ?></p>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="about_det">
                        <?php the_content(); ?>
                        <div class="buttons-container">
                            <?php
                            if (!empty(get_field('notes'))) {
                                $notes = get_field('notes');
                                foreach ($notes as $note) { ?>
                                    <a href="<?= $note['link']['url'] ?? 'javascript:void(0);'; ?>"><?= $note['link']['title'] ?? ''; ?></a>
                            <?php }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
            }
