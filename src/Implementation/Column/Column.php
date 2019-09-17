<?php

namespace srag\DataTable\Implementation\Column;

use srag\DataTable\Component\Column\Column as ColumnInterface;
use srag\DataTable\Component\Column\Formater\Formater;
use srag\DataTable\Component\UserTableSettings\Sort\SortField;
use srag\DataTable\Implementation\Column\Formater\DefaultFormater;

/**
 * Class Column
 *
 * @package srag\DataTable\Implementation\Column
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class Column implements ColumnInterface
{

    /**
     * @var string
     */
    protected $key = "";
    /**
     * @var string
     */
    protected $title = "";
    /**
     * @var Formater
     */
    protected $formater;
    /**
     * @var bool
     */
    protected $sortable = true;
    /**
     * @var bool
     */
    protected $default_sort = false;
    /**
     * @var int
     */
    protected $default_sort_direction = SortField::SORT_DIRECTION_UP;
    /**
     * @var bool
     */
    protected $selectable = true;
    /**
     * @var bool
     */
    protected $default_selected = true;
    /**
     * @var bool
     */
    protected $exportable = true;


    /**
     * @inheritDoc
     */
    public function __construct(string $key, string $title)
    {
        $this->key = $key;

        $this->title = $title;

        global $DIC; // TODO: !!!
        $this->formater = new DefaultFormater($DIC);
    }


    /**
     * @inheritDoc
     */
    public function getKey() : string
    {
        return $this->key;
    }


    /**
     * @inheritDoc
     */
    public function withKey(string $key) : ColumnInterface
    {
        $clone = clone $this;

        $clone->key = $key;

        return $clone;
    }


    /**
     * @inheritDoc
     */
    public function getTitle() : string
    {
        return $this->title;
    }


    /**
     * @inheritDoc
     */
    public function withTitle(string $title) : ColumnInterface
    {
        $clone = clone $this;

        $clone->title = $title;

        return $clone;
    }


    /**
     * @inheritDoc
     */
    public function getFormater() : Formater
    {
        return $this->formater;
    }


    /**
     * @inheritDoc
     */
    public function withFormater(Formater $formater) : ColumnInterface
    {
        $clone = clone $this;

        $clone->formater = $formater;

        return $clone;
    }


    /**
     * @inheritDoc
     */
    public function isSortable() : bool
    {
        return $this->sortable;
    }


    /**
     * @inheritDoc
     */
    public function withSortable(bool $sortable = true) : ColumnInterface
    {
        $clone = clone $this;

        $clone->sortable = $sortable;

        return $clone;
    }


    /**
     * @inheritDoc
     */
    public function isDefaultSort() : bool
    {
        return $this->default_sort;
    }


    /**
     * @inheritDoc
     */
    public function withDefaultSort(bool $default_sort = false) : ColumnInterface
    {
        $clone = clone $this;

        $clone->default_sort = $default_sort;

        return $clone;
    }


    /**
     * @inheritDoc
     */
    public function getDefaultSortDirection() : int
    {
        return $this->default_sort_direction;
    }


    /**
     * @inheritDoc
     */
    public function withDefaultSortDirection(int $default_sort_direction = SortField::SORT_DIRECTION_UP) : ColumnInterface
    {
        $clone = clone $this;

        $clone->default_sort_direction = $default_sort_direction;

        return $clone;
    }


    /**
     * @inheritDoc
     */
    public function isSelectable() : bool
    {
        return $this->selectable;
    }


    /**
     * @inheritDoc
     */
    public function withSelectable(bool $selectable = true) : ColumnInterface
    {
        $clone = clone $this;

        $clone->selectable = $selectable;

        return $clone;
    }


    /**
     * @inheritDoc
     */
    public function isDefaultSelected() : bool
    {
        return $this->default_selected;
    }


    /**
     * @inheritDoc
     */
    public function withDefaultSelected(bool $default_selected = true) : ColumnInterface
    {
        $clone = clone $this;

        $clone->default_selected = $default_selected;

        return $clone;
    }


    /**
     * @inheritDoc
     */
    public function isExportable() : bool
    {
        return $this->exportable;
    }


    /**
     * @inheritDoc
     */
    public function withExportable(bool $exportable = true) : ColumnInterface
    {
        $clone = clone $this;

        $clone->exportable = $exportable;

        return $clone;
    }
}
