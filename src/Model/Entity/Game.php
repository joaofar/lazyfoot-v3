<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Game Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $date
 * @property string $stage
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Assist[] $assists
 * @property \App\Model\Entity\Goal[] $goals
 * @property \App\Model\Entity\Invite[] $invites
 * @property \App\Model\Entity\Rating[] $ratings
 * @property \App\Model\Entity\Team[] $teams
 * @property \App\Model\Entity\Player[] $players
 */
class Game extends Entity
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
