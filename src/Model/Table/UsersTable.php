<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\AccessLevelsTable|\Cake\ORM\Association\BelongsTo $AccessLevels
 * @property |\Cake\ORM\Association\HasMany $RestaurantData
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('full_name');
        $this->setPrimaryKey('id');

        $this->belongsTo('AccessLevels', [
            'foreignKey' => 'access_level_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('RestaurantData', [
            'foreignKey' => 'user_id'
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
            ->scalar('full_name')
            ->maxLength('full_name', 255)
            ->requirePresence('full_name', 'create')
            ->notEmpty('full_name','rellene este campo')
            ->notEmptyString('full_name');

        $validator
            ->scalar('street')
            ->maxLength('street', 255)
            ->requirePresence('street', 'create')
            ->notEmpty('street','rellene este campo')
            ->notEmptyString('street');

        $validator
            ->add('phone','valid',['rule' =>array('minLength', '9'),'rule'=>'numeric','message'=>'ingrese un numero de telefono correcto'])
            ->maxLength('phone', 255)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone')
            ->notEmpty('phone','rellene este campo');

        $validator
            ->add('identifier','valid',['rule'=>'naturalNumber','message'=>'indrese un acceso valido'])
            ->requirePresence('identifier', 'create')
            ->notEmpty('identifier')
            ->notEmptyString('identifier');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->notEmpty('email','rellene este campo')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->add('password','valid',['rule'=>'alphaNumeric','message'=>'la contraseÃ±a puede contener numeros y letras y como minimo 6 caracteres ','rule' =>array('minLength', '6')])
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->allowEmptyString('password', false);


        return $validator;
    }
    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
         $rules->add($rules->isUnique(['Pphone']));
        $rules->add($rules->existsIn(['access_level_id'], 'AccessLevels'));

        return $rules;
    }
}
