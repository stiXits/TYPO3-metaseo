<?php

return array(
    'ctrl'      => array(
        'title'         => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root',
        'label'         => 'uid',
        'adminOnly'     => true,
        'iconfile'      => 'page',
        'hideTable'     => true,
        'dividers2tabs' => true,
    ),
    'interface' => array(
        'always_description'  => true,
        'showRecordFieldList' => 'is_robotstxt,robotstxt',
    ),
    'columns'   => array(
        'is_sitemap'                        => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.is_sitemap',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'is_sitemap_page_indexer'           => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.is_sitemap_page_indexer',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'is_sitemap_typolink_indexer'       => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.is_sitemap_typolink_indexer',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'is_sitemap_language_lock'          => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.is_sitemap_language_lock',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'sitemap_page_limit'                => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.sitemap_page_limit',
            'config' => array(
                'type'  => 'input',
                'size'  => '10',
                'max'   => '10',
                'eval'  => 'int',
                'range' => array(
                    'upper' => '1000000',
                    'lower' => '0',
                ),
            ),
        ),
        'sitemap_priorty'                   => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.sitemap_priorty',
            'config' => array(
                'type' => 'input',
                'size' => '6',
                'max'  => '6',
                'eval' => 'tx_metaseo_backend_validation_float',
            ),
        ),
        'sitemap_priorty_depth_multiplier'  => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.sitemap_priorty_depth_multiplier',
            'config' => array(
                'type' => 'input',
                'size' => '6',
                'max'  => '6',
                'eval' => 'tx_metaseo_backend_validation_float',
            ),
        ),
        'sitemap_priorty_depth_modificator' => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.sitemap_priorty_depth_modificator',
            'config' => array(
                'type' => 'input',
                'size' => '6',
                'max'  => '6',
                'eval' => 'tx_metaseo_backend_validation_float',
            ),
        ),
        'is_robotstxt'                      => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.is_robotstxt',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'is_robotstxt_sitemap_static'       => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.is_robotstxt_sitemap_static',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'robotstxt'                         => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.robotstxt',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '20',
            ),
        ),
        'robotstxt_default'                 => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.robotstxt_default',
            'config' => array(
                'type'     => 'user',
                'userFunc' => 'Metaseo\Metaseo\Hook\TCA\RobotsTxtDefault->main'
            ),
        ),
        'robotstxt_additional'              => array(
            'label'  => 'LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.robotstxt_additional',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '20',
            ),
        ),

    ),
    'types'     => array(
        '0' => array(
            'showitem'       => '--div--;LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.tab.sitemap,is_sitemap;;pallette_sitemap,is_sitemap_language_lock,sitemap_page_limit,sitemap_priorty,sitemap_priorty_depth_multiplier,sitemap_priorty_depth_modificator,--div--;LLL:EXT:metaseo/Resources/Private/Language/TCA/locallang.xlf:tx_metaseo_setting_root.tab.robotstxt,is_robotstxt;;pallette_robotstxt',
            'canNotCollapse' => '1'
        ),
    ),
    'palettes'  => array(
        'pallette_sitemap'   => array(
            'showitem'       => 'is_sitemap_page_indexer,is_sitemap_typolink_indexer',
            'canNotCollapse' => '1'
        ),
        'pallette_robotstxt' => array(
            'showitem'       => 'is_robotstxt_sitemap_static,--linebreak--,robotstxt,robotstxt_default,--linebreak--,robotstxt_additional',
            'canNotCollapse' => '1'
        ),
    ),

);
