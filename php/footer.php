<!-- Pagination -->
<?php if (($url->whereAmI() == 'home') && Paginator::numberOfPages() > 1): ?>
<nav>
    <!-- Previous button -->
    <?php if (Paginator::showPrev()): ?>
        <a style="font-size:120%;" href="<?php echo Paginator::previousPageUrl() ?>" title="après" tabindex="-1">☼</a>
    <?php else: ?>
        <span style="font-size:120%;"> </span>
    <?php endif; ?>

    <!-- Next button -->
    <?php if (Paginator::showNext()): ?>
        <a style="font-size:150%;" href="<?php echo Paginator::nextPageUrl() ?>" title="avant" tabindex="-1">☽</a>
    <?php else: ?>
        <span style="font-size:150%;"> </span>
    <?php endif; ?>
</nav>
<br />
<?php endif ?>

