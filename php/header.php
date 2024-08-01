<!-- overall big site header image - make it as wide as your body width is set to -->
<nav style="float:right;">
    <?php foreach (Theme::socialNetworks() as $key => $label): ?>
        <a href="<?php echo $site->{$key}(); ?>" target="_blank"><?php echo mb_strtolower($label, 'UTF-8') ?></a><br />
    <?php endforeach; ?>
    <!-- RSS -->
    <?php if (Theme::rssUrl()): ?>
        <a href="<?php echo Theme::rssUrl() ?>" target="_blank">rss</a>
    <?php endif; ?>
</nav>
<h1>
    <a href="<?= HTML_PATH_ROOT ?>" title="<?php echo $site->title() ?>"><?php echo $site->title() ?></a>
</h1>

<p><?php echo $site->slogan() ?></p>
<br />
<hr />
<center>
    <?php $i = -1; ?>
    <?php foreach ($categories->db as $key => $value) { ?>
        <?php if ($i++ % 3 == 2) echo '<br />'; ?>
        <a href="<?= DOMAIN_CATEGORIES.$key; ?>"> <?= $value['name']; ?> </a>
       <?php if ($i % 3 != 2 && $i+1 != count($categories->db)) echo '|'; ?>
    <?php } ?>
</center>
<hr />
