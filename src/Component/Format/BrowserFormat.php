<?php

namespace srag\DataTable\Component\Format;

use srag\DataTable\Component\Settings\Settings;
use srag\DataTable\Component\Table;

/**
 * Interface BrowserFormat
 *
 * @package srag\DataTable\Component\Format
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface BrowserFormat extends Format
{

    /**
     * @param Table $component
     *
     * @return string|null
     */
    public function getInputFormatId(Table $component) : ?string;


    /**
     * @param Table    $component
     * @param Settings $settings
     *
     * @return Settings
     */
    public function handleSettingsInput(Table $component, Settings $settings) : Settings;


    /**
     * @param string $action_url
     * @param array  $params
     * @param string $table_id
     *
     * @return string
     */
    public function getActionUrlWithParams(string $action_url, array $params, string $table_id) : string;


    /**
     * @param string $key
     * @param string $table_id
     *
     * @return string
     */
    public function actionParameter(string $key, string $table_id) : string;


    /**
     * @param string $table_id
     *
     * @return string
     */
    public function getActionRowId(string $table_id) : string;


    /**
     * @param string $table_id
     *
     * @return string[]
     */
    public function getMultipleActionRowIds(string $table_id) : array;
}
