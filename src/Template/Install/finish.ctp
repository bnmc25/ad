<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', __('Installation successful'));

?>

<div class="install">

    <div class="text-center">
        <a href="<?= $this->Url->build('/'); ?>" class="btn btn-primary"><?= __('Access Home') ?></a>
        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'signin', 'prefix' => 'auth']); ?>"
           class="btn btn-success"><?= __('Access Dashboard') ?></a> :: <a target="_blank" href="https://www.20script.ir/">20script</a>
    </div>
</div>
