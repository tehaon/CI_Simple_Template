<?php

#Load configs when spark is loaded.
$autoload['config'] = array('paths');

#Load helpers when spark is loaded.
$autoload['helper'] = array('ci_simple_template_helper');

#Load libraries when spark is loaded.
$autoload['libraries'] = array('CI_Simple_Template');