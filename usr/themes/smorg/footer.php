<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div>
  </div>
</div>
</section>

<footer class="footer">
<div class="container content">
	<div class="has-text-centered">
		<p>
			<?php $this->options->description() ?>
		</p>
		<hr>
		<p class="has-text-grey is-size-7">
			&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>, Honor by Typecho.
		</p>
	</div>
</div>
</footer>

<?php $this->footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {
        var target = $el.dataset.target;
        var $target = document.getElementById(target);
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});
</script>

</body>
</html>
