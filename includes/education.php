
<section id="education" class="sec wrap">
  <p class="label">05 / EDUCATION</p>
  <h2>Academic Foundation.</h2>

  <ol class="tl">
    <?php foreach($education as $i => $x): ?>
      <li class="item">
        <span class="num"><?= sprintf('%02d', $i + 1) ?></span>

        <div>
          <h3><?= e($x['org']) ?></h3>

          <p class="role">
            <?= e($x['role']) ?> · <?= e($x['when']) ?>
          </p>
        </div>
      </li>
    <?php endforeach; ?>
  </ol>
</section>
