<?php

/**
 * This file is part of the guanguans/notify.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\Notify\Messages\FeiShu;

class ImageMessage extends Message
{
    protected $type = 'image';

    public function configureOptionsResolver()
    {
        parent::configureOptionsResolver();

        tap(static::$resolver, function ($resolver) {
            $resolver->setDefined([
                'image_key',
                'secret',
            ]);
        });

        tap(static::$resolver, function ($resolver) {
            $resolver->setAllowedTypes('image_key', 'string');
            $resolver->setAllowedTypes('secret', 'string');
        });

        return $this;
    }
}
