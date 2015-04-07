<h1><?php echo $label; ?></h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('name');
echo $this->Form->input('password', array('password' => 'Password'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Add User');
?>