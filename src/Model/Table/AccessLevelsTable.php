<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccessLevels Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\AccessLevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\AccessLevel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AccessLevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccessLevel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccessLevel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccessLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AccessLevel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccessLevel findOrCreate($search, callable $callback = null, $options = [])
 */
class AccessLevelsTable extends Table
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

        $this->setTable('access_levels');
        $this->setDisplayField('access_level');
        $this->setPrimaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'access_level_id'
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
            ->allowEmptyString('id', 'create');

        $validator
            ->integer('access_level')
            ->requirePresence('access_level', 'create')
            ->notEmptyString('access_level');

        return $validator;
    }
}
