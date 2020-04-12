<?php

namespace Manticoresearch\Endpoints\Pq;

use Manticoresearch\Exceptions\RuntimeException;

/**
 * Class Doc
 * @package Manticoresearch\Endpoints\Pq
 */
class Doc extends \Manticoresearch\Request
{
    /**
     * @var string
     */
    protected $_index;
    /**
     * @var integer
     */
    protected $_id;

    /**
     * @return mixed|string
     */
    public function getMethod()
    {
        return 'POST';
    }

    /**
     * @return mixed|string
     */
    public function getPath()
    {
        if (isset($this->_index)) {
            if (isset($this->_id)) {
                return "/json/pq/" . $this->_index . "/doc/" . $this->_id;
            } else {
                return "/json/pq/" . $this->_index . "/doc";
            }
        }
        throw new RuntimeException('Index name is missing.');
    }

    /**
     * @return mixed
     */
    public function getIndex()
    {
        return $this->_index;
    }

    /**
     * @param mixed $index
     */
    public function setIndex($index)
    {
        $this->_index = $index;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }
}
