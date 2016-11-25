<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $assist->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $assist->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Assists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assists form large-9 medium-8 columns content">
    <?= $this->Form->create($assist) ?>
    <fieldset>
        <legend><?= __('Edit Assist') ?></legend>
        <?php
            echo $this->Form->input('game_id', ['options' => $games]);
            echo $this->Form->input('team_id', ['options' => $teams]);
            echo $this->Form->input('player_id', ['options' => $players]);
            echo $this->Form->input('assists');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
