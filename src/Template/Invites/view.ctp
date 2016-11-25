<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Invite'), ['action' => 'edit', $invite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invite'), ['action' => 'delete', $invite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invite'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invites view large-9 medium-8 columns content">
    <h3><?= h($invite->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Game') ?></th>
            <td><?= $invite->has('game') ? $this->Html->link($invite->game->id, ['controller' => 'Games', 'action' => 'view', $invite->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Player') ?></th>
            <td><?= $invite->has('player') ? $this->Html->link($invite->player->name, ['controller' => 'Players', 'action' => 'view', $invite->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invite->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($invite->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($invite->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Available') ?></th>
            <td><?= $invite->available ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
