<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="<?php $this->options->charset(); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5">
<title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>
<link rel="canonical" href="<?php $this->options->siteUrl(); ?>">
<meta name="title" content="<?php $this->options->title(); ?>">
<meta name="description" content="<?php $this->options->description() ?>.">
<link rel="alternate" type="application/atom+xml" href="<?php $this->options->siteUrl(); ?>feed/">
<link rel="shortcut icon" type="image/svg+xml" href="<?php $this->options->logoUrl() ?>">
<style>
<?php $this->options->diycss() ?>      
      
:root {
    --width: 720px;
    --font-main: Verdana, sans-serif;
    --font-secondary: Verdana, sans-serif;
    --font-scale: 1em;
    --background-color: #fff;
    --heading-color: #222;
    --text-color: #444;
    --link-color: #3273dc;
    --visited-color:  #8b6fcb;
    --code-background-color: #f2f2f2;
    --code-color: #222;
    --blockquote-color: #222;
}

@media (prefers-color-scheme: dark) {
    :root {
        --background-color: #01242e;
        --heading-color: #eee;
        --text-color: #ddd;
        --link-color: #8cc2dd;
        --visited-color:  #8b6fcb;
        --code-background-color: #000;
        --code-color: #ddd;
        --blockquote-color: #ccc;
    }
}

body {
    font-family: var(--font-secondary);
    font-size: var(--font-scale);
    margin: auto;
    padding: 20px;
    max-width: var(--width);
    text-align: left;
    background-color: var(--background-color);
    word-wrap: break-word;
    overflow-wrap: break-word;
    line-height: 1.5;
    color: var(--text-color);
}

h1, h2, h3, h4, h5, h6 {
    font-family: var(--font-main);
    color: var(--heading-color);
}

a {
    color: var(--link-color);
    cursor: pointer;
    text-decoration: none;
}

a:hover {
    text-decoration: underline; 
}

nav a {
    margin-right: 8px;
}

strong, b {
    color: var(--heading-color);
}

button {
    margin: 0;
    cursor: pointer;
}

time {
 	font-family: monospace;
  	font-style: normal;
  	font-size: 15px;
}

main {
    line-height: 1.6;
}

table {
    width: 100%;
}

hr {
    border: 0;
    border-top: 1px dashed;
}

img {
    max-width: 100%;
}

code {
    font-family: monospace;
    padding: 2px;
    background-color: var(--code-background-color);
    color: var(--code-color);
    border-radius: 3px;
}

blockquote {
    border-left: 1px solid #999;
    color: var(--code-color);
    padding-left: 20px;
    font-style: italic;
}

footer {
    padding: 25px 0;
    text-align: center;
}

.title:hover {
    text-decoration: none;
}

.title h1 {
    font-size: 1.5em;
}

.inline {
    width: auto !important;
}

.highlight, .code {
    padding: 1px 15px;
    background-color: var(--code-background-color);
    color: var(--code-color);
    border-radius: 3px;
    margin-block-start: 1em;
    margin-block-end: 1em;
    overflow-x: auto;
}

/* blog post list */
ul.blog-posts {
    list-style-type: none;
    padding: unset;
}

ul.blog-posts li {
    display: flex;
}

ul.blog-posts li span {
    flex: 0 0 130px;
}

ul.blog-posts li a:visited {
    color: var(--visited-color);
}
      
  </style>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class="home">
<header>
<a class="title" href="/">
<h1>
<?php $this->options->title() ?>
</h1>
</a>
<nav>
                <p>                    
                    <a<?php if ($this->is('index')): ?>  <?php endif; ?>
                        href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
                    <?php while ($pages->next()): ?>
                        <a<?php if ($this->is('page', $pages->slug)): ?> <?php endif; ?>
                            href="<?php $pages->permalink(); ?>"
                            title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </p>
</nav>
</header>