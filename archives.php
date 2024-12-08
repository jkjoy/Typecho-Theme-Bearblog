<?php 
/**
 * 文章归档
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<main>
<h2 style="margin-bottom:0"><?php $this->title() ?></h2>
<?php
        $stat = Typecho_Widget::widget('Widget_Stat');
        Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize=' . $stat->publishedPostsNum)->to($archives);
        $year = 0; $mon = 0;
        $output = '<ul class="blog-posts">'; // Start archives container      
        while ($archives->next()) {
            $year_tmp = date('Y', $archives->created);
            $mon_tmp = date('m', $archives->created);         
            // 输出文章项
            $output .= '<li><span>';
            $output .= '<i><time datetime="' . date('m月d日', $archives->created) .'">'. date('Y-m-d', $archives->created) .'</time></i>';
            $output .= '</span>';
            $output .= '<a href="' . $archives->permalink . '">'  . $archives->title . '</a></li>';
        }
        $output .= '</ul>'; // End archives container
        echo $output;
    ?>
        <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0')->to($tags); ?>
                        <?php if($tags->have()): ?>
                            <div class="tags">
                                <?php while ($tags->next()): ?>
                                        <a href="<?php $tags->permalink(); ?>" rel="tag" title="<?php $tags->count(); ?> 篇文章"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" fill="rgba(87,107,79,1)"><path d="M7.78428 14L8.2047 10H4V8H8.41491L8.94043 3H10.9514L10.4259 8H14.4149L14.9404 3H16.9514L16.4259 8H20V10H16.2157L15.7953 14H20V16H15.5851L15.0596 21H13.0486L13.5741 16H9.58509L9.05957 21H7.04855L7.57407 16H4V14H7.78428ZM9.7953 14H13.7843L14.2047 10H10.2157L9.7953 14Z"></path></svg>
                                        <?php $tags->name(); ?> </a>
                                <?php endwhile; ?>
                            </div>
                        <?php else: ?>
                        <?php endif; ?>
</main>
<?php $this->need('footer.php'); ?>
 