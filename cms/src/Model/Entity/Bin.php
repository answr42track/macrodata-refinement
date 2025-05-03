<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bin Entity
 *
 * @property string $bin_id
 * @property string $bin_name
 * @property string $project_id
 * @property int $bin_progression
 *
 * @property \App\Model\Entity\Project $project
 */
class Bin extends Entity
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
        'bin_name' => true,
        'project_id' => true,
        'bin_progression' => true,
        'project' => true,
    ];
}
