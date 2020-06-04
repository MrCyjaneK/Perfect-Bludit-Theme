
<!-- overall big site header image - make it as wide as your body width is set to -->
  <nav style="float:right;">
  <pre><code><?php if ($site->twitter()): ?><a href="<?php echo $site->twitter() ?>" target="_blank">twitter</a>
<?php endif ?>
<?php if ($site->facebook()): ?><a href="<?php echo $site->facebook() ?>" target="_blank">facebook</a>
<?php endif ?>
<?php if ($site->codepen()): ?><a href="<?php echo $site->codepen() ?>" target="_blank">codepen</a>
<?php endif ?>
<?php if ($site->instagram()): ?><a href="<?php echo $site->instagram() ?>" target="_blank">instagram</a>
<?php endif ?>
<?php if ($site->gitlab()): ?><a href="<?php echo $site->gitlab() ?>" target="_blank">gitlab</a>
<?php endif ?>
<?php if ($site->github()): ?><a href="<?php echo $site->github() ?>" target="_blank">github</a>
<?php endif ?>
<?php if ($site->linkedin()): ?><a href="<?php echo $site->linkedin() ?>" target="_blank">linkedin</a>
<?php endif ?>
<?php if ($site->mastodon()): ?><a href="<?php echo $site->mastodon() ?>" target="_blank">mastodon</a>
<?php endif ?>
<?php if ($site->dribbble()): ?><a href="<?php echo $site->dribbble() ?>" target="_blank">dribbble</a>
<?php endif ?>
<?php if ($site->VK()): ?><a href="<?php echo $site->VK() ?>" target="_blank">VK</a>
<?php endif ?><?php
$className = 'pluginRSS';

if (pluginActivated($className)) {
    echo '<a href="'. HTML_PATH_ROOT .'/rss.xml" target="_blank">rss</a>';
}
?></code></pre>
  </nav>
<pre><code><h1><a href="<?php HTML_PATH_ROOT ?>" title="<?php echo $site->title() ?>"><?php echo $site->title() ?></a></h1><p><?php echo $site->slogan() ?></p><hr /></code></pre>
