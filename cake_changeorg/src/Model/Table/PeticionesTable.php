<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Peticiones Model
 *
 * @property \App\Model\Table\CategoriasTable&\Cake\ORM\Association\BelongsTo $Categorias
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Peticione newEmptyEntity()
 * @method \App\Model\Entity\Peticione newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Peticione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Peticione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Peticione findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Peticione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Peticione[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Peticione|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Peticione saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Peticione[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Peticione[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Peticione[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Peticione[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PeticionesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('peticiones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
                   'photo' => [
                       'nameCallback' => function ($table,$entity,$data,$field,$settings) {
                        $newName = uniqid().'_'.str_replace(" ",'_',$data->getClientFilename());
                        return $newName;
                       },
                       'keepFilesOnDelete' => false
                   ]
        ]);
        $this->belongsTo('Categorias', [
            'foreignKey' => 'categorias_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
        ]);
        /*$this->belongsToMany('Users', [
            'foreignKey' => 'peticione_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'peticiones_users',
        ]);*/
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->scalar('destinatario')
            ->requirePresence('destinatario', 'create')
            ->notEmptyString('destinatario');

        $validator
            ->integer('firmantes')
            ->notEmptyString('firmantes');

        $validator
            ->scalar('estado')
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

     /*   $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->requirePresence('photo', 'create')
            ->notEmptyString('photo');*/

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('categorias_id', 'Categorias'), ['errorField' => 'categorias_id']);
        $rules->add($rules->existsIn('users_id', 'Users'), ['errorField' => 'users_id']);

        return $rules;
    }
}
