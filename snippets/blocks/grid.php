<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php foreach ($block->grid()->toLayouts() as $layout): ?>
  <section class="grid" id="<?= $layout->id() ?>">
    <?php foreach ($layout->columns() as $column): ?>
      <div class="column" style="--span:<?= $column->span() ?>">
        <div class="blocks">
          <?= $column->blocks() ?>
        </div>
      </div>
    <?php endforeach ?>
  </section>
<?php endforeach ?>
