<?
$str = '<DT><A HREF="https://www.beeline.ru/sms/index.wbp" ADD_DATE="1315675418" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACuElEQVQ4jW2TzWtUVxjGf+fcM/d77tfUpNaW0kY3glA33ZZWtOlGaCHG0HYn3fgHdFWSiKK7bFwKCrXUD7ooQr/A/0BwUSgUjFhL2mRaqzNN7tx7z8w5LmaSiPrAeeE85+U5D++H4CX4bGHhVFmWs02t0yAKTJEXbhBEXwslvl1ZWRk8myuevZycm5tf+2vjWne9i9aadhKTJintJCZJMqb3TtEp8uWvFheXXhA4fvzEjTt3fp078HpDkSj8MCLJcuIkI4wTwiii1g7/PfKIss718+e+PLkj8O8Pn38QOw9vu3EJsYPwW+Bl4GSgMghyrJ8inADkCAYNzZa/7E2fXhIAf1ydtXH4GJUYnFiiwhbS7yBkhnVzbFBg/AKlMrAGs7WBrS2rvdJTD76Z/yQ29ygSnz/LhodrGi+EVlij3AblN4i4RoU1Sm0R+LCnA4jH7B9Nn1ULF7sf3lt9hBASKQQCEFiSTNMpGoq8IUsr2ukmvudhLFRlzZN+jz1T+rBqCT2TRRIp5U43rAXHlmA8hrpFVYHjDNG1AkDrIU3VZzhwZ5SxhpEBIcYHQAiB1pp+r4c1hqZpGAy2ULKFBepas1mWtDwftTdTq7mQR35bs/RLO7Gw7WTAxj81vu/jui6OkIwMHDrokAUlU+3OfXXhROfnmP+/eGVfiEyGEEmIHFBiLCSBUEIw4TDQK+GJy6AufhEADy6/Z9tpjYhHyFCiIgc5EbASRoHDKJQoJZBYRH8TqoKN7muBAvDT4kgcdG+7iZ04kLsOHMa/b3OMwAY08tXlt96/Uu2M8jvvzt5Yu//7nLXjIu62ZBIsGGNxlGLfGweu37374+4ob+OjY8fm1/9ev9bv95FC7rxaO65qkee8+fbMmZvf3Vx86TZuY/bo0Y+rqvq0qqpUIPEDr5ek6U/f37p16fncp/UkAPBPBhZ1AAAAAElFTkSuQmCC">SMS</A>
        <DT>';
$pattern = '/^A HREF=\"[a-z]/';
var_dump( preg_match($pattern, $str, $arr) );
echo '<pre>', print_r($arr), '</pre>';
?>