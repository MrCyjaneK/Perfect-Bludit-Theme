<?php if ($site->slogan()): ?>
    <?php
    $description = $site->description();
    if ($WHERE_AM_I == 'category') {
        try {
            $categoryKey = $url->slug();
            $category = new Category($categoryKey);
            ?><h1><?php echo htmlspecialchars($category->name()) ?></h1><?php
            $description = $category->description();
        } catch (Exception $e) {
            print_r($e);
        }
    }
    echo $description; ?>
<?php endif; ?>
<?php foreach ($content as $page): ?>
    <article>
        <?php Theme::plugins('pageBegin'); ?>
        <h2><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></h2>
        <small><?php echo $page->date(); ?></small>&nbsp;<small>(<?php echo $L->get('Reading time') . ': ' . $page->readingTime() ?>)</small>
        <?php if ($page->category()):?> | <a href="<?php echo DOMAIN_CATEGORIES.$page->categoryKey() ?>" rel="tag"><?php echo $page->category() ?></a>
        <?php endif?><br />
        <!-- Breaked content -->
        <?php echo $page->contentBreak(); ?>
        <!-- "Read more" button -->
        <?php if ($page->readMore()) : ?>
        <a style="float:right;" href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?></a>
        <?php endif ?>
        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>
    </article>
    <hr />
<?php endforeach; ?>
