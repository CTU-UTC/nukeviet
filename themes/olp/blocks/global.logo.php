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

if (!nv_function_exists('nv_logo')) {
    /**
     * nv_company_info_config()
     *
     * @param string $module
     * @param array  $data_block
     * @param array  $lang_block
     * @return string
     */
    function nv_logo_config($module, $data_block, $lang_block)
    {
        global $lang_global, $selectthemes;

        // Find language file
        if (file_exists(NV_ROOTDIR . '/themes/' . $selectthemes . '/language/' . NV_LANG_INTERFACE . '.php')) {
            include NV_ROOTDIR . '/themes/' . $selectthemes . '/language/' . NV_LANG_INTERFACE . '.php';
        }

        $html = '<div class="form-group">';
        $html .= '<span class="form-label>Chọn ảnh</span>';
        $html .= '<input type="file" class="form-control"/>';
        $html .= '</div>';

        return $html;
    }

    /**
     * nv_company_info_submit()
     *
     * @return array
     */
    function nv_logo_submit()
    {
        global $nv_Request;

        $return = [];
        $return['error'] = [];
        $return['config']['company_name'] = $nv_Request->get_title('config_company_name', 'post');
        $return['config']['company_sortname'] = $nv_Request->get_title('config_company_sortname', 'post');
        $return['config']['company_regcode'] = $nv_Request->get_title('config_company_regcode', 'post');
        $return['config']['company_regplace'] = $nv_Request->get_title('config_company_regplace', 'post');
        $return['config']['company_licensenumber'] = $nv_Request->get_title('config_company_licensenumber', 'post');
        $return['config']['company_responsibility'] = $nv_Request->get_title('config_company_responsibility', 'post');
        $return['config']['company_address'] = $nv_Request->get_title('config_company_address', 'post');
        $return['config']['company_showmap'] = $nv_Request->get_int('config_company_showmap', 'post', 0) == 0 ? 0 : 1;
        $return['config']['company_mapurl'] = $nv_Request->get_title('config_company_mapurl', 'post', '');
        $return['config']['company_phone'] = $nv_Request->get_title('config_company_phone', 'post');
        $return['config']['company_fax'] = $nv_Request->get_title('config_company_fax', 'post');
        $return['config']['company_email'] = $nv_Request->get_title('config_company_email', 'post');
        $return['config']['company_website'] = $nv_Request->get_title('config_company_website', 'post');

        return $return;
    }

    /**
     * nv_company_info()
     *
     * @param array $block_config
     * @return string
     */
    function nv_logo($block_config)
    {
        global $global_config, $lang_global;

        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks/global.logo.tpl')) {
            $block_theme = $global_config['module_theme'];
        } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/blocks/global.logo.tpl')) {
            $block_theme = $global_config['site_theme'];
        } else {
            $block_theme = 'default';
        }

        $xtpl = new XTemplate('global.logo.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/blocks');
        $xtpl->assign('LANG', $lang_global);
        $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
        $xtpl->assign('DATA', $block_config);

        $xtpl->parse('main');

        return $xtpl->text('main');
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_logo($block_config);
}
