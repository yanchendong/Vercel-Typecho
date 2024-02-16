<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>

        <li>
            <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        </li>
        <li><?php $this->category(' / '); ?></li>
        <li>
            <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
        </li>
    </ul>
</nav>

<article class="content">
                    <h1 class="title is-3"><?php $this->title() ?></h1>
                    <p class="subtitle subtitle2 is-6 has-text-grey"><em>Posted 
<time datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time> by <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>; tagged with 
<?php $this->tags(' , ', true, 'none'); ?>
</em></p>

<?php $this->content(); ?>

</article>

<?php $this->need('footer.php'); ?>
