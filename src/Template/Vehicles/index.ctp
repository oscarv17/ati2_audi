<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Vehicles'), ['controller' => 'UserVehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Vehicle'), ['controller' => 'UserVehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicles index large-9 medium-8 columns content">
    <h3><?= __('Vehicles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('model') ?></th>
                <th><?= $this->Paginator->sort('year') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehicles as $vehicle): ?>
            <tr>
                <td><?= $this->Number->format($vehicle->id) ?></td>
                <td><?= h($vehicle->model) ?></td>
                <td><?= h($vehicle->year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vehicle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vehicle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?>
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
