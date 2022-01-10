<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PeticionesUser Entity
 *
 * @property int $id
 * @property int $peticiones_id
 * @property int $users_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 *
 * @property \App\Model\Entity\Peticione $peticione
 * @property \App\Model\Entity\User $user
 */
class PeticionesUser extends Entity
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
        'peticiones_id' => true,
        'users_id' => true,
        'created' => true,
        'updated' => true,
        'peticione' => true,
        'user' => true,
    ];
}
