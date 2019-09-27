<?php

require_once include_module('css');
require_once include_module('atom');

Common::$copy_list = ['css', 'images'];

Common::Add('__HEADER__', 'header.html');
Common::Add('__FOOTER__', 'footer.html');

Common::AddMarker('__AUTHOR_NAME__', 'Dejan Boras');
Common::AddMarker('__SITE_LINK__', 'https://dbx7.net');
Common::AddMarker('__FEED_TITLE__', 'dbx7 feed');
Common::AddMarker('__FEED_UUID__', '896851ae-228d-4f62-b6fa-09817c01ed07');
