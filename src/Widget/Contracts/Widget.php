<?php

namespace AvoRed\Framework\Widget\Contracts;

interface Widget
{
    /**
     * Get/Set Widget Label.
     * @return string $label
     */
    public function label();

    /**
     * Get/Set Widget Type.
     * @return string $type
     */
    public function type();
}
