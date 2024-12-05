<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<main>
<h1 style="margin-bottom:0"><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ''); ?></h1>
<ul class="blog-posts">
<?php if ($this->have()): ?>
    <?php while ($this->next()): ?>
<li>
<span>
<i>
<time datetime="<?php $this->date('c'); ?>">
<?php $this->date(); ?>
</time>
</i>
</span>
<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
</li>
<?php endwhile; ?>
    <?php else: ?>
        <article class="post">
            <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
        </article>
    <?php endif; ?>
</ul>
</main>
<?php
            $this->pagenav(
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z" fill="var(--main)"></path></svg>',
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.1714 12.0007L8.22168 7.05093L9.63589 5.63672L15.9999 12.0007L9.63589 18.3646L8.22168 16.9504L13.1714 12.0007Z" fill="var(--main)"></path></svg>',
                1,
                '...',
                array(
                    'wrapTag' => 'div',
                    'wrapClass' => 'pagination_page',
                    'itemTag' => '',
                    'textTag' => 'a',
                    'currentClass' => 'active',
                    'prevClass' => 'prev',
                    'nextClass' => 'next'
                )
            );
        ?>
<style>
/* 分页 */
.pagination_page{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: var(--margin);
    gap: 0.5rem;
}
.pagination_page li.active a {
    background: var(--theme);
    color: #fff;
    font-weight: 500;
}
.pagination_page a{
    display: flex;
    padding: 0.5rem;
    font-size: 0.9rem;
    width: 1.75rem;
    height: 1.75rem;
    background: var(--background);
    border-radius: 50%;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: 0.2s;
    -webkit-transition: 0.2s;
    justify-content: center;
    align-items: center;
    letter-spacing: 0;
}
.pagination_page span.next{
    cursor: pointer;
}
.pagination_page li.active a:hover{
    cursor: not-allowed;
}
/* 分页 */
</style>
<?php $this->need('footer.php'); ?>
