<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
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
<div class="articles index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('category_id') ?></th>
            <th><?= $this->Paginator->sort('label') ?></th>
            <th><?= $this->Paginator->sort('is_ordered') ?></th>
            <th><?= $this->Paginator->sort('is_sale') ?></th>
            <th><?= $this->Paginator->sort('status_id') ?></th>
            <th><?= $this->Paginator->sort('published') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($articles as $article): ?>
        <tr>
            <td><?= $this->Number->format($article->id) ?></td>
            <td>
                <?= $article->has('category') ? $this->Html->link($article->category->id, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) : '' ?>
            </td>
            <td><?= h($article->label) ?></td>
            <td><?= h($article->is_ordered) ?></td>
            <td><?= h($article->is_sale) ?></td>
            <td>
                <?= $article->has('orderstatus') ? $this->Html->link($article->orderstatus->id, ['controller' => 'Orderstatus', 'action' => 'view', $article->orderstatus->id]) : '' ?>
            </td>
            <td><?= h($article->published) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $article->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
