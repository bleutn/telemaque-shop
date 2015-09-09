<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="categories view large-10 medium-9 columns">
    <h2><?= h($category->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Label') ?></h6>
            <p><?= h($category->label) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($category->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($category->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($category->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Articles') ?></h4>
    <?php if (!empty($category->articles)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Category Id') ?></th>
            <th><?= __('Label') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Is Ordered') ?></th>
            <th><?= __('Is Sale') ?></th>
            <th><?= __('Status Id') ?></th>
            <th><?= __('Published') ?></th>
            <th><?= __('Rating Cache') ?></th>
            <th><?= __('Rating Count') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Pricing') ?></th>
            <th><?= __('Short Description') ?></th>
            <th><?= __('Long Description') ?></th>
            <th><?= __('Icon Link') ?></th>
            <th><?= __('Img Link') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($category->articles as $articles): ?>
        <tr>
            <td><?= h($articles->id) ?></td>
            <td><?= h($articles->category_id) ?></td>
            <td><?= h($articles->label) ?></td>
            <td><?= h($articles->description) ?></td>
            <td><?= h($articles->is_ordered) ?></td>
            <td><?= h($articles->is_sale) ?></td>
            <td><?= h($articles->status_id) ?></td>
            <td><?= h($articles->published) ?></td>
            <td><?= h($articles->rating_cache) ?></td>
            <td><?= h($articles->rating_count) ?></td>
            <td><?= h($articles->name) ?></td>
            <td><?= h($articles->pricing) ?></td>
            <td><?= h($articles->short_description) ?></td>
            <td><?= h($articles->long_description) ?></td>
            <td><?= h($articles->icon_link) ?></td>
            <td><?= h($articles->img_link) ?></td>
            <td><?= h($articles->created) ?></td>
            <td><?= h($articles->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
