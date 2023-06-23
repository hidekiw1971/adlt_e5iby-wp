<!-- function -->
<form action="<?php echo home_url('/'); ?>" method="get" class="search">
    <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="キーワードを入力">
    <i class="bi bi-search"></i>
</form>
<!-- /function -->