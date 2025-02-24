<?php
/**
 * BearBlog theme for Typecho
 *
 * @package Bearblog Theme
 * @author Sun
 * @version 1.0.3
 * @link http://www.imsun.pw
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<main>
<h2 id="hi-i-m-herman-martinus"> </h2>
<h3 id="i-m-a-maker-of-things-rider-of-bikes-and-hiker-of-mountains"> </h3>
<p><?php $this->options->aboutme() ?> </p>
<h2 id="my-most-popular-posts">最近更新</h2>
<ul>
<?php while($this->next()): ?>
    <li><?php $this->date('Y-m-d'); ?><a href="<?php $this->permalink() ?> ">
    <?php $this->sticky();$this->title() ?></a> </li>
<?php endwhile; ?>
</ul>
</main>
<?php $this->need('footer.php'); ?>