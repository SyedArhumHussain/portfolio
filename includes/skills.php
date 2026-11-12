<section id="skills" class="sec wrap two">
  <div><p class="label">03 / CAPABILITIES</p><h2>Skills.</h2><p class="sub">From Intelligent AI Systems to Production Ready Software.</p></div>
  <div class="acc">
  <?php $i=0; foreach($skills as $cat=>$items): $i++; ?>
    <div class="row <?= $i===1?'open':'' ?>">
      <button aria-expanded="<?= $i===1?'true':'false' ?>" aria-controls="sk<?= $i ?>"><span class="num"><?= sprintf('%02d',$i) ?></span><span><?= e($cat) ?></span><b aria-hidden="true">+</b></button>
      <div id="sk<?= $i ?>" class="panel"><ul class="tags"><?php foreach($items as $s): ?><li><?= e($s) ?></li><?php endforeach; ?></ul></div>
    </div>
  <?php endforeach; ?>
  </div>
</section>
