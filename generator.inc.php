<?php

require_once include_module('tidy');
require_once include_module('atom');

TidyModule::$configuration = [
    'indent' => false,
    'hide-comments' => true
];

Common::$copy_list = ['css', 'images', 'js'];

Common::Add('__FOOTER__', 'footer.html');
Common::Add('__POST_HEADER__', 'post_header.html');

Common::CreateCategory('grumpy', '__GRUMPY_POSTS_LIST__');

$grumpyPageType = new PageType();
$grumpyPageType->templateFile = 'post_template.html';
$grumpyPageType->SetDirectory('grumpy');
$grumpyPageType->category = 'grumpy';

Common::$markers->Add('__AUTHOR_NAME__', 'Dejan Boras');
Common::$markers->Add('__SITE_LINK__', 'https://dbx7.net');
Common::$markers->Add('__FEED_TITLE__', 'dbx7 feed');
Common::$markers->Add('__FEED_UUID__', '896851ae-228d-4f62-b6fa-09817c01ed07');
