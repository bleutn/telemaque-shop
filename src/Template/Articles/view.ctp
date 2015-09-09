<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orderstatus'), ['controller' => 'Orderstatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orderstatus'), ['controller' => 'Orderstatus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lineorders'), ['controller' => 'Lineorders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lineorder'), ['controller' => 'Lineorders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Storages'), ['controller' => 'Storages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Storage'), ['controller' => 'Storages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userarticles'), ['controller' => 'Userarticles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userarticle'), ['controller' => 'Userarticles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="articles view large-10 medium-9 columns">
    <h2><?= h($article->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $article->has('category') ? $this->Html->link($article->category->id, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Label') ?></h6>
            <p><?= h($article->label) ?></p>
            <h6 class="subheader"><?= __('Orderstatus') ?></h6>
            <p><?= $article->has('orderstatus') ? $this->Html->link($article->orderstatus->id, ['controller' => 'Orderstatus', 'action' => 'view', $article->orderstatus->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($article->name) ?></p>
            <h6 class="subheader"><?= __('Short Description') ?></h6>
            <p><?= h($article->short_description) ?></p>
            <h6 class="subheader"><?= __('Icon Link') ?></h6>
            <p><?= h($article->icon_link) ?></p>
            <h6 class="subheader"><?= __('Img Link') ?></h6>
            <p><?= h($article->img_link) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($article->id) ?></p>
            <h6 class="subheader"><?= __('Rating Cache') ?></h6>
            <p><?= $this->Number->format($article->rating_cache) ?></p>
            <h6 class="subheader"><?= __('Rating Count') ?></h6>
            <p><?= $this->Number->format($article->rating_count) ?></p>
            <h6 class="subheader"><?= __('Pricing') ?></h6>
            <p><?= $this->Number->format($article->pricing) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($article->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($article->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Is Ordered') ?></h6>
            <p><?= $article->is_ordered ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Is Sale') ?></h6>
            <p><?= $article->is_sale ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Published') ?></h6>
            <p><?= $article->published ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($article->description)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Long Description') ?></h6>
            <?= $this->Text->autoParagraph(h($article->long_description)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Lineorders') ?></h4>
    <?php if (!empty($article->lineorders)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Order Id') ?></th>
            <th><?= __('Article Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($article->lineorders as $lineorders): ?>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Storages') ?></h4>
    <?php if (!empty($article->storages)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Article Id') ?></th>
            <th><?= __('Storage Count') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($article->storages as $storages): ?>
        <tr>
            <td><?= h($storages->id) ?></td>
            <td><?= h($storages->article_id) ?></td>
            <td><?= h($storages->storage_count) ?></td>
            <td><?= h($storages->created) ?></td>
            <td><?= h($storages->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Storages', 'action' => 'view', $storages->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Storages', 'action' => 'edit', $storages->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Storages', 'action' => 'delete', $storages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storages->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Userarticles') ?></h4>
    <?php if (!empty($article->userarticles)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Article Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($article->userarticles as $userarticles): ?>
        <tr>
            <td><?= h($userarticles->id) ?></td>
            <td><?= h($userarticles->article_id) ?></td>
            <td><?= h($userarticles->user_id) ?></td>
            <td><?= h($userarticles->created) ?></td>
            <td><?= h($userarticles->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Userarticles', 'action' => 'view', $userarticles->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Userarticles', 'action' => 'edit', $userarticles->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Userarticles', 'action' => 'delete', $userarticles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userarticles->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
