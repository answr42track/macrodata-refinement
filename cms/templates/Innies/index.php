<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Inny> $innies
 */
?>
<div class="innies index content">
    <?= $this->Html->link(__('New Inny'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Innies') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('inny_id') ?></th>
                    <th><?= $this->Paginator->sort('inny_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($innies as $inny): ?>
                <tr>
                    <td><?= h($inny->inny_id) ?></td>
                    <td><?= h($inny->inny_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $inny->inny_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inny->inny_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $inny->inny_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $inny->inny_id),
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