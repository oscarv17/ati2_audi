<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vehicle'), ['action' => 'edit', $vehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehicle'), ['action' => 'delete', $vehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Vehicles'), ['controller' => 'UserVehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Vehicle'), ['controller' => 'UserVehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehicles view large-9 medium-8 columns content">
    <h3><?= h($vehicle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Model') ?></th>
            <td><?= h($vehicle->model) ?></td>
        </tr>
        <tr>
            <th><?= __('Year') ?></th>
            <td><?= h($vehicle->year) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicle->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related User Vehicles') ?></h4>
        <?php if (!empty($vehicle->user_vehicles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Vehicle Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicle->user_vehicles as $userVehicles): ?>
            <tr>
                <td><?= h($userVehicles->id) ?></td>
                <td><?= h($userVehicles->user_id) ?></td>
                <td><?= h($userVehicles->vehicle_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserVehicles', 'action' => 'view', $userVehicles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserVehicles', 'action' => 'edit', $userVehicles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserVehicles', 'action' => 'delete', $userVehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userVehicles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
