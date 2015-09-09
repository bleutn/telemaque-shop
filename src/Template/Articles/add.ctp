<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orderstatus'), ['controller' => 'Orderstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orderstatus'), ['controller' => 'Orderstatus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lineorders'), ['controller' => 'Lineorders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lineorder'), ['controller' => 'Lineorders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Storages'), ['controller' => 'Storages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Storage'), ['controller' => 'Storages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userarticles'), ['controller' => 'Userarticles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userarticle'), ['controller' => 'Userarticles', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="articles form large-10 medium-9 columns">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>
        <?php
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('label');
            echo $this->Form->input('description');
            echo $this->Form->input('is_ordered');
            echo $this->Form->input('is_sale');
            echo $this->Form->input('status_id', ['options' => $orderstatus]);
            echo $this->Form->input('published');
            echo $this->Form->input('rating_cache');
            echo $this->Form->input('rating_count');
            echo $this->Form->input('name');
            echo $this->Form->input('pricing');
            echo $this->Form->input('short_description');
            echo $this->Form->input('long_description');
            echo $this->Form->input('icon_link');
            echo $this->Form->input('img_link');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
