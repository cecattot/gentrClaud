<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa[]|\Cake\Collection\CollectionInterface $pessoas
 */
?>
<div class="pessoas index content">
    <?= $this->Html->link(__('New Pessoa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pessoas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th><?= $this->Paginator->sort('senha') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoas as $pessoa): ?>
                <tr>
                    <td><?= $this->Number->format($pessoa->id) ?></td>
                    <td><?= h($pessoa->nome) ?></td>
                    <td><?= h($pessoa->email) ?></td>
                    <td><?= h($pessoa->telefone) ?></td>
                    <td><?= h($pessoa->cpf) ?></td>
                    <td><?= h($pessoa->senha) ?></td>
                    <td><?= h($pessoa->created) ?></td>
                    <td><?= h($pessoa->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pessoa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id)]) ?>
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
