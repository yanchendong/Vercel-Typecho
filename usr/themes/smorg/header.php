<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>


    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">


    <?php $this->header(); ?>
</head>
<body>

<nav class="navbar" aria-label="main navigation">
<div class="container">
    <div class="navbar-brand">
        <a class="navbar-item has-text-white-ter" href="<?php $this->options->siteUrl(); ?>"><span class="has-text-weight-bold"><?php $this->options->title() ?></span>
        </a>
        <div class="navbar-burger burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="navbar-menu" id="navMenu">
        <div class="navbar-end">
            <a class="navbar-item" href="<?php $this->options->siteUrl(); ?>">首页</a>
                    <!--显示所有页面-->
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a class="navbar-item" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                    <!--显示所有分类-->

                    <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                    <?php while ($category->next()): ?>
                    <a class="navbar-item" href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>">
                    <?php $category->name(); ?>
                    </a>
                    <?php endwhile; ?>

        </div>
    </div>
</div>
</nav>





<section class="section">
<div class="container">
  <div class="columns">
    <div class="column is-10 is-offset-1">
    
    
