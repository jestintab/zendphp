<?php
$sLoveStory= <<<"ENDSTORY"
Stage I - Lust

This is the first stage of love, in which we try to get a desirable being of opposite sex and satiate our carnal desires. This stage is mostly related with the sexual fantasies that a human being carries in his/her mind. The sex hormone that influence or cause this stage is testosterone and estrogen in both males and females.

Stage II - Attraction

This is the most beautiful stage when one is said to have "fallen in love". The person in totally in thoughts of his/her lover and can think of nothing else that person. The hormones that play their role for such a emotional state are the following

    Dopamine : Dopamine is a hormone that acts as a neurotransmitter. When this hormone is triggered, the individual experience the similar pleasurable feeling like that experienced when taking drugs! This brings in a wave of pleasant feelings, additional energy and focus. The need for sleep and taking rest is felt to go down.
    Adrenaline : The process of falling for some body is characterized by a rush of adrenaline in your blood. This affects your response to stress, increased heart beat and dryness of mouth- indicators of initiation of love.

Stage III - Attachment

This is considered to the last stage of love and very much needed for a successful relationship. Scientists believe that there are two hormones which have a role to invoke this feeling - Oxytocin and Vassopressin.
        
        The diff of LOVE is that LoVE either for a second or for decade Love.
ENDSTORY;

$regUrl = "/^((http[s]?|ftp):\/)?\/?([^:\/\s]+)((\/\w+)*\/)([\w\-\.]+[^#?\s]+)(.*)?(#[\w\-]+)?$/";
    
$regExp = "/(love)/ims";

preg_match_all($regExp, $sLoveStory, $aResult);

print_r($aResult);

/*
$aValidOptions = array('d' => 'day', 'w' => 'week', 'm' => 'month');

$regUrl = /^((http[s]?|ftp):\/)?\/?([^:\/\s]+)((\/\w+)*\/)([\w\-\.]+[^#?\s]+)(.*)?(#[\w\-]+)?$/

$sPattern = "/\[date\+[0-9]+[d|m|w]\]+/i";

preg_match_all($sPattern, $sCampMsg, $matches);
$iRollingDateCnt = count($matches[0]);
*/
?>