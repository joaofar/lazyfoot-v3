<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $player->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?></li>
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
<div class="players form large-9 medium-8 columns content">
    <?= $this->Form->create($player) ?>
    <fieldset>
        <legend><?= __('Edit Player') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('conv');
            echo $this->Form->input('games_played');
            echo $this->Form->input('wins');
            echo $this->Form->input('win_percentage');
            echo $this->Form->input('goals');
            echo $this->Form->input('goals_average');
            echo $this->Form->input('assists');
            echo $this->Form->input('assists_average');
            echo $this->Form->input('team_scored');
            echo $this->Form->input('team_scored_average');
            echo $this->Form->input('team_conceded');
            echo $this->Form->input('team_conceded_average');
            echo $this->Form->input('wins_limit');
            echo $this->Form->input('win_percentage_limit');
            echo $this->Form->input('goals_limit');
            echo $this->Form->input('goals_average_limit');
            echo $this->Form->input('assists_limit');
            echo $this->Form->input('assists_average_limit');
            echo $this->Form->input('team_scored_limit');
            echo $this->Form->input('team_scored_average_limit');
            echo $this->Form->input('team_conceded_limit');
            echo $this->Form->input('team_conceded_average_limit');
            echo $this->Form->input('games._ids', ['options' => $games]);
            echo $this->Form->input('teams._ids', ['options' => $teams]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
