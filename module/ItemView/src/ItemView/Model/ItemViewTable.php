<?php
/**
 * Created by PhpStorm.
 * User: Arambepola
 * Date: 27/03/14
 * Time: 04:37
 */

namespace ItemView\Model;

use Zend\Db\TableGateway\TableGateway;

class ItemViewTable
{

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getItemView($item_no)
    {
        $item_no  = (int) $item_no;
        $rowset = $this->tableGateway->select(array('item_no' => $item_no));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $item_no");
        }
        return $row;
    }
}