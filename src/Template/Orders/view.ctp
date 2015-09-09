<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orderstatus'), ['controller' => 'Orderstatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orderstatus'), ['controller' => 'Orderstatus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lineorders'), ['controller' => 'Lineorders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lineorder'), ['controller' => 'Lineorders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orders view large-10 medium-9 columns">
    <h2><?= h($order->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $order->has('user') ? $this->Html->link($order->user->name, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Orderstatus') ?></h6>
            <p><?= $order->has('orderstatus') ? $this->Html->link($order->orderstatus->id, ['controller' => 'Orderstatus', 'action' => 'view', $order->orderstatus->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($order->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Order Date') ?></h6>
            <p><?= h($order->order_date) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($order->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($order->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Lineorders') ?></h4>
    <?php if (!empty($order->lineorders)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Order Id') ?></th>
            <th><?= __('Article Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($order->lineorders as $lineorders): ?>
        <tr>
            <td><?= h($lineorders->id) ?></td>
            <td><?= h($lineorders->order_id) ?></td>
            <td><?= h($lineorders->article_id) ?></td>
            <td><?= h($lineorders->created) ?></td>
            <td><?= h($lineorders->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Lineorders', 'action' => 'view', $lineorders->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Lineorders', 'action' => 'edit', $lineorders->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lineorders', 'action' => 'delete', $lineorders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lineorders->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
