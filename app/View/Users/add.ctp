<?php
/* display message saved in session if any */
echo $this->Session->flash();
?>
<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('email');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>