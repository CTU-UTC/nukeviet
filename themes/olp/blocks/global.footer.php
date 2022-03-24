<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

if (!nv_function_exists('nv_footer')) {
    /**
     * nv_footer_config()
     *
     * @param string $module
     * @param array  $data_block
     * @param array  $lang_block
     * @return string
     */
    function nv_footer_config($module, $data_block, $lang_block)
    {
        global $lang_global,$global_config, $selectthemes;

        // Find language file
        if (file_exists(NV_ROOTDIR . '/themes/' . $selectthemes . '/language/' . NV_LANG_INTERFACE . '.php')) {
            include NV_ROOTDIR . '/themes/' . $selectthemes . '/language/' . NV_LANG_INTERFACE . '.php';
        }

        $html = '<div class="form-group">';
        $html .= '<img src="/' . $global_config['site_logo'].'" />';
        $html .= '</div>';

        return $html;
    }

    /**
     * nv_company_info_submit()
     *
     * @return array
     */
    function nv_footer_submit()
    {
        global $nv_Request;

        $return = [];
        $return['error'] = [];
        $return['config']['company_name'] = $nv_Request->get_title('config_company_name', 'post');

        return $return;
    }

    /**
     * nv_footer()
     *
     * @param array $block_config
     * @return string
     */
    function nv_footer($block_config)
    {
        global $global_config, $lang_global;

        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks/global.footer.tpl')) {
            $block_theme = $global_config['module_theme'];
        } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/blocks/global.footer.tpl')) {
            $block_theme = $global_config['site_theme'];
        } else {
            $block_theme = 'default';
        }

        $xtpl = new XTemplate('global.footer.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/blocks');
        $xtpl->assign('LANG', $lang_global);
        $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
        $xtpl->assign('DATA', $global_config);

        $xtpl->parse('main');

        return $xtpl->text('main');
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_footer($block_config);
}
