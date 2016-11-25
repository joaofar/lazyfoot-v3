<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assists'), ['controller' => 'Assists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assist'), ['controller' => 'Assists', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Goals'), ['controller' => 'Goals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Goal'), ['controller' => 'Goals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invites'), ['controller' => 'Invites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invite'), ['controller' => 'Invites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ratings'), ['controller' => 'Ratings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rating'), ['controller' => 'Ratings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="players index large-9 medium-8 columns content">
    <h3><?= __('Players') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('games_played') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wins') ?></th>
                <th scope="col"><?= $this->Paginator->sort('win_percentage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goals') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goals_average') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assists') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assists_average') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_scored') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_scored_average') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_conceded') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_conceded_average') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wins_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('win_percentage_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goals_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goals_average_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assists_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assists_average_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_scored_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_scored_average_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_conceded_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_conceded_average_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($players as $player): ?>
            <tr>
                <td><?= $this->Number->format($player->id) ?></td>
                <td><?= h($player->name) ?></td>
                <td><?= h($player->email) ?></td>
                <td><?= $this->Number->format($player->conv) ?></td>
                <td><?= $this->Number->format($player->games_played) ?></td>
                <td><?= $this->Number->format($player->wins) ?></td>
                <td><?= $this->Number->format($player->win_percentage) ?></td>
                <td><?= $this->Number->format($player->goals) ?></td>
                <td><?= $this->Number->format($player->goals_average) ?></td>
                <td><?= $this->Number->format($player->assists) ?></td>
                <td><?= $this->Number->format($player->assists_average) ?></td>
                <td><?= $this->Number->format($player->team_scored) ?></td>
                <td><?= $this->Number->format($player->team_scored_average) ?></td>
                <td><?= $this->Number->format($player->team_conceded) ?></td>
                <td><?= $this->Number->format($player->team_conceded_average) ?></td>
                <td><?= $this->Number->format($player->wins_limit) ?></td>
                <td><?= $this->Number->format($player->win_percentage_limit) ?></td>
                <td><?= $this->Number->format($player->goals_limit) ?></td>
                <td><?= $this->Number->format($player->goals_average_limit) ?></td>
                <td><?= $this->Number->format($player->assists_limit) ?></td>
                <td><?= $this->Number->format($player->assists_average_limit) ?></td>
                <td><?= $this->Number->format($player->team_scored_limit) ?></td>
                <td><?= $this->Number->format($player->team_scored_average_limit) ?></td>
                <td><?= $this->Number->format($player->team_conceded_limit) ?></td>
                <td><?= $this->Number->format($player->team_conceded_average_limit) ?></td>
                <td><?= h($player->created) ?></td>
                <td><?= h($player->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $player->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $player->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?>
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
