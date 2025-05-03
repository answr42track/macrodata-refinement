<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bin $bin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bin'), ['action' => 'edit', $bin->bin_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bin'), ['action' => 'delete', $bin->bin_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bin->bin_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bins'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bin'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="bins view content">
            <h3><?= h($bin->bin_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bin Id') ?></th>
                    <td><?= h($bin->bin_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bin Name') ?></th>
                    <td><?= h($bin->bin_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $bin->hasValue('project') ? $this->Html->link($bin->project->project_id, ['controller' => 'Projects', 'action' => 'view', $bin->project->project_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Bin Progression') ?></th>
                    <td><?= $this->Number->format($bin->bin_progression) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>