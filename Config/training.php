<?php
/**
 * Created by PhpStorm.
 * User: kurisu
 * Date: 2017/12/04
 * Time: 0:12
 */
return [
    /*
    |--------------------------------------------------------------------------
    | test SamplesDir
    |--------------------------------------------------------------------------
    | 测试样本放置的dir，和使用哪一套测试样本
    | //不规定数量，采用遍历文件夹来计算
    */

    'testSamples' => [
        'dir'              => 'D:\code\DEMO\CAPTCHA_Idenify\new\d2\TestSamples\\' ,
        'plan'             => 'ZhengFang' ,
        'whichSampleToUse' => 2
    ] ,

    /*
    |--------------------------------------------------------------------------
    | study Samples
    |--------------------------------------------------------------------------
    | 学习样本放置的dir
    */

    'studySamples' => [
        'dir' => 'D:\code\DEMO\CAPTCHA_Idenify\new\d2\StudySamples\\' ,
    ] ,

    /*
    |--------------------------------------------------------------------------
    | study Sample Collection name
    |--------------------------------------------------------------------------
    | 学习的样本集的名称
    */

    'studySampleCollectionName' => 'ZhengFang' ,

    /*
    |--------------------------------------------------------------------------
    | Training dictionary
    |--------------------------------------------------------------------------
    | 训练使用的字典
    */

    'trainingDictionary' => 'D:\code\DEMO\CAPTCHA_Idenify\new\d2\Dictionary\zhengFang_autoTest.json' ,

    /*
    |--------------------------------------------------------------------------
    | Training Log and Test Log
    |--------------------------------------------------------------------------
    | 训练和测试保存日志的位置
    */

    'LogPath' => 'D:\code\DEMO\CAPTCHA_Idenify\new\d2\Log\\' ,

    /*
    |--------------------------------------------------------------------------
    | dictionary Sample Limit by automaticStudy
    |--------------------------------------------------------------------------
    | 自动训练的字典数量上限
    */

    'dictionarySampleLimit' => 4000 ,

    /*
    |--------------------------------------------------------------------------
    | test Success Rate Line by automaticStudy
    |--------------------------------------------------------------------------
    | 自动训练到达触发线的测试成功率线
    */

    'testSuccessRateLine' => 80 ,


];