<?php

namespace srag\DataTable\Component\Filter\Storage;

use ILIAS\DI\Container;
use srag\DataTable\Component\Factory\Factory;
use srag\DataTable\Component\Filter\TableFilter;

/**
 * Interface TableFilterStorage
 *
 * @package srag\DataTable\Component\Filter\Storage
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface TableFilterStorage {

	/**
	 * @var string
	 */
	const VAR_SORT_FIELDS = "sort_fields";
	/**
	 * @var string
	 */
	const VAR_SORT_FIELD = "sort_field";
	/**
	 * @var string
	 */
	const VAR_REMOVE_SORT_FIELD = "remove_sort_field";
	/**
	 * @var string
	 */
	const VAR_SORT_FIELD_DIRECTION = "sort_field_direction";
	/**
	 * @var string
	 */
	const VAR_ROWS_COUNT = "rows_count";
	/**
	 * @var string
	 */
	const VAR_CURRENT_PAGE = "current_page";
	/**
	 * @var string
	 */
	const VAR_FIELD_VALUES = "field_values";
	/**
	 * @var string
	 */
	const VAR_SELECTED_COLUMNS = "selected_columns";
	/**
	 * @var string
	 */
	const VAR_SELECT_COLUMN = "select_column";
	/**
	 * @var string
	 */
	const VAR_DESELECT_COLUMN = "deselect_column";
	/**
	 * @var string
	 */
	const VAR_EXPORT_FORMAT_ID = "export_format_id";
	/**
	 * @var string[]
	 */
	const VARS = [
		self::VAR_SORT_FIELDS,
		self::VAR_ROWS_COUNT,
		self::VAR_CURRENT_PAGE,
		self::VAR_FIELD_VALUES,
		self::VAR_SELECTED_COLUMNS
	];


	/**
	 * TableFilterStorage constructor
	 *
	 * @param Container $dic
	 */
	public function __construct(Container $dic);


	/**
	 * @param string  $table_id
	 * @param int     $user_id
	 * @param Factory $factory
	 *
	 * @return TableFilter
	 */
	public function read(string $table_id, int $user_id, Factory $factory): TableFilter;


	/**
	 * @param TableFilter $filter
	 */
	public function store(TableFilter $filter): void;
}
