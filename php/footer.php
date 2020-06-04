
<pre><code>Proudly powered by <a href="https://oldpc.mrcyjanek.net/" target="_blank">OldPC</a>, made by <a href="https://mrcyjanek.net" target="_blank">Czarek Nakamoto</a></code></pre>
<?php
    // Class name of the plugin
//    $className = 'pluginRSS';

//    if (pluginActivated($className)) {
//        echo '<a href="'. DOMAIN .'/rss.xml" target="_blank">rss</a> &ndash;';
//    }
?>

<!-- Pagination -->
<?php if (($url->whereAmI() == 'home') && Paginator::numberOfPages() > 1): ?>
<nav style="float:left;">
    <!-- Previous button -->
    <?php if (Paginator::showPrev()): ?>
      <a href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1"><?php echo $Language->get('Previous'); ?></a>
    <?php endif; // Paginator::showPrev() ?>

    <?php if (Paginator::showPrev() && Paginator::showNext()): ?>
      &mdash;
    <?php endif; // Paginator::showPrev() ?>

    <!-- Next button -->
    <?php if (Paginator::showNext()): ?>
      <a href="<?php echo Paginator::nextPageUrl() ?>" tabindex="-1"><?php echo $Language->get('Next'); ?></a>
    <?php endif; // Paginator::showPrev() ?>
</nav>
<?php endif ?>
