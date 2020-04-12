<?php


namespace Manticoresearch\Exceptions;

use Manticoresearch\Request;
use Manticoresearch\Response;
use Throwable;

/**
 * Class ResponseException
 * @package Manticoresearch\Exceptions
 */
class ResponseException extends \RuntimeException implements ExceptionInterface
{
    /**
     * @var Request
     */
    protected $_request;
    /**
     * @var Response
     */
    protected $_response;

    /**
     * ResponseException constructor.
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->_request = $request;
        $this->_response = $response;

        parent::__construct($response->getError());
    }

    /**
     * @return Request
     */
    public function getRequest() :Request
    {
        return $this->_request;
    }

    /**
     * @return Response
     */
    public function getResponse() :Response
    {
        return $this->_response;
    }
}
