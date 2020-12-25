<?php

namespace Glovo;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

abstract class Request {

    protected Configuration $config;
    protected ?ClientInterface $client = null;

    abstract function getRequestPath();

    protected ?array $data = null;

    public function __construct(Configuration $config, ClientInterface $client = null)
    {
        $this->config = $config;
        $this->client = $client ?? new Client();
    }

    protected function send($method = 'post')
    {
        $body = json_encode($this->data);

        return $this->client->{$method}($this->config->getApiUrl($this->getFullPath()), [
            'body' => $body,
            'headers' => $this->config->getHeaders()
        ]);
    }

    protected function getFullPath()
    {
        return $this->getRequestPath();
    }
}
