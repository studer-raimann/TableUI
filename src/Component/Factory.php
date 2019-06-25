<?php

namespace srag\TableUI\Component;

use srag\TableUI\Component\Column\Formater\TableColumnFormater;
use srag\TableUI\Component\Column\TableColumn;
use srag\TableUI\Component\Data\Fetcher\TableDataFetcher;
use srag\TableUI\Component\Data\Row\TableRowData;
use srag\TableUI\Component\Data\TableData;
use srag\TableUI\Component\Export\Formater\TableExportFormater;
use srag\TableUI\Component\Filter\Sort\TableFilterSortField;
use srag\TableUI\Component\Filter\Storage\TableFilterStorage;
use srag\TableUI\Component\Filter\TableFilter;

/**
 * Interface Factory
 *
 * @package srag\TableUI\Component
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface Factory {

	/**
	 * Factory constructor
	 */
	public function __construct();


	/**
	 * @param string              $key
	 * @param string              $title
	 * @param TableColumnFormater $column_formater
	 * @param TableExportFormater $export_formater
	 *
	 * @return TableColumn
	 */
	public function column(string $key, string $title, TableColumnFormater $column_formater, TableExportFormater $export_formater): TableColumn;


	/**
	 * @param TableRowData[] $data
	 * @param int            $max_count
	 *
	 * @return TableData
	 */
	public function data(array $data, int $max_count): TableData;


	/**
	 * @param string $table_id
	 * @param int    $user_id
	 *
	 * @return TableFilter
	 */
	public function filter(string $table_id, int $user_id): TableFilter;


	/**
	 * @param string $sort_field
	 * @param int    $sort_field_direction
	 *
	 * @return TableFilterSortField
	 */
	public function filterSortField(string $sort_field, int $sort_field_direction): TableFilterSortField;


	/**
	 * @return TableFilterStorage
	 */
	public function filterStorage(): TableFilterStorage;


	/**
	 * @param object $original_data
	 *
	 * @return TableRowData
	 */
	public function rowData(object $original_data): TableRowData;


	/**
	 * @param string           $id
	 * @param string           $action_url
	 * @param string           $title
	 * @param TableColumn[]    $columns
	 * @param TableDataFetcher $data_fetcher
	 *
	 * @return TableUI
	 */
	public function table(string $id, string $action_url, string $title, array $columns, TableDataFetcher $data_fetcher): TableUI;
}
