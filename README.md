# notify

[简体中文](README-CN.md) | [ENGLISH](README.md)

> Multi platform notification SDK. - 多平台通知 SDK。

[![Tests](https://github.com/guanguans/notify/workflows/Tests/badge.svg)](https://github.com/guanguans/notify/actions)
[![Check & fix styling](https://github.com/guanguans/notify/workflows/Check%20&%20fix%20styling/badge.svg)](https://github.com/guanguans/notify/actions)
[![codecov](https://codecov.io/gh/guanguans/notify/branch/main/graph/badge.svg?token=URGFAWS6S4)](https://codecov.io/gh/guanguans/notify)
[![Latest Stable Version](https://poser.pugx.org/guanguans/notify/v)](//packagist.org/packages/guanguans/notify)
[![Total Downloads](https://poser.pugx.org/guanguans/notify/downloads)](//packagist.org/packages/guanguans/notify)
[![License](https://poser.pugx.org/guanguans/notify/license)](//packagist.org/packages/guanguans/notify)

## Requirement

* PHP >= 7.2

## Installation

``` bash
$ composer require guanguans/notify -vvv
```

## Usage

### Bark

``` php
use Guanguans\Notify\Factory;

Factory::bark()
    ->setToken('csZcrvJeJCTcHEr8LvNSND')
    ->setMessage((new \Guanguans\Notify\Messages\BarkMessage([
        'title'             => 'This is title.',
        'text'              => 'This is text.',
        // 'copy'              => 'This is copy.',
        // 'url'               => 'https://github.com/guanguans/notify',
        // 'sound'             => 'bell',
        // 'isArchive'         => 1,
        // 'automaticallyCopy' => 1,
    ])))
    ->send();
```

### Chanify

``` php
// Text Message
Factory::chanify()
    ->setToken('fh4gGEiJBQVdIWlVKS1JORVY0UlVETFZYVVpRTlNLTlVZVlZPT1JFGhR7vAyf8Uj5UQhhK4n6QfVzih96QyIECAEQAQ.E0eBnLbfNwWrWZ1YSAZfkCQWZAPdBl6pVr26lRf6Srs')
    ->setMessage((new \Guanguans\Notify\Messages\Chanify\TextMessage([
        'title'    => 'This is title.',
        'text'     => 'This is text.',
        // 'copy'     => 'This is copy.',
        // 'actions'  => [
        //     "ActionName1|http://<action host>/<action1>",
        //     "ActionName2|http://<action host>/<action2>",
        // ],
        // 'autocopy' => 0,
        // 'sound'    => 0,
        // 'priority' => 10,
    ])))
    ->send();

// Link Message
Factory::chanify()
    ->setToken('fh4gGEiJBQVdIWlVKS1JORVY0UlVETFZYVVpRTlNLTlVZVlZPT1JFGhR7vAyf8Uj5UQhhK4n6QfVzih96QyIECAEQAQ.E0eBnLbfNwWrWZ1YSAZfkCQWZAPdBl6pVr26lRf6Srs')
    ->setMessage((new \Guanguans\Notify\Messages\Chanify\LinkMessage([
        'link'     => 'https://github.com/guanguans/notify',
        // 'sound'    => 0,
        // 'priority' => 10,
    ])))
    ->send();
```

### XiZhi

``` php
// Single
Factory::xiZhi()
    // ->setType('single')
    ->setToken('XZd60aea56567ae39a1b1920cbc42bb5')
    ->setMessage((new \Guanguans\Notify\Messages\XiZhiMessage([
        'title'   => 'This is title.',
        'content' => 'This is content.',
    ])))
    ->send();

// Channel
Factory::xiZhi()
    ->setType('channel')
    ->setToken('XZ8da15b55a6725497232d87298bcd34')
    ->setMessage((new \Guanguans\Notify\Messages\XiZhiMessage([
        'title'   => 'This is title.',
        'content' => 'This is content.',
    ])))
    ->send();
```

### ServerChan

``` php
Factory::serverChan()
    ->setToken('SCT35149Thtf1g2Bc14QJuQ6HFpW5YG')
    ->setMessage((new \Guanguans\Notify\Messages\ServerChanMessage([
        'title' => 'This is title.',
        'desp'  => 'This is desp.',
    ])))
    ->send();

// Check
Factory::serverChan()->check(3334849, 'SCTJlJV1J87hS');
```

### WeWork

``` php
// Text Message
Factory::weWork()
    ->setToken('73a3d5a3-ceff-4da8-bcf3-ff5891778f')
    ->setMessage((new \Guanguans\Notify\Messages\WeWork\TextMessage([
        'content'               => 'This is content.',
        // 'mentioned_list'        => ["wangqing", "@all"],
        // 'mentioned_mobile_list' => ["13800001111", "@all"],
    ])))
    ->send();

// Markdown Message
Factory::weWork()
    ->setToken('73a3d5a3-ceff-4da8-bcf3-ff5891778f')
    ->setMessage((new \Guanguans\Notify\Messages\WeWork\MarkdownMessage([
        'content' => "# This is title.\n This is content.",
    ])))
    ->send();

// Image Message
Factory::weWork()
    ->setToken('73a3d5a3-ceff-4da8-bcf3-ff5891778f')
    ->setMessage((new \Guanguans\Notify\Messages\WeWork\ImageMessage([
        // 'imagePath' => '/Users/yaozm/Downloads/image.png',
        'imagePath' => 'https://avatars.githubusercontent.com/u/22309277?v=4',
    ])))
    ->send();

// News Message
Factory::weWork()
    ->setToken('73a3d5a3-ceff-4da8-bcf3-ff5891778f')
    ->setMessage(new \Guanguans\Notify\Messages\WeWork\NewsMessage([
        'title'       => 'This is title.',
        // 'description' => 'This is description.',
        'url'         => 'https://github.com/guanguans/notify',
        // 'picurl'      => 'https://avatars.githubusercontent.com/u/22309277?v=4',
    ]))
    ->send();
```

### FeiShu

``` php
// Text Message
Factory::feiShu()
    ->setToken('b6eb70d9-6e19-4f87-af48-348b028186')
    ->setSecret('iigDOvnsIn6aFS1pYHHEHh')
    ->setMessage(new \Guanguans\Notify\Messages\FeiShu\TextMessage('This is title(keyword).'))
    ->send();

// Post Message
$post = [
    'zh_cn' => [
        'title'   => '项目更新通知',
        'content' => [
            [
                [
                    "tag"  => "text",
                    "text" => "项目有更新(keyword)"
                ]
            ]
        ]
    ]
];
Factory::feiShu()
    ->setToken('b6eb70d9-6e19-4f87-af48-348b028186')
    ->setSecret('iigDOvnsIn6aFS1pYHHEHh')
    ->setMessage(new \Guanguans\Notify\Messages\FeiShu\PostMessage($post))
    ->send();

// Image Message
Factory::feiShu()
    ->setToken('b6eb70d9-6e19-4f87-af48-348b028186')
    ->setSecret('iigDOvnsIn6aFS1pYHHEHh')
    ->setMessage(new \Guanguans\Notify\Messages\FeiShu\ImageMessage('img_ecffc3b9-8f14-400f-a014-05eca1a4xxxx'))
    ->send();

// ShareChat Message
Factory::feiShu()
    ->setToken('b6eb70d9-6e19-4f87-af48-348b028186')
    ->setSecret('iigDOvnsIn6aFS1pYHHEHh')
    ->setMessage(new \Guanguans\Notify\Messages\FeiShu\ShareChatMessage('oc_f5b1a7eb27ae2c7b6adc2a74fafxxxxx'))
    ->send();

// Card Message
$card = [
    'elements' => [
        [
            'tag'  => 'div',
            'text' => [
                'content' => '**西湖(keyword)**，位于浙江省杭州市西湖区龙井路1号，杭州市区西部，景区总面积49平方千米，汇水面积为21.22平方千米，湖面面积为6.38平方千米。',
                'tag'     => 'lark_md',
            ],
        ],
    ],
];
Factory::feiShu()
    ->setToken('b6eb70d9-6e19-4f87-af48-348b0281866c')
    ->setSecret('iigDOvnsIn6aFS1pYHHEHh')
    ->setMessage(new \Guanguans\Notify\Messages\FeiShu\CardMessage($card))
    ->send();
```

## Testing

``` bash
$ composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

* [guanguans](https://github.com/guanguans)
* [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
