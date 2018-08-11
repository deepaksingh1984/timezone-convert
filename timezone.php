<?php
/* The below function is to Covert Time Zone and its date and time according to 
 * client browser. 
 * Authore : Deepak Singh
*/

function ConvertTimeZone($fromTime, $fromTimezone, $toTimezone,$format='d m Y h:i A') {
    $from = new DateTimeZone($fromTimezone);
    $to = new DateTimeZone($toTimezone);
    $orgTime = new DateTime($fromTime, $from);
    $toTime = new DateTime($orgTime->format("c"));
    $toTime->setTimezone($to);
    return $toTime->format($format);
}
?>