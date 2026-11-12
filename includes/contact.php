<?php
$flash = $_SESSION['flash'] ?? null; $old = $_SESSION['old'] ?? [];
unset($_SESSION['flash'], $_SESSION['old']);
if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(16));
$err = $flash['errors'] ?? [];
?>
<section id="contact" class="sec wrap two">
  <div><p class="label">06 / CONTACT</p><h2>Have an Interesting AI Project in Mind?</h2><p class="sub">Let's Build Something Intelligent Together.</p><?= socials('big') ?></div>
  <form action="process_contact.php" method="post" novalidate class="form">
    <?php if($flash): ?><p class="notice <?= $flash['ok']?'ok':'bad' ?>" role="alert"><?= e($flash['msg']) ?></p><?php endif; ?>
    <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">
    <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
    <?php foreach(['name'=>['Full Name','text'],'email'=>['Email Address','email'],'subject'=>['Subject','text']] as $k=>[$l,$t]): ?>
      <label>
        <?= $l ?><input type="<?= $t ?>" name="<?= $k ?>" value="<?= e($old[$k] ?? '') ?>" required maxlength="150">
        <?php if(isset($err[$k])): ?><small><?= e($err[$k]) ?></small><?php endif; ?>
      </label>
    <?php endforeach; ?>
    <label>Message<textarea name="message" rows="5" required maxlength="5000"><?= e($old['message'] ?? '') ?></textarea>
      <?php if(isset($err['message'])): ?><small><?= e($err['message']) ?></small><?php endif; ?></label>
    <button class="btn" type="submit">Send Message</button>
  </form>
</section>
