<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $cases
 */
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cases</h3>
    </div>

    <div class="card-body">
        <div class="cases index content">
            <?= $this->Html->link(__('New Case'), ['action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
            <h3><?= __('Cases') ?></h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('title') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('last_update') ?></th>
                            <th><?= $this->Paginator->sort('department') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cases as $case) : ?>
                            <tr>
                                <td><?= $this->Number->format($case->id) ?></td>
                                <td><?= h($case->title) ?></td>
                                <td><?= h($case->created) ?></td>
                                <td></td>
                                <td><?= h($case->department_id) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $case->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $case->id], ['confirm' => __('Are you sure you want to delete # {0}?', $case->id)]) ?>
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
    </div>
</div>