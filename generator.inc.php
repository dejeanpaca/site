<?php

require_once include_module('css');
require_once include_module('rss');

Common::$copy_list = ['css', 'images'];

Common::Add('__HEADER__', 'header.html');
Common::Add('__FOOTER__', 'footer.html');
