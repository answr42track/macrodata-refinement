<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inny $inny
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Inny'), ['action' => 'edit', $inny->inny_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Inny'), ['action' => 'delete', $inny->inny_id], ['confirm' => __('Are you sure you want to delete # {0}?', $inny->inny_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Innies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Inny'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="innies view content">
            <h3><?= h($inny->inny_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Inny Id') ?></th>
                    <td><?= h($inny->inny_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inny Name') ?></th>
                    <td><?= h($inny->inny_name) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>