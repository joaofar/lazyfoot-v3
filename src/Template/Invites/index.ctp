<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Invite'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="invites index large-9 medium-8 columns content">
    <h3><?= __('Invites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('available') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invites as $invite): ?>
            <tr>
                <td><?= $this->Number->format($invite->id) ?></td>
                <td><?= $invite->has('game') ? $this->Html->link($invite->game->id, ['controller' => 'Games', 'action' => 'view', $invite->game->id]) : '' ?></td>
                <td><?= $invite->has('player') ? $this->Html->link($invite->player->name, ['controller' => 'Players', 'action' => 'view', $invite->player->id]) : '' ?></td>
                <td><?= h($invite->available) ?></td>
                <td><?= h($invite->created) ?></td>
                <td><?= h($invite->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $invite->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invite->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invite->id)]) ?>
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
