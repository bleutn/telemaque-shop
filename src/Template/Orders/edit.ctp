<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $order->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orderstatus'), ['controller' => 'Orderstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orderstatus'), ['controller' => 'Orderstatus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lineorders'), ['controller' => 'Lineorders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lineorder'), ['controller' => 'Lineorders', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="orders form large-10 medium-9 columns">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Edit Order') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('status_id', ['options' => $orderstatus]);
            echo $this->Form->input('order_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
