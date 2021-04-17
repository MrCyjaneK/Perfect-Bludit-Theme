<!-- Pagination -->
<?php if (($url->whereAmI() == 'home') && Paginator::numberOfPages() > 1): ?>
<nav>
    <!-- Previous button -->
    <?php if (Paginator::showPrev()): ?>
        <a style="float:left;" href="/<?php echo Paginator::previousPageUrl() ?>" tabindex="-1"> <-- Précédent </a>
    <?php else: ?>
        <span style="float:left;"> <-- Précédent </span>
    <?php endif; ?>

    <!-- Next button -->
    <?php if (Paginator::showNext()): ?>
        <a style="float:right;" href="/<?php echo Paginator::nextPageUrl() ?>" tabindex="-1"> Suivant --> </a>
    <?php else: ?>
        <span style="float:right;"> Suivant --> </span>
    <?php endif; ?>
</nav>
<br />
<?php endif ?>

