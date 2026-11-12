<footer class="foot-main"><div class="wrap">
  <div><strong><?= e($site['name']) ?></strong><p><?= e($site['tagline']) ?></p><?= socials() ?></div>
  <nav aria-label="Footer"><?php foreach($site['nav'] as $id=>$l): ?><a href="#<?= $id ?>"><?= e($l) ?></a><?php endforeach; ?></nav>
  <p>© 2026 <?= e($site['name']) ?>. All Rights Reserved.</p>
</div></footer>
<button id="totop" aria-label="Back to top" title="Back to top">↑</button>
<script src="assets/js/script.js"></script>
</body></html>
