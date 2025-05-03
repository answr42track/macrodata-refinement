<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Project> $projects
 */
?>
<div class="projects index content">
    <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Projects') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('project_name') ?></th>
                    <th><?= $this->Paginator->sort('progression') ?></th>
                    <th><?= $this->Paginator->sort('inny_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?= h($project->project_id) ?></td>
                    <td><?= h($project->project_name) ?></td>
                    <td><?= $this->Number->format($project->progression) ?></td>
                    <td><?= $project->hasValue('inny') ? $this->Html->link($project->inny->inny_id, ['controller' => 'Innies', 'action' => 'view', $project->inny->inny_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $project->project_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->project_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $project->project_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $project->project_id),
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