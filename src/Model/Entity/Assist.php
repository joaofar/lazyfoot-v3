<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Assist Entity
 *
 * @property int $id
 * @property int $game_id
 * @property int $team_id
 * @property int $player_id
 * @property int $assists
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Game $game
 * @property \App\Model\Entity\Team $team
 * @property \App\Model\Entity\Player $player
 */
class Assist extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
