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