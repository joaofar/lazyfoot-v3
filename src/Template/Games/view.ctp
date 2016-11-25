<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Game'), ['action' => 'edit', $game->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Game'), ['action' => 'delete', $game->id], ['confirm' => __('Are you sure you want to delete # {0}?', $game->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assists'), ['controller' => 'Assists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assist'), ['controller' => 'Assists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Goals'), ['controller' => 'Goals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Goal'), ['controller' => 'Goals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invites'), ['controller' => 'Invites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invite'), ['controller' => 'Invites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ratings'), ['controller' => 'Ratings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rating'), ['controller' => 'Ratings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="games view large-9 medium-8 columns content">
    <h3><?= h($game->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Stage') ?></th>
            <td><?= h($game->stage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($game->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($game->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($game->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($game->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Assists') ?></h4>
        <?php if (!empty($game->assists)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Game Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col"><?= __('Assists') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->assists as $assists): ?>
            <tr>
                <td><?= h($assists->id) ?></td>
                <td><?= h($assists->game_id) ?></td>
                <td><?= h($assists->team_id) ?></td>
                <td><?= h($assists->player_id) ?></td>
                <td><?= h($assists->assists) ?></td>
                <td><?= h($assists->created) ?></td>
                <td><?= h($assists->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Assists', 'action' => 'view', $assists->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Assists', 'action' => 'edit', $assists->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Assists', 'action' => 'delete', $assists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assists->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Goals') ?></h4>
        <?php if (!empty($game->goals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Game Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col"><?= __('Goals') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->goals as $goals): ?>
            <tr>
                <td><?= h($goals->id) ?></td>
                <td><?= h($goals->game_id) ?></td>
                <td><?= h($goals->team_id) ?></td>
                <td><?= h($goals->player_id) ?></td>
                <td><?= h($goals->goals) ?></td>
                <td><?= h($goals->created) ?></td>
                <td><?= h($goals->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Goals', 'action' => 'view', $goals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Goals', 'action' => 'edit', $goals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Goals', 'action' => 'delete', $goals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Invites') ?></h4>
        <?php if (!empty($game->invites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Game Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col"><?= __('Available') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->invites as $invites): ?>
            <tr>
                <td><?= h($invites->id) ?></td>
                <td><?= h($invites->game_id) ?></td>
                <td><?= h($invites->player_id) ?></td>
                <td><?= h($invites->available) ?></td>
                <td><?= h($invites->created) ?></td>
                <td><?= h($invites->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Invites', 'action' => 'view', $invites->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Invites', 'action' => 'edit', $invites->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invites', 'action' => 'delete', $invites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invites->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ratings') ?></h4>
        <?php if (!empty($game->ratings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Game Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col"><?= __('Mean') ?></th>
                <th scope="col"><?= __('Standard Deviation') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->ratings as $ratings): ?>
            <tr>
                <td><?= h($ratings->id) ?></td>
                <td><?= h($ratings->game_id) ?></td>
                <td><?= h($ratings->team_id) ?></td>
                <td><?= h($ratings->player_id) ?></td>
                <td><?= h($ratings->mean) ?></td>
                <td><?= h($ratings->standard_deviation) ?></td>
                <td><?= h($ratings->created) ?></td>
                <td><?= h($ratings->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ratings', 'action' => 'view', $ratings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ratings', 'action' => 'edit', $ratings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ratings', 'action' => 'delete', $ratings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Teams') ?></h4>
        <?php if (!empty($game->teams)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Game Id') ?></th>
                <th scope="col"><?= __('Is Winner') ?></th>
                <th scope="col"><?= __('Score') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->teams as $teams): ?>
            <tr>
                <td><?= h($teams->id) ?></td>
                <td><?= h($teams->game_id) ?></td>
                <td><?= h($teams->is_winner) ?></td>
                <td><?= h($teams->score) ?></td>
                <td><?= h($teams->created) ?></td>
                <td><?= h($teams->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Teams', 'action' => 'view', $teams->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Teams', 'action' => 'edit', $teams->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teams', 'action' => 'delete', $teams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teams->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Players') ?></h4>
        <?php if (!empty($game->players)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Conv') ?></th>
                <th scope="col"><?= __('Games Played') ?></th>
                <th scope="col"><?= __('Wins') ?></th>
                <th scope="col"><?= __('Win Percentage') ?></th>
                <th scope="col"><?= __('Goals') ?></th>
                <th scope="col"><?= __('Goals Average') ?></th>
                <th scope="col"><?= __('Assists') ?></th>
                <th scope="col"><?= __('Assists Average') ?></th>
                <th scope="col"><?= __('Team Scored') ?></th>
                <th scope="col"><?= __('Team Scored Average') ?></th>
                <th scope="col"><?= __('Team Conceded') ?></th>
                <th scope="col"><?= __('Team Conceded Average') ?></th>
                <th scope="col"><?= __('Wins Limit') ?></th>
                <th scope="col"><?= __('Win Percentage Limit') ?></th>
                <th scope="col"><?= __('Goals Limit') ?></th>
                <th scope="col"><?= __('Goals Average Limit') ?></th>
                <th scope="col"><?= __('Assists Limit') ?></th>
                <th scope="col"><?= __('Assists Average Limit') ?></th>
                <th scope="col"><?= __('Team Scored Limit') ?></th>
                <th scope="col"><?= __('Team Scored Average Limit') ?></th>
                <th scope="col"><?= __('Team Conceded Limit') ?></th>
                <th scope="col"><?= __('Team Conceded Average Limit') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->players as $players): ?>
            <tr>
                <td><?= h($players->id) ?></td>
                <td><?= h($players->name) ?></td>
                <td><?= h($players->email) ?></td>
                <td><?= h($players->conv) ?></td>
                <td><?= h($players->games_played) ?></td>
                <td><?= h($players->wins) ?></td>
                <td><?= h($players->win_percentage) ?></td>
                <td><?= h($players->goals) ?></td>
                <td><?= h($players->goals_average) ?></td>
                <td><?= h($players->assists) ?></td>
                <td><?= h($players->assists_average) ?></td>
                <td><?= h($players->team_scored) ?></td>
                <td><?= h($players->team_scored_average) ?></td>
                <td><?= h($players->team_conceded) ?></td>
                <td><?= h($players->team_conceded_average) ?></td>
                <td><?= h($players->wins_limit) ?></td>
                <td><?= h($players->win_percentage_limit) ?></td>
                <td><?= h($players->goals_limit) ?></td>
                <td><?= h($players->goals_average_limit) ?></td>
                <td><?= h($players->assists_limit) ?></td>
                <td><?= h($players->assists_average_limit) ?></td>
                <td><?= h($players->team_scored_limit) ?></td>
                <td><?= h($players->team_scored_average_limit) ?></td>
                <td><?= h($players->team_conceded_limit) ?></td>
                <td><?= h($players->team_conceded_average_limit) ?></td>
                <td><?= h($players->created) ?></td>
                <td><?= h($players->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Players', 'action' => 'view', $players->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Players', 'action' => 'edit', $players->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Players', 'action' => 'delete', $players->id], ['confirm' => __('Are you sure you want to delete # {0}?', $players->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
