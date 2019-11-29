<?php

Breadcrumbs::for('admin.log.index', function ($trail) {
    $trail->push(__('Log Dashboard'), route('admin.log.index'));
});