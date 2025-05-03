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
            <?= $this->Html->link(__('List Innies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="innies form content">
            <?= $this->Form->create($inny) ?>
            <fieldset>
                <legend><?= __('Add Inny') ?></legend>
                <?php
                    echo $this->Form->control('inny_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
