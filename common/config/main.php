<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 16:05
 */

$config = [
    'language' => 'zh-CN', //默认语言
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'charset' => 'utf8',
            'enableSchemaCache' => YII_ENV_PROD,
            'schemaCacheDuration' => 3600,
            'schemaCache' => 'cache',
        ],
        'helloBabyDb' => [
            'class' => 'yii\db\Connection',
            'charset' => 'utf8',
            'enableSchemaCache' => YII_ENV_PROD,
            'schemaCacheDuration' => 3600,
            'schemaCache' => 'cache',
        ],
        'digitalCoinDb' => [
            'class' => 'yii\db\Connection',
            'charset' => 'utf8',
            'enableSchemaCache' => YII_ENV_PROD,
            'schemaCacheDuration' => 3600,
            'schemaCache' => 'cache',
        ],
        'cache' => [
            'class' => \lingyin\predis\Cache::class,
            'keyPrefix' => 'lingyin-common:',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning','trace'],
                ],
            ],
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                ],
            ],
        ],
        'ip' => [
            'class' => 'common\components\Ip',
        ],
        'wechat' => [
            'class' => 'common\components\Wechat',
        ],
        'miniWechat' => [
            'class' => 'common\components\Wechat',
        ],
        'reminder' => [
            'class' => 'common\components\Wechat',
        ],
        'imageUpload' => [
            'class' => \common\components\upyun\Upload::class,
        ],
        'barCode' => \common\components\BarCode::class,
    ],
    'params' => [
        'miniAppAccountToken' => '5243046bacae87473c213a43331f9088',
    ],
];

return $config;