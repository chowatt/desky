<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<h1><?= __("Administrator Accounts");?></h1>

<div class="row">
    <aside class="col-md-2">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                </li>
            </ul>
        </div>
    </aside>
    <div class="col-md-8">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                echo $this->Form->control('username');
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                echo $this->Form->control('roles._ids');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>