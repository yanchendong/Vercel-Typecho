<?php
/**
 * 这是 Typecho 1.x 系统的一套新模板
 * 
 * @package Typecho Smorg Theme 
 * @author Typecho Pro Team
 * @version 2018.07.07
 * @link https://typecho.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

      <article class="content">
      <h1 class="title">All Posts</h1>

	<?php while($this->next()): ?>

      <article class="blog">
      <header>
      <h1 class="title is-4"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
      <p class="subtitle has-text-grey-light is-6">
        <time datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time>
      </p>
      </header>
      <p><?php $this->excerpt(300, '...'); ?></p>
      <footer>
      </footer>
      </article>



	<?php endwhile; ?>

      </article>

      <nav class="pagination" aria-label="pagination">
      
      第 <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> 页 / 共 <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?> 页
      <?php $this->pageLink('下一页','next'); ?>
      </nav>

<?php $this->need('footer.php'); ?>
