<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bins Model
 *
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\BelongsTo $Projects
 *
 * @method \App\Model\Entity\Bin newEmptyEntity()
 * @method \App\Model\Entity\Bin newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Bin> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bin get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Bin findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Bin patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Bin> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bin|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Bin saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Bin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bin>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bin> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bin>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bin>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bin> deleteManyOrFail(iterable $entities, array $options = [])
 */
class BinsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('bins');
        $this->setDisplayField('bin_id');
        $this->setPrimaryKey('bin_id');

        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
            'joinType' => 'INNER',
        ]);
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
            ->scalar('bin_name')
            ->maxLength('bin_name', 255)
            ->requirePresence('bin_name', 'create')
            ->notEmptyString('bin_name');

        $validator
            ->scalar('project_id')
            ->maxLength('project_id', 36)
            ->notEmptyString('project_id');

        $validator
            ->notEmptyString('bin_progression');

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
        $rules->add($rules->existsIn(['project_id'], 'Projects'), ['errorField' => 'project_id']);

        return $rules;
    }
}
