<?php
// single product functions start

function getAvailableBookingDates($post_id)
{
    if (!isLuxary($post_id)) {
        $booking_data = get_post_meta($post_id, 'booking_data', true);
        $booking_data = !empty($booking_data) ? json_decode($booking_data, true) : array();
        $available_obj = array_filter($booking_data, function ($var) {
            return empty($var['isCompleted']) ? true : false;
        });
        $available_dates = !empty(array_column($available_obj, 'date')) ? array_column($available_obj, 'date') : [];
        $booked_dates = getBookedDatesOfProducts($post_id);
        $rest_available_dates = array_diff($available_dates, $booked_dates);
        return $available_dates = !empty($rest_available_dates) ? implode(" ", $rest_available_dates) : '';
    } else {
        $booking_dates = get_post_meta($post_id, 'booking_dates', true);
        $booking_dates = !empty($booking_dates) ? explode(',', $booking_dates) : array();
        $available_dates = yearToDatesArray($booking_dates);
        $booked_dates = getBookedDatesOfProducts($post_id);
        $rest_available_dates = array_diff($available_dates, $booked_dates);
        return $available_dates = !empty($rest_available_dates) ? implode(" ", $rest_available_dates) : '';
    }
}

function isLuxary($product_id)
{
    if (getParentCategoryID($product_id) === 65) {
        return true;
    }
    return false;
}
// get first continue dates array from current date
function getContinuousDatesFromDate($dateArray)
{
    $dateArray = [...$dateArray];
    $result = [];
    $currentDay = in_array(date("Y-m-d"), $dateArray) ? strtotime(date("Y-m-d")) : strtotime($dateArray[0]);
    foreach ($dateArray as $dateStr) {
        $currentDate = strtotime($dateStr);

        if ($currentDate === $currentDay) {
            $result[] = $dateStr;
            $currentDay = strtotime('+1 day', $currentDay);
        } elseif ($currentDate > $currentDay) {
            break;
        }
    }

    if (empty($result)) {
        return [];
    }

    return $result;
}

/*
* get default checkin and checkout date
*/
function getCheckInOutDates($dateArray, $product_id)
{
    if (!empty($dateArray)) {
        if (isLuxary($product_id)) {
            $checkin = !empty($dateArray[0]) ? date("Y-m-d", strtotime($dateArray[0])) : date("Y-m-d");
            return $checkin . ' - ' . date("Y-m-d", strtotime($checkin . ' + ' . LUXURY_MAX_DATE_RANGE . ' days'));
        } else {
            $total_dates = getContinuousDatesFromDate($dateArray);

            if (!empty($total_dates)) {
                $checkin = !empty($total_dates[0]) ? date("Y-m-d", strtotime($total_dates[0])) : date("Y-m-d");
                if (count($total_dates) < CORPORATE_MAX_DATE_RANGE) {
                    return $checkin . ' - ' . date("Y-m-d", strtotime(end($total_dates) . ' + 1 days'));
                } else {
                    return $checkin . ' - ' . date("Y-m-d", strtotime($checkin . ' + ' . CORPORATE_MAX_DATE_RANGE . ' days'));
                }
            }
        }
    }
}




// get inputbox checkin checkout date method

function returnCheckInCheckOut($dates)
{
    $futureDates = array_filter($dates, function ($date) {
        return strtotime($date) >= strtotime(date('Y-m-d'));
    });
    return $futureDates;
}


// generate dates from current date of years array
function yearToDatesArray($years)
{
    $currentYear = date('Y');
    $allDates = array();
    foreach ($years as $year) {
        $startMonth = ($year == $currentYear) ? date('n') : 1; // Start from current month if it's the current year
        $endMonth = ($year == $currentYear) ? 12 : 12; // End at December for current year, otherwise whole year

        for ($month = $startMonth; $month <= $endMonth; $month++) {
            $startDay = ($year == $currentYear && $month == $startMonth) ? date('j') : 1; // Start from current day if it's the current month
            $endDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);

            for ($day = $startDay; $day <= $endDay; $day++) {
                $date = sprintf('%04d-%02d-%02d', $year, $month, $day);
                $allDates[] = $date;
            }
        }
    }
    return $allDates;
}

// single product functions end
