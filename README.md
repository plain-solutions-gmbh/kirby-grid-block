# Kirby Grid-Block

## Overview
You can nesting layouts with this Plugin! 🤗
Read the most important Informations in this Screenshot:

![Grid block](./.github/screenshot-grid-block.png)

> This plugin is free to use and published under the MIT license. If you use this plugin for commercial purposes and you want to show your appreciation, don't hesitate to [support me with a donation](https://www.paypal.com/donate?hosted_button_id=LBCLZVHS4K2R6).


## Installation
Download and copy this repository to you Plugin-Folder: `/site/plugins/`

## How to use it in your frontend?

```
<?php foreach ($page->mygrid()->toBlocks() as $grid) : ?>

    <h2><?= $grid->title() ?></h2>

    /*
        Customize the Grid-Block and use your additional fields:
        <?= $grid->your_additional_fields() ?>
    */

    <?= $grid ?>


<?php endforeach ?>
```

## How to customize the grid-block?

Copy ```plugins/grid-block/blueprints/blocks/grid.yml``` to ```blueprints/blocks/grid.yml``` and edit it!

Or customize it, right there where you need it:

```
text_content:
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
                    label: Title (Will shown on Website)
                margin:
                    type: range
                    after: px
                    default: "5"
                    min: 0
                    max: 200
```

You'il find the description for this Code in the Screenshot.

## How to customize the snippet?

Copy ```plugins/grid-block/snippets/blocks/grid.yml``` to ```snippets/blocks/grid.yml``` and edit it!

## Licence
MIT

> [Buy me a](https://www.paypal.com/donate?hosted_button_id=LBCLZVHS4K2R6) ☕️
