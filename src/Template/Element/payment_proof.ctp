<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Withdraw[]|\Cake\Collection\CollectionInterface $withdraws
 */

$withdrawal_methods = array_column_polyfill(get_withdrawal_methods(), 'name', 'id');
?>

<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th><?= __('Date') ?></th>
            <th><?= __('Username') ?></th>
            <th><?= __('Amount') ?></th>
            <th><?= __('Method') ?></th>
        </tr>
        </thead>
        <?php foreach ($withdraws as $withdraw) : ?>
            <tr>
                <td><?= display_date_timezone($withdraw->created); ?></td>
                <td><?= h(substr($withdraw->user->username, 0, 3)) . '******' ?></td>
                <td><?= display_price_currency($withdraw->amount); ?></td>
                <td><?= (isset($withdrawal_methods[$withdraw->method])) ?
                        $withdrawal_methods[$withdraw->method] : $withdraw->method ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<ul class="pagination">
    <!-- Shows the previous link -->
    <?php
    if ($this->Paginator->hasPrev()) {
        echo $this->Paginator->prev(
            '«',
            ['tag' => 'li'],
            null,
            ['class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a']
        );
    }

    ?>
    <!-- Shows the page numbers -->
    <?php //echo $this->Paginator->numbers();    ?>
    <?php
    echo $this->Paginator->numbers([
        'modulus' => 4,
        'separator' => '',
        'ellipsis' => '<li><a>...</a></li>',
        'tag' => 'li',
        'currentTag' => 'a',
        'first' => 2,
        'last' => 2,
    ]);

    ?>
    <!-- Shows the next link -->
    <?php
    if ($this->Paginator->hasNext()) {
        echo $this->Paginator->next(
            '»',
            ['tag' => 'li'],
            null,
            ['class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a']
        );
    }

    ?>
</ul>
