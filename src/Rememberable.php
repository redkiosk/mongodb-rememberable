<?php
namespace NhaHV\MongoDBRememberable;

use NhaHV\MongoDBRememberable\Query\Builder;

trait Rememberable
{
    /**
     * Get a new query builder instance for the connection.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    protected function newBaseQueryBuilder()
    {
        $conn = $this->getConnection();

        return new Builder($conn, $conn->getPostProcessor());
    }
}
