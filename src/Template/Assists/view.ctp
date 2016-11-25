<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Assist'), ['action' => 'edit', $assist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Assist'), ['action' => 'delete', $assist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assists view large-9 medium-8 columns content">
    <h3><?= h($assist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Game') ?></th>
            <td><?= $assist->has('game') ? $this->Html->link($assist->game->id, ['controller' => 'Games', 'action' => 'view', $assist->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $assist->has('team') ? $this->Html->link($assist->team->id, ['controller' => 'Teams', 'action' => 'view', $assist->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Player') ?></th>
            <td><?= $assist->has('player') ? $this->Html->link($assist->player->name, ['controller' => 'Players', 'action' => 'view', $assist->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assist->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assists') ?></th>
            <td><?= $this->Number->format($assist->assists) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($assist->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($assist->modified) ?></td>
        </tr>
    </table>
</div>
