# Kirby Grid-Block

## Overview

With this plugin you can use layouts right within any blocks field! 🤗

Its most basic use-case is shown in the following screenshot:

![Grid block](./.github/screenshot-grid-block.png)

> This plugin is free to use and published under the MIT license. If you use this plugin for commercial purposes and you want to show your appreciation, don't hesitate to [support me with a donation](https://www.paypal.com/donate?hosted_button_id=LBCLZVHS4K2R6).

## Installation

Download and copy this repository to your plugin folder: `/site/plugins/`

**Composer**

`composer required microman/kirby-grid-blocks`

## Block field usage in the frontend

```html
<?php foreach ($page->myGrid()->toBlocks() as $grid): ?>
  <h2><?= $grid->title() ?></h2>

  <!--
  Customize the Grid-Block and use any custom fields:
  <?= $grid->yourCustomFields() ?>
  -->

  <?= $grid ?>
<?php endforeach ?>
```

## Customization

### Grid block

Simply copy the main `grid.yml` from `site/plugins/grid-block/blueprints/blocks` to your project's `site/blueprints/blocks` folder. The latter one will be used by Kirby instead of the one provided by the plugin.

Of course, you can customize it to your needs:

```yml
textContent:
  label: Content with Text
  type: blocks
  fieldsets:
    grid:
      extends: blocks/grid
      fields:
        grid:
          layouts:
            - "1/1"
          fieldsets:
            - heading
            - text
        title:
          label: Title
        margin:
          type: range
          after: px
          default: "5"
          min: 0
          max: 200
```

You'll find the description for this example blueprint in the screenshot above.

### Snippet

Copy the block snippet `grid.php` from `site/plugins/grid-block/snippets/blocks` to your project's `site/snippets/blocks` folder. The latter one will be used by Kirby instead of the one provided by the plugin.

## Licence

MIT

> [Buy me a](https://www.paypal.com/donate?hosted_button_id=LBCLZVHS4K2R6) ☕️
