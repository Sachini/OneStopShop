<?php
namespace ItemView\Model;

class ItemView
{
    public $item_no;
    public $name;
    public $description;
    public $price;

    public function exchangeArray($data)
    {
        $this->item_no     = (isset($data['item_no'])) ? $data['item_no'] : null;
        $this->name = (isset($data['name'])) ? $data['name'] : null;
        $this->description  = (isset($data['description'])) ? $data['description'] : null;
        $this->price  = (isset($data['price'])) ? $data['price'] : null;
    }
}