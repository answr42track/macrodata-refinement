<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Bin> $bins
 */
?>
<div class="bins index content">
    <?= $this->Html->link(__('New Bin'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bins') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('bin_id') ?></th>
                    <th><?= $this->Paginator->sort('bin_name') ?></th>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('bin_progression') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bins as $bin): ?>
                <tr>
                    <td><?= h($bin->bin_id) ?></td>
                    <td><?= h($bin->bin_name) ?></td>
                    <td><?= $bin->hasValue('project') ? $this->Html->link($bin->project->project_id, ['controller' => 'Projects', 'action' => 'view', $bin->project->project_id]) : '' ?></td>
                    <td><?= $this->Number->format($bin->bin_progression) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bin->bin_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bin->bin_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $bin->bin_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $bin->bin_id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>