<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->assign('title', __('Add User'));
$this->assign('description', '');
$this->assign('content_title', __('Add User'));
?>

<div class="box box-primary">
    <div class="box-body">

        <?= $this->Form->create($user); ?>

        <?=
        $this->Form->control('role', [
            'label' => __('Role'),
            'options' => [
                'member' => __('Member'),
                'admin' => __('Admin')
            ],
            'class' => 'form-control'
        ]);
        ?>

        <?=
        $this->Form->control('status', [
            'label' => __('Status'),
            'options' => [
                1 => __('Active'),
                2 => __('Pending'),
                3 => __('Inactive')
            ],
            'class' => 'form-control'
        ]);
        ?>

        <?=
        $this->Form->control('username', [
            'label' => __('Username'),
            'class' => 'form-control'
        ])
        ?>

        <?=
        $this->Form->control('email', [
            'label' => __('Email'),
            'type' => 'email',
            'class' => 'form-control'
        ])
        ?>


        <?=
        $this->Form->control('password', [
            'label' => __('Password'),
            'class' => 'form-control'
        ])
        ?>

        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']); ?>

        <?= $this->Form->end(); ?>
    </div>
</div>
