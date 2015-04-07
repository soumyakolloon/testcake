<h1>Users</h1>
<p><?php echo $this->Html->link("Add User", array('action' => 'operation')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Password</th>
    </tr>



    <tr>

<?php if ($this->Session->read('Auth.User')): ?>
        You are logged in as <?php echo $this->Session->read('Auth.User.username'); ?>. <?php echo $this->Html->link('logout', array('controller' => 'users', 'action' => 'logout')); ?>
    <?php else: ?>
        <?php echo $this->Html->link('login', array('controller' => 'users', 'action' => 'login')); ?>
    <?php endif; ?>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['name'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>

        </td>
        <td><?php echo md5($user['User']['password']); ?></td>
    </tr>
    <?php endforeach; ?>

    <?php unset($users); ?>

</table>