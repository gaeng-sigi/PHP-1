<?php

 $score = 81;

 switch($score)
 {
    case 100:
        print "당신의 성적은 A입니다.";
        break;
    case ($score>=90):
        print "당신의 성적은 A-입니다.";
        break;
    case 80:
        print "당신의 성적은 B입니다.";
        break;
    case 60:
        print "당신의 성적은 C입니다.";
        break;
    case 40:
        print "당신의 성적은 D입니다.";
        break;
    case 0:
        print "당신의 성적은 F입니다.";
        break;
 }

?>