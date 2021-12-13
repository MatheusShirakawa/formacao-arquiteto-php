<?php

namespace Alura\Solid\Model;

class FeedBack{

    /**
     * @var int
     */
    private $nota;

    /**
     * @var string|null
     */
    private $depoimento;

    public function __construct(int $nota, $depoimento){
        $this->nota         = $nota;
        $this->depoimento   = $depoimento;
    }
}