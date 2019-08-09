<?php

Common::$copy_list = ['css', 'images'];

Common::Add('__HEADER__', 'header.html');
Common::Add('__FOOTER__', 'footer.html');

Pages::add_post('Projects', 'projects.html', '2019-06-06');

Pages::add_page('About', 'about.html');
Pages::add_index('Home', 'index.html');
