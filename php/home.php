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
        
         <!-- Page description -->
				<?php if ($page->description()): ?>
				<p class="page-description"><?php echo $page->description(); ?></p>
				<?php endif ?>

				<!-- Page content until the pagebreak -->
				<div>
				<?php echo $page->contentBreak(); ?>
				</div>

				<!-- Shows "read more" button if necessary -->
				<?php if ($page->readMore()): ?>
				<div class="text-right pt-3">
				<a style="float:right;" href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?></a>
				</div>
    
       
				<?php endif ?>
                <a href="<?php echo $page->permalink(); ?>"><span class="likebg"><?php echo $page->date(); ?></span></a>
        <?php if ($page->category()):?>
            <span class="likebg"><a href="<?php echo DOMAIN_CATEGORIES.$page->categoryKey() ?>" rel="tag"><?php echo $page->category() ?></a></span>
        <?php Theme::plugins('pageEnd'); ?>
        <?php endif?>
    </article>
<?php endforeach; ?>
