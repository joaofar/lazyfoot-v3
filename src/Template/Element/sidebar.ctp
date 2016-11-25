<script>
    $(document).ready(function() {
        $('.sparktristate').sparkline('html', {type: 'tristate'});
    });
</script>

<?php //$data = $this->requestAction('Players/sidebarStats'); 
//debug($tristate);
?>

<!-- GAME STATS -->
<div class=stats>
    <table class="sidebar">
        <caption>game stats</caption>

        <tr>
            <td>nº jogos: </td>
            <td><?= $nGames; ?></td>
        </tr>
        <tr>
            <td>nº golos: </td>
            <td><?= $nGoals; ?></td>
        </tr>
    </table>


</div>

<!-- RANKING -->
<div class=ranking>
    <table class="sidebar link">
        <caption>ranking</caption>
        <?php
        $i = 1;
        foreach ($rankingSidebar as $player): ?>
            <tr>
                <td class="num"><?php echo $i++; ?>º</td>
                <td class="player"><?php echo $this->Html->link(__($player['name']), array('controller' => 'Players', 'action' => 'view', $player['id'])); ?></td>
                <td class="rank"><?php echo round($player['rating'], 1); ?></td>
                <td>
                    <span class="sparktristate">
                        <?= $this->Text->toList($player['tristate'], ', ', ', '); ?>
                    </span>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- PLAYER STATS -->
<div class=stats>
    <table class="sidebar">
        <caption>player stats</caption>
        <tr>
            <td>golos p/j: </td>
            <td><?= $topGoals['name']; ?>
                (<?= $topGoals['goals_average_limit']; ?>)</td>
        </tr>
        <tr>
            <td>assist p/j: </td>
            <td><?= $topAssists['name']; ?>

                (<?= $topAssists['assists_average_limit']; ?>)</td>
        </tr>
        <tr>
            <td>EM p/j: </td>
            <td><?= $offensiveInfluence['name']; ?>
                (<?= $offensiveInfluence['team_scored_average_limit']; ?>)</td>
        </tr>
        <tr>
            <td>ES p/j: </td>
            <td><?= $defensiveInfluence['name']; ?>
                (<?= $defensiveInfluence['team_conceded_average_limit']; ?>)</td>
        </tr>
    </table>
</div>

