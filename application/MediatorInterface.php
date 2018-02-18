<?php


namespace application;


use response\ResponseInterface;

interface MediatorInterface
{
    /**
     * @param string $url
     */
    public function run(string $url);

    /**
     * @param ResponseInterface $response
     */
    public function sendResponse(ResponseInterface $response);

    /**
     * @param string $request
     * @return ResponseInterface
     */
    public function makeRequest(string $request): ResponseInterface;

}
