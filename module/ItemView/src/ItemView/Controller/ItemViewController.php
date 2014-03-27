<?php
namespace ItemView\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ItemViewController extends AbstractActionController
{
    protected $itemViewTable;

    public function indexAction()
    {
        return new ViewModel(array(
            'itemviews' => $this->getItemViewTable()->fetchAll(),
        ));
        //return new ViewModel();
    }

    public function getItemViewTable()
    {
        if (!$this->itemViewTable) {
            $sm = $this->getServiceLocator();
            $this->itemViewTable = $sm->get('ItemView\Model\ItemViewTable');
        }
        return $this->itemViewTable;
    }

}