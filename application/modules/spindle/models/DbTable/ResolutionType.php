<?php
require_once dirname(__FILE__) . '/Bug.php';

class Spindle_Model_DbTable_ResolutionType extends Zend_Db_Table_Abstract
{
    protected $_name    = 'resolution_type';
    protected $_primary = 'id';

    protected $_dependentTables = array(
        'Spindle_Model_DbTable_Bug',
    );
}