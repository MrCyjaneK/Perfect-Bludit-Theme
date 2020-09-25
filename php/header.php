<!-- overall big site header image - make it as wide as your body width is set to -->
<nav style="float:right;">
    <?php if ($site->twitter()): ?>
        <a href="<?php echo $site->twitter() ?>" target="_blank">twitter</a><br />
    <?php endif ?>
    <?php if ($site->facebook()): ?>
        <a href="<?php echo $site->facebook() ?>" target="_blank">facebook</a><br />
    <?php endif ?>
    <?php if ($site->codepen()): ?>
        <a href="<?php echo $site->codepen() ?>" target="_blank">codepen</a><br />
    <?php endif ?>
    <?php if ($site->instagram()): ?>
        <a href="<?php echo $site->instagram() ?>" target="_blank">instagram</a><br />
    <?php endif ?>
    <?php if ($site->gitlab()): ?>
        <a href="<?php echo $site->gitlab() ?>" target="_blank">gitlab</a><br />
    <?php endif ?>
    <?php if ($site->github()): ?>
        <a href="<?php echo $site->github() ?>" target="_blank">github</a><br />
    <?php endif ?>
    <?php if ($site->linkedin()): ?>
        <a href="<?php echo $site->linkedin() ?>" target="_blank">linkedin</a><br />
    <?php endif ?>
    <?php if ($site->mastodon()): ?>
        <a href="<?php echo $site->mastodon() ?>" target="_blank">mastodon</a><br />
    <?php endif ?>
    <?php if ($site->dribbble()): ?>
        <a href="<?php echo $site->dribbble() ?>" target="_blank">dribbble</a><br />
    <?php endif ?>
    <?php if ($site->VK()): ?>
        <a href="<?php echo $site->VK() ?>" target="_blank">VK</a><br />
    <?php endif ?>
    <?php
    $className = 'pluginRSS';
    if (pluginActivated($className)) {
        echo '<a href="'. HTML_PATH_ROOT .'rss.xml" target="_blank">rss</a>';
    }
?>
</nav>
<h1>
    <a href="<?= HTML_PATH_ROOT ?>" title="<?php echo $site->title() ?>"><?php echo $site->title() ?></a>
</h1>

<p><?php echo $site->slogan() ?></p>
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
