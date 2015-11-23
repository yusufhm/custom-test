<?php
/**
 * @file
 *  Provides the markup for the custom_test() theme function
 *
 * @see custom_test_theme
 */
?>

<section class="custom-test">
  <?php if ($username): ?>
    <span class="username">Hello <?php print $username; ?></span>
  <?php endif; ?>
  <?php if ($modules): ?>
    <div class="modules">
      <span>Installed modules: </span>
      <div class="modules-list"><?php print $modules; ?></div>
    </div>
  <?php endif; ?>
  <?php if ($teasers): ?>
    <div class="teasers">
      <span>Latest 'The' pages:</span>
      <?php print drupal_render($teasers); ?>
    </div>
  <?php endif; ?>
</section>
