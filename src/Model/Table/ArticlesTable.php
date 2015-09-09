<?php
namespace App\Model\Table;

use App\Model\Entity\Article;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\BelongsTo $Orderstatus
 * @property \Cake\ORM\Association\HasMany $Lineorders
 * @property \Cake\ORM\Association\HasMany $Storages
 * @property \Cake\ORM\Association\HasMany $Userarticles
 */
class ArticlesTable extends Table
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

        $this->table('articles');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Orderstatus', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Lineorders', [
            'foreignKey' => 'article_id'
        ]);
        $this->hasMany('Storages', [
            'foreignKey' => 'article_id'
        ]);
        $this->hasMany('Userarticles', [
            'foreignKey' => 'article_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('label', 'create')
            ->notEmpty('label');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->add('is_ordered', 'valid', ['rule' => 'boolean'])
            ->requirePresence('is_ordered', 'create')
            ->notEmpty('is_ordered');

        $validator
            ->add('is_sale', 'valid', ['rule' => 'boolean'])
            ->requirePresence('is_sale', 'create')
            ->notEmpty('is_sale');

        $validator
            ->add('published', 'valid', ['rule' => 'boolean'])
            ->requirePresence('published', 'create')
            ->notEmpty('published');

        $validator
            ->add('rating_cache', 'valid', ['rule' => 'numeric'])
            ->requirePresence('rating_cache', 'create')
            ->notEmpty('rating_cache');

        $validator
            ->add('rating_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('rating_count', 'create')
            ->notEmpty('rating_count');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->add('pricing', 'valid', ['rule' => 'numeric'])
            ->requirePresence('pricing', 'create')
            ->notEmpty('pricing');

        $validator
            ->requirePresence('short_description', 'create')
            ->notEmpty('short_description');

        $validator
            ->requirePresence('long_description', 'create')
            ->notEmpty('long_description');

        $validator
            ->requirePresence('icon_link', 'create')
            ->notEmpty('icon_link');

        $validator
            ->requirePresence('img_link', 'create')
            ->notEmpty('img_link');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['status_id'], 'Orderstatus'));
        return $rules;
    }
}
