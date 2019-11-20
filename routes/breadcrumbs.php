<?php

//////////////// Admin Breadcrumbs ///////////////////
// Dashboard
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});
Breadcrumbs::for('admin.profile', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push("Profile", route('admin.profile'));
});
Breadcrumbs::for('admin.change-password', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push("Change Password", route('admin.change-password'));
});

// Home > [Banner]
Breadcrumbs::for('admin.banner.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push("Banner", route('admin.banner.index'));
});
Breadcrumbs::for('admin.banner.create', function ($trail) {
    $trail->parent('admin.banner.index');
    $trail->push("Create", route('admin.banner.create'));
});
Breadcrumbs::for('admin.banner.edit', function ($trail, $banner) {
    $trail->parent('admin.banner.index');
    $trail->push("Edit", route('admin.banner.edit', $banner));
});

// Home > [Category]
Breadcrumbs::for('admin.category.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push("Category", route('admin.category.index'));
});
Breadcrumbs::for('admin.category.create', function ($trail) {
    $trail->parent('admin.category.index');
    $trail->push("Create", route('admin.category.create'));
});
Breadcrumbs::for('admin.category.edit', function ($trail, $banner) {
    $trail->parent('admin.category.index');
    $trail->push("Edit", route('admin.category.edit', $banner));
});

// Home > [Sub Category]
Breadcrumbs::for('admin.sub-category.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push("Sub Category", route('admin.sub-category.index'));
});
Breadcrumbs::for('admin.sub-category.create', function ($trail) {
    $trail->parent('admin.sub-category.index');
    $trail->push("Create", route('admin.sub-category.create'));
});
Breadcrumbs::for('admin.sub-category.edit', function ($trail, $banner) {
    $trail->parent('admin.sub-category.index');
    $trail->push("Edit", route('admin.sub-category.edit', $banner));
});
