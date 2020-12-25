<?php
namespace Glovo;

use Glovo\Configuration\Mode;

class Configuration {

    private ?Mode $mode = null;
    private ?string $token = null;

    public function __construct(Mode $mode, string $token)
    {
        $this->mode = $mode;
        $this->token = $token;
    }

    final public function getApiUrl(?string $path = null): string
    {
        if ($path !== null) {
            return sprintf('%s/%s', $this->mode->getEndpoint(), $path);
        }

        return $this->mode->getEndpoint();
    }

    public function getHeaders(): array
    {
        return [
            'Authorization' => $this->token,
            'Content-Type' => 'application/json'
        ];
    }
}