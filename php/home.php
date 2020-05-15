<pre><code><?php if ($site->slogan()): ?><h1><?php echo ucfirst($url->slug()); ?></h1><?php
$description = $site->description();
if ($WHERE_AM_I == 'category') {
    try {
        $categoryKey = $url->slug();
        $category = new Category($categoryKey);
        $description = $category->description();
    } catch (Exception $e) {
        print_r($e);
        // description from the site
    }
}
echo $description; ?><?php endif; ?><?php foreach ($content as $page): ?><article><?php Theme::plugins('pageBegin'); // Load Bludit Plugins: Page Begin ?>
<h2><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></h2><small><?php echo $page->date(); ?></small> | <?php if ($page->category()):?><a href="<?php echo DOMAIN_CATEGORIES.$page->categoryKey() ?>" rel="tag"><?php echo $page->category() ?></a>
<?php endif?>
<?php
if(strlen($page->description())>0 ){
    echo  $page->description();
} else {
    $max = 333;
    $all = explode(' ', substr($page->content(false), 0, $max));
    array_pop($all);
    echo implode(' ', $all);
    if (strlen($page->content(false)) > $max) {
        echo "... ";
    }
}
?><a href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?></a><?php Theme::plugins('pageEnd'); ?></article><hr /><?php endforeach; ?></code></pre>
