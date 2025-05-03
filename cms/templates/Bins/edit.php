<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bin $bin
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bin->bin_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bin->bin_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bins'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="bins form content">
            <?= $this->Form->create($bin) ?>
            <fieldset>
                <legend><?= __('Edit Bin') ?></legend>
                <?php
                    echo $this->Form->control('bin_name');
                    echo $this->Form->control('project_id', ['options' => $projects]);
                    echo $this->Form->control('bin_progression');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
