<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $id
 * @property string $name_fiscal
 * @property string $tradename
 * @property string $address
 * @property string $taxid1
 * @property string $taxid2
 * @property string $phone
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $email
 * @property string $hash
 * @property int $apism_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $status
 *
 * @property \App\Model\Entity\Apism $apism
 */
class Company extends Entity
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
