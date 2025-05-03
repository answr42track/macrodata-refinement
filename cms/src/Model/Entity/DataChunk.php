<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DataChunk Entity
 *
 * @property string $data_chunk_id
 * @property string $user_id
 * @property string $project_id
 * @property string $bin_id
 * @property string $data
 * @property bool $refined
 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Bin $bin
 */
class DataChunk extends Entity
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
        'user_id' => true,
        'project_id' => true,
        'bin_id' => true,
        'data' => true,
        'refined' => true,
        'project' => true,
        'bin' => true,
    ];
}
