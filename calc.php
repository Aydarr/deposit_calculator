<?php
    function get_post_value($param) {
        return isset($_POST[$param]) && $_POST[$param] !== '' ? $_POST[$param] : null;
    }
    $date_input = get_post_value('date_input');
    $sum_deposit = get_post_value('sum_deposit');
    $term_deposit = get_post_value('term_deposit');
    $rep_deposit = get_post_value('rep_deposit');
    $sum_rep_deposit = get_post_value('sum_rep_deposit');
    list($year, $month, $day) = explode("-", $date_input);
    $condition = $date_input !== null && $sum_deposit !== null && $term_deposit !== null && $rep_deposit !== null;
    if ($condition === true) {
        $date = strtotime($date_input);
        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $sum = 0;
        $percent = 0.1;
        $days_a_year = 365;
        $sum = intval($sum_deposit) + ((intval($sum_deposit) + intval($sum_rep_deposit) ) * $days * ($percent / $days_a_year ));
        for ($i = 1; $i < intval($term_deposit) * 12; $i++) {
            $month++;
            $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
            $sum = $sum + ($sum + intval($sum_rep_deposit) ) * $days * ($percent / $days_a_year )  ;
            $month = $month % 12 === 0 ? 1 : $month;
        }
        echo ceil($sum);
    } else {
        echo 'error';
    }
