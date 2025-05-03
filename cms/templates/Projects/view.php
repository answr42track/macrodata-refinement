<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->project_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->project_id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->project_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="projects view content">
            <h3><?= h($project->project_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Project Id') ?></th>
                    <td><?= h($project->project_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project Name') ?></th>
                    <td><?= h($project->project_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inny') ?></th>
                    <td><?= $project->hasValue('inny') ? $this->Html->link($project->inny->inny_id, ['controller' => 'Innies', 'action' => 'view', $project->inny->inny_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Progression') ?></th>
                    <td><?= $this->Number->format($project->progression) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>