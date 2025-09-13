<?php
//конвертор дюймов в см
function convert_dm_in_sm($dm)
{
    $sm = $dm * 2.54;
    return $sm;
}

//конвертор см в дюймы
function convert_sm_in_dm($sm)
{
    $dm = $sm / 2.54;
    return $dm;
}


?>