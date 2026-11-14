<?php
function art($k){
  $g='<defs><pattern id="d'.$k.'" width="10" height="10" patternUnits="userSpaceOnUse"><circle cx="1" cy="1" r=".8" fill="#9db0a3"/></pattern></defs><rect width="400" height="200" fill="url(#d'.$k.')"/>';
  if($k==='amd') return $g.'<rect x="50" y="60" width="110" height="80" fill="#f7f7f2" stroke="#2f5742"/><text x="64" y="105" font-size="10" fill="#2f5742">HUMAN</text><path d="M170 100h50m-8-6 8 6-8 6" stroke="#2f5742" fill="none"/><rect x="230" y="60" width="120" height="80" fill="#2f5742"/><text x="244" y="105" font-size="10" fill="#f7f7f2">MACHINE</text>';
  if($k==='care') return $g.'<rect x="150" y="50" width="100" height="100" rx="22" fill="#c9d3c4" transform="rotate(14 200 100)"/><rect x="130" y="40" width="140" height="120" fill="none" stroke="#2f5742"/><text x="134" y="34" font-size="10" fill="#2f5742">EN / UR</text>';
  return $g.'<polyline points="40,150 100,125 150,135 200,100 260,90 320,50 365,40" fill="none" stroke="#2f5742" stroke-width="2"/><polyline points="260,90 300,100 340,80" fill="none" stroke="#2f5742" stroke-dasharray="4 4"/>';
}
?>
<section id="projects" class="sec wrap">
  <p class="label">02 / PROJECTS</p><h2>Real World Projects.</h2>
  <div class="cards">
  <?php foreach($projects as $p): ?>
    <article class="card">
      <svg class="art" viewBox="0 0 400 200" role="img" aria-label="Illustration for <?= e($p['title']) ?>" font-family="Archivo,sans-serif"><?= art($p['art']) ?></svg>
      <div class="body">
        <p class="label">PROJECT <?= $p['n'] ?>: <?= e($p['cat']) ?></p>
        <h3><?php $u=$p['view']?:$p['github']; if($u): ?><a href="<?= e($u) ?>" target="_blank" rel="noopener noreferrer"><?= e($p['title']) ?></a><?php else: ?><?= e($p['title']) ?><?php endif; ?></h3>
        <p><?= e($p['desc']) ?></p>
        <ul class="pts"><?php foreach($p['points'] as $x): ?><li><?= e($x) ?></li><?php endforeach; ?></ul>
        <ul class="tags"><?php foreach($p['tags'] as $t): ?><li><?= e($t) ?></li><?php endforeach; ?></ul>
        <div class="foot">
          <?php foreach(['view'=>'View Project'] as $k=>$l):
            if($p[$k]): ?><a href="<?= e($p[$k]) ?>" target="_blank" rel="noopener noreferrer"><?= $l ?> <?= arrow() ?></a>
            <?php else: ?><span class="off" aria-disabled="true" title="Link not configured yet (config/config.php)"><?= $l ?> (link pending)</span><?php endif; endforeach; ?>
        </div>
      </div>
    </article>
  <?php endforeach; ?>
  </div>
</section>
