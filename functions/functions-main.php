<?php
if ( ! defined('ABSPATH')) exit;  // if direct access

function job_bm_salary_type_29072019($salary_type){

    $salary_type['salary_type_1'] = __('Salary Type 1','job-board-manager');
    $salary_type['salary_type_2'] = __('Salary Type 2','job-board-manager');


    return $salary_type;

}
add_filter('job_bm_salary_type','job_bm_salary_type_29072019');