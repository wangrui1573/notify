<?php

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Messages\Chanify;

use Guanguans\Notify\Messages\Message;

class TextMessage extends Message
{
    protected $type = 'text';

    public function configureOptionsResolver()
    {
        parent::configureOptionsResolver();

        tap(static::$resolver, function ($resolver) {
            $resolver->setDefined([
                'title',
                'text',
                'copy',
                'autocopy',
                'sound',
                'priority',
            ]);
        });

        tap(static::$resolver, function ($resolver) {
            $resolver->setDefault('autocopy', 1);
            $resolver->setDefault('sound', 1);
            $resolver->setDefault('priority', 10);
        });

        tap(static::$resolver, function ($resolver) {
            $resolver->setAllowedTypes('title', 'string');
            $resolver->setAllowedTypes('text', 'string');
            $resolver->setAllowedTypes('copy', 'string');
            $resolver->setAllowedTypes('autocopy', 'int');
            $resolver->setAllowedTypes('sound', 'int');
            $resolver->setAllowedTypes('priority', 'int');
        });

        tap(static::$resolver, function ($resolver) {
            $resolver->setAllowedValues('autocopy', [0, 1]);
            $resolver->setAllowedValues('sound', [0, 1]);
        });

        return $this;
    }
}
