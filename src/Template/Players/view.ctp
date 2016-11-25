<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Player'), ['action' => 'edit', $player->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Player'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assists'), ['controller' => 'Assists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assist'), ['controller' => 'Assists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Goals'), ['controller' => 'Goals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Goal'), ['controller' => 'Goals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invites'), ['controller' => 'Invites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invite'), ['controller' => 'Invites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ratings'), ['controller' => 'Ratings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rating'), ['controller' => 'Ratings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="players view large-9 medium-8 columns content">
    <h3><?= h($player->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($player->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($player->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($player->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conv') ?></th>
            <td><?= $this->Number->format($player->conv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Games Played') ?></th>
            <td><?= $this->Number->format($player->games_played) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wins') ?></th>
            <td><?= $this->Number->format($player->wins) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Win Percentage') ?></th>
            <td><?= $this->Number->format($player->win_percentage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goals') ?></th>
            <td><?= $this->Number->format($player->goals) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goals Average') ?></th>
            <td><?= $this->Number->format($player->goals_average) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assists') ?></th>
            <td><?= $this->Number->format($player->assists) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assists Average') ?></th>
            <td><?= $this->Number->format($player->assists_average) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Scored') ?></th>
            <td><?= $this->Number->format($player->team_scored) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Scored Average') ?></th>
            <td><?= $this->Number->format($player->team_scored_average) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Conceded') ?></th>
            <td><?= $this->Number->format($player->team_conceded) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Conceded Average') ?></th>
            <td><?= $this->Number->format($player->team_conceded_average) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wins Limit') ?></th>
            <td><?= $this->Number->format($player->wins_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Win Percentage Limit') ?></th>
            <td><?= $this->Number->format($player->win_percentage_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goals Limit') ?></th>
            <td><?= $this->Number->format($player->goals_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goals Average Limit') ?></th>
            <td><?= $this->Number->format($player->goals_average_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assists Limit') ?></th>
            <td><?= $this->Number->format($player->assists_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assists Average Limit') ?></th>
            <td><?= $this->Number->format($player->assists_average_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Scored Limit') ?></th>
            <td><?= $this->Number->format($player->team_scored_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Scored Average Limit') ?></th>
            <td><?= $this->Number->format($player->team_scored_average_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Conceded Limit') ?></th>
            <td><?= $this->Number->format($player->team_conceded_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Conceded Average Limit') ?></th>
            <td><?= $this->Number->format($player->team_conceded_average_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($player->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($player->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Assists') ?></h4>
        <?php if (!empty($player->assists)): ?>
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
            <?php foreach ($player->assists as $assists): ?>
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
        <?php if (!empty($player->goals)): ?>
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
            <?php foreach ($player->goals as $goals): ?>
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
        <?php if (!empty($player->invites)): ?>
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
            <?php foreach ($player->invites as $invites): ?>
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
        <?php if (!empty($player->ratings)): ?>
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
            <?php foreach ($player->ratings as $ratings): ?>
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
        <h4><?= __('Related Games') ?></h4>
        <?php if (!empty($player->games)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Stage') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($player->games as $games): ?>
            <tr>
                <td><?= h($games->id) ?></td>
                <td><?= h($games->date) ?></td>
                <td><?= h($games->stage) ?></td>
                <td><?= h($games->created) ?></td>
                <td><?= h($games->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Games', 'action' => 'view', $games->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Games', 'action' => 'edit', $games->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Games', 'action' => 'delete', $games->id], ['confirm' => __('Are you sure you want to delete # {0}?', $games->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Teams') ?></h4>
        <?php if (!empty($player->teams)): ?>
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
            <?php foreach ($player->teams as $teams): ?>
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
</div>
