<?php use Cake\I18n\Time; ?>

<div class="games index">
    <table>
    <?php foreach ($games as $game): ?>
    <tr>
        
        
        <td><?php echo h($game->id); ?>&nbsp;</td>
        <td><?php echo $this->Html->link(__($game->stage), array('action' => $game->stage, $game->id)); ?>&nbsp;</td>
        <td><?php echo h($game->teams[0]->score); ?>&nbsp;</td>
        <td><?php echo h($game->teams[1]->score); ?>&nbsp;</td>
        <td>
            <?php
                $date = new Time($game->date);
                echo h($this->Time->i18nFormat($date)); 
            ?>
            &nbsp;
        </td>


    </tr>
<?php endforeach; ?>
    </table>
    <p>
    <?php
    echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>  </p>

    <div class="paging">
    <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
    </div>
</div>
