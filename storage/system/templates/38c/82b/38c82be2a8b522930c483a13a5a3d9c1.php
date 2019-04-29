
<?= partial('local/tabs', ['activeTab' => 'menus']); ?>

<div class="panel">
    <div class="d-block d-sm-none">
        <div class="categories">
            <?= component('categories'); ?>
        </div>
    </div>

    <div class="panel-body">
        <?= component('localMenu') ?>
    </div>
</div>