<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo ucwords($users['User']['name']); ?></h1>

<p>Name: <?php echo $users['User']['password']; ?></small></p>
<p>Password: <?php echo md5($users['User']['password']); ?></small></p>

<?php echo $this->Html->link("Edit", array('controller' => 'users', 'action' => 'operation', $users['User']['id'])); ?>

 			<?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $users['User']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
