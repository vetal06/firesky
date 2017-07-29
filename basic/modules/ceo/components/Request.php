<?php
namespace app\modules\ceo\components;


use app\modules\lang\components\LangRequest;

class Request extends LangRequest
{

    private $requestUri;

    public function setRequestUri($uri)
    {
        $this->requestUri = $uri;
    }

    protected function resolveRequestUri()
    {
        if ($this->requestUri != null) {
            return $this->requestUri;
        } else {
            return parent::resolveRequestUri();
        }
    }

}