<?php

if (!function_exists('load_css')) {
    function load_css($return = false)
    {
        $CI = get_instance();

        if (isset($CI->ci_simple_template)) {
            ob_start();

            foreach ($CI->ci_simple_template->getCSS() as $css) {
                ?>
                    <link rel="stylesheet" type="text/css" href="<?=$css?>" />
                <?
            }

            $html = ob_get_clean();

            if ($return) {
                return $html;
            }
            else {
                echo $html;
            }
        }

        return false;
    }
}

if (!function_exists('load_js')) {
    function load_js($return = false)
    {
        $CI = get_instance();

        if (isset($CI->ci_simple_template)) {
            ob_start();

            foreach ($CI->ci_simple_template->getJS() as $js) {
                ?>
                    <script type="text/javascript" src="<?=$js?>"></script>
                <?
            }

            $html = ob_get_clean();

            if ($return) {
                return $html;
            }
            else {
                echo $html;
            }
        }

        return false;
    }
}