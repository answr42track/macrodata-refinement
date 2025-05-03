<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property string $project_id
 * @property string $project_name
 * @property int $progression
 * @property string|null $inny_id
 *
 * @property \App\Model\Entity\Inny $inny
 */
class Project extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'project_name' => true,
        'progression' => true,
        'inny_id' => true,
        'inny' => true,
    ];
}
