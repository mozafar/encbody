<?php

namespace Mozafar\EncBuddy;

class DefaultKeyResolver implements KeyResolverInterface
{
    public function key(): string
    {
        return 'This is a test key';
        return !empty(config('encbuddy.key')) ? config('encbuddy.key') : config('app.key');
    }
}
