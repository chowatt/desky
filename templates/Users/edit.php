<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit User</h3>
            </div>

            <?= $this->Form->create($user) ?>
            <div class="card-body">
                <div class="users form content">

                    <fieldset>
                        <?php
                        echo $this->Form->control('username');
                        echo $this->Form->control('first_name');
                        echo $this->Form->control('last_name');
                        echo $this->Form->control('email');
                        echo $this->Form->control('password');
                        echo $this->Form->control('token');
                        echo $this->Form->control('agent');
                        echo $this->Form->control('customer');
                        echo $this->Form->control('disabled');
                        ?>
                    </fieldset>

                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-secondary']); ?>

            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Properties</h3>
            </div>

            <div class="card-body">
                <dl>
                    <dt>Created</dt>
                    <dd><?= $user->created;?></dd>

                    <dt>Modified</dt>
                    <dd><?= $user->created;?></dd>
                </dl>
            </div>
        </div>
    </div>
</div>