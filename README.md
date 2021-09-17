# Kirby Grid-Block

## Overview
You can nesting layouts with this Plugin! 🤗 
Read the most important Informations in this Screenshot:

![Grid-Block](https://github.com/youngcut/kirby-grid-block/raw/6c95c30865bfde58e2fcb9c9b22c556b6047e90c/lib/img/screenshot.png)

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

You'il find the description for this Code in the Screenshot.

## How to customize the snippet? 

Copy ```plugins/grid-block/snippets/blocks/grid.yml``` to ```snippets/blocks/grid.yml``` and edit it!

## Licence
MIT

> [Buy me a](https://www.paypal.com/donate?hosted_button_id=LBCLZVHS4K2R6) ☕️