<?php

namespace AvoRed\Framework\Models\Contracts;

use AvoRed\Framework\Models\Database\Category;

interface CategoryInterface
{
    /**
     * Find an Category by given Id which returns Category Model
     *
     * @param integer $id
     * @return \AvoRed\Framework\Models\Database\Category
     */
    public function find($id);

    /**
    * Find an Category by given key which returns Category Model
    *
    * @param string $key
    * @return \AvoRed\Framework\Models\Database\Category
    */
    public function findByKey($key);

    /**
    * Find an All Category which returns Eloquent Collection
    *
    * @return \Illuminate\Database\Eloquent\Collection
    */
    public function all();

    /**
     * Category Collection with Limit which returns paginate class
     *
     * @param integer $noOfItem
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function paginate($noOfItem = 10);

    /**
     * Category Query Builder
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query();

    /**
     * Create an Category
     *
     * @param array $data
     * @return \AvoRed\Framework\Models\Database\Category
     */
    public function create($data);

    /**
     * Get an Category Options for Vue Components
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function options();
}
