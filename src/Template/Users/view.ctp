<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Vehicles'), ['controller' => 'UserVehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Vehicle'), ['controller' => 'UserVehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related User Vehicles') ?></h4>
        <?php if (!empty($user->user_vehicles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Vehicle Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_vehicles as $userVehicles): ?>
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
