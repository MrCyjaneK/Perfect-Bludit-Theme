<article>
    <?php Theme::plugins('pageBegin'); ?>
    <h2 class="title"><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></h2>
    <?php if (!$page->isStatic() && !$url->notFound()): ?>
             <?php if ($page->category()):?> | <a href="<?php echo DOMAIN_CATEGORIES.$page->categoryKey() ?>"><?php echo $page->category() ?></a>
         <?php endif?>
    <?php endif ?>
    <?php echo $page->content(); ?>
    <?php Theme::plugins('pageEnd'); ?>
</article>
