<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer style="padding:25px 0;">
<span id="footer-directive">
<?php $this->options->addfoot() ?>
</span>
<span>
&copy; <?php $this->date('Y'); ?>  <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> |
Powered by Tpyecho & bear |
Theme by <a href="https://www.imSun.org" href="_blank" >Sun </a>
</span>
</footer>
</body>
</html>