<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Assist'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assists index large-9 medium-8 columns content">
    <h3><?= __('Assists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assists') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assists as $assist): ?>
            <tr>
                <td><?= $this->Number->format($assist->id) ?></td>
                <td><?= $assist->has('game') ? $this->Html->link($assist->game->id, ['controller' => 'Games', 'action' => 'view', $assist->game->id]) : '' ?></td>
                <td><?= $assist->has('team') ? $this->Html->link($assist->team->id, ['controller' => 'Teams', 'action' => 'view', $assist->team->id]) : '' ?></td>
                <td><?= $assist->has('player') ? $this->Html->link($assist->player->name, ['controller' => 'Players', 'action' => 'view', $assist->player->id]) : '' ?></td>
                <td><?= $this->Number->format($assist->assists) ?></td>
                <td><?= h($assist->created) ?></td>
                <td><?= h($assist->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $assist->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assist->id)]) ?>
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
