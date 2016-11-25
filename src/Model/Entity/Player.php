<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Player Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $conv
 * @property int $games_played
 * @property int $wins
 * @property float $win_percentage
 * @property float $goals_average
 * @property float $assists_average
 * @property int $team_scored
 * @property float $team_scored_average
 * @property int $team_conceded
 * @property float $team_conceded_average
 * @property int $wins_limit
 * @property float $win_percentage_limit
 * @property int $goals_limit
 * @property float $goals_average_limit
 * @property int $assists_limit
 * @property float $assists_average_limit
 * @property int $team_scored_limit
 * @property float $team_scored_average_limit
 * @property int $team_conceded_limit
 * @property float $team_conceded_average_limit
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Goal[] $goals
 * @property \App\Model\Entity\Assist[] $assists
 * @property \App\Model\Entity\Invite[] $invites
 * @property \App\Model\Entity\Rating[] $ratings
 * @property \App\Model\Entity\Game[] $games
 * @property \App\Model\Entity\Team[] $teams
 */
class Player extends Entity
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
