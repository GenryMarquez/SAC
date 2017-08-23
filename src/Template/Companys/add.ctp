<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Companys'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Apisms'), ['controller' => 'Apisms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Apism'), ['controller' => 'Apisms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companys form large-9 medium-8 columns content">
    <?= $this->Form->create($company) ?>
    <fieldset>
        <legend><?= __('Add Company') ?></legend>
        <?php
            echo $this->Form->input('name_fiscal');
            echo $this->Form->input('tradename');
            echo $this->Form->input('address');
            echo $this->Form->input('taxid1');
            echo $this->Form->input('taxid2');
            echo $this->Form->input('phone');
            echo $this->Form->input('country');
            echo $this->Form->input('region');
            echo $this->Form->input('city');
            echo $this->Form->input('email');
            echo $this->Form->input('hash');
            echo $this->Form->input('apism_id', ['options' => $apisms]);
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
