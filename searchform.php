<div class="search-container">
    <form id="search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
        <input type="text" class="input-search-top" value="<?php echo get_search_query(); ?>" placeholder="Search.."
            name="s">
        <p class="close-btn"><i class="fas fa-times"></i></p>
        <p class="search-button"><i class="fa fa-search"></i></p>
    </form>
</div>