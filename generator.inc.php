<?php

require_once include_module('css');
require_once include_module('atom');

Common::$copy_list = ['css', 'images', 'js'];

Common::Add('__FOOTER__', 'footer.html');
Common::Add('__POST_HEADER__', 'post_header.html');

Common::$markers->Add('__AUTHOR_NAME__', 'Dejan Boras');
Common::$markers->Add('__SITE_LINK__', 'https://dbx7.net');
Common::$markers->Add('__FEED_TITLE__', 'dbx7 feed');
Common::$markers->Add('__FEED_UUID__', '896851ae-228d-4f62-b6fa-09817c01ed07');
