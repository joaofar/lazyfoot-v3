<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Goal'), ['action' => 'edit', $goal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Goal'), ['action' => 'delete', $goal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Goals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Goal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="goals view large-9 medium-8 columns content">
    <h3><?= h($goal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Game') ?></th>
            <td><?= $goal->has('game') ? $this->Html->link($goal->game->id, ['controller' => 'Games', 'action' => 'view', $goal->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $goal->has('team') ? $this->Html->link($goal->team->id, ['controller' => 'Teams', 'action' => 'view', $goal->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Player') ?></th>
            <td><?= $goal->has('player') ? $this->Html->link($goal->player->name, ['controller' => 'Players', 'action' => 'view', $goal->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($goal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goals') ?></th>
            <td><?= $this->Number->format($goal->goals) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($goal->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($goal->modified) ?></td>
        </tr>
    </table>
</div>
