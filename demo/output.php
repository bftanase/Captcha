<?php

include('../CaptchaBuilder.php');
include('../PhraseBuilder.php');

use Gregwar\Captcha\CaptchaBuilder;

header('Content-type: image/jpeg');

CaptchaBuilder::create()
    ->build(300, 70)
    ->output(20)
    ;