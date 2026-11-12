<section id="experience" class="sec wrap">
  <p class="label">04 / EXPERIENCE</p><h2>Experience.</h2>
  <ol class="tl">
  <?php foreach($experience as $i=>$x): ?>
    <li class="item"><span class="num"><?= sprintf('%02d',$i+1) ?></span>
      <div><h3><?= e($x['org']) ?></h3><p class="role"><?= e($x['role']) ?> · <?= e($x['when']) ?></p>
      <ul class="pts"><?php foreach($x['items'] as $t): ?><li><?= e($t) ?></li><?php endforeach; ?></ul>
      <ul class="tags"><?php foreach($x['tags'] as $t): ?><li><?= e($t) ?></li><?php endforeach; ?></ul></div></li>
  <?php endforeach; ?>
  </ol>
</section>
