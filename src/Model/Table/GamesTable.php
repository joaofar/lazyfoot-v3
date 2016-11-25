<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Games Model
 *
 * @property \Cake\ORM\Association\HasMany $Assists
 * @property \Cake\ORM\Association\HasMany $Goals
 * @property \Cake\ORM\Association\HasMany $Invites
 * @property \Cake\ORM\Association\HasMany $Ratings
 * @property \Cake\ORM\Association\HasMany $Teams
 * @property \Cake\ORM\Association\BelongsToMany $Players
 *
 * @method \App\Model\Entity\Game get($primaryKey, $options = [])
 * @method \App\Model\Entity\Game newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Game[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Game|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Game patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Game[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Game findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GamesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('games');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Assists', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Goals', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Invites', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Ratings', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Teams', [
            'foreignKey' => 'game_id'
        ]);
        $this->belongsToMany('Players', [
            'foreignKey' => 'game_id',
            'targetForeignKey' => 'player_id',
            'joinTable' => 'games_players'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->requirePresence('stage', 'create')
            ->notEmpty('stage');

        return $validator;
    }

    public function count()
    {
        return $this->find()->where(['stage' => 'view'])->count();
    }
}
