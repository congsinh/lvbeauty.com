
<!-- nav area start -->
<nav class="navbar navbar-area navbar-expand-lg has-topbar nav-style-01 dark
    <?php if(!empty($page_post->navbar_variant)): ?>
        <?php echo e($page_post->navbar_variant == 1 ||  $page_post->navbar_variant == 2 ||
        (request()->routeIs('frontend.dynamic.page') == false && $page_post->navbar_variant == 3) ? "nav-right-inline" : ""); ?>

    <?php else: ?>
        nav-right-inline
    <?php endif; ?>

    <?php if(!empty($page_post->navbar_variant)): ?>
        <?php if($page_post->navbar_variant == 5): ?>
            home-page-five-slider
        <?php endif; ?>
    <?php endif; ?>
    <?php if(isset($page_post->navbar_variant) && $page_post->navbar_variant == 1): ?>
        nav-style-01
    <?php elseif(isset($page_post->navbar_variant) && $page_post->navbar_variant == 2): ?>
        index-02 dark
    <?php elseif(isset($page_post->navbar_variant) && $page_post->navbar_variant == 3): ?>

        has-topbar new-nav-style-01 new-index-03
    <?php elseif(isset($page_post->navbar_variant) && $page_post->navbar_variant == 4): ?>
        has-topbar new-nav-style-01 new-index-04
    <?php elseif(isset($page_post->navbar_variant) && $page_post->navbar_variant == 5): ?>
        has-topbar new-nav-style-01 new-index-05
    <?php endif; ?>">

    <div class="container home-page-two-container new-nav-container custom-container-1410">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper">
                <a href="<?php echo e(route('homepage')); ?>" class="logo">
                    <?php if(!empty(filter_static_option_value('site_logo',$global_static_field_data))): ?>
                        <?php echo render_image_markup_by_attachment_id(filter_static_option_value('site_logo',$global_static_field_data)); ?>

                    <?php else: ?>
                        <h2 class="site-title"><?php echo e(filter_static_option_value('site_title',$global_static_field_data)); ?></h2>
                    <?php endif; ?>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
            <ul class="navbar-nav">
                <?php echo render_frontend_menu($primary_menu); ?>

            </ul>
        </div>







































































































    </div>
</nav>
<!-- navbar area end -->
<?php /**PATH F:\PHP\laragon\www\elitetailor\@core\resources\views/frontend/partials/navbar.blade.php ENDPATH**/ ?>