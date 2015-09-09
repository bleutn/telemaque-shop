<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Storage'), ['action' => 'edit', $storage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Storage'), ['action' => 'delete', $storage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Storages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Storage'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="storages view large-10 medium-9 columns">
    <h2><?= h($storage->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Article') ?></h6>
            <p><?= $storage->has('article') ? $this->Html->link($storage->article->name, ['controller' => 'Articles', 'action' => 'view', $storage->article->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($storage->id) ?></p>
            <h6 class="subheader"><?= __('Storage Count') ?></h6>
            <p><?= $this->Number->format($storage->storage_count) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($storage->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($storage->modified) ?></p>
        </div>
    </div>
</div>
