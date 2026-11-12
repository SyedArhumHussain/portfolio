<header class="nav" id="top">
  <button class="burger" aria-label="Menu" aria-expanded="false" aria-controls="menu"><i></i><i></i></button>
  <nav id="menu" aria-label="Primary">
    <?php foreach($site['nav'] as $id=>$label): ?>
      <a href="#<?= $id ?>" data-spy="<?= $id ?>" class="<?= $id==='contact'?'talk':'' ?>"><?= e($label) ?><?= $id==='contact'?arrow():'' ?></a>
    <?php endforeach; ?>
  </nav>
</header>
