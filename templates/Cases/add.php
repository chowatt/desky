<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create Case</h3>
    </div>

    <?= $this->Form->create($case) ?>
    <div class="card-body">
        <div class="cases form content">
            <fieldset>
                <?php
                echo $this->Form->control('title');
                echo $this->Form->control('first_name');
                ?>
            </fieldset>
        </div>
    </div>

    <div class="card-footer">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-secondary']); ?>

    </div>
    <?= $this->Form->end() ?>
</div>