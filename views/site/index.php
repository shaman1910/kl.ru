<?php if (count($model)): ?>
    <?php foreach ($model as $item): ?>
    <h3> <?=$item->name?> </h3>
    <?php endforeach ?>
<?php endif ?>
