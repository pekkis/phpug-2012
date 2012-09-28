<?php

namespace Loso;

class Helper
{
    private $assetRoot;

    public function __construct($assetRoot)
    {
        $this->assetRoot = $assetRoot;
    }

    public function asset($url)
    {
        return $this->assetRoot . $url;
    }


}
