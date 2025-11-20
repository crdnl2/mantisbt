<?php

$g_status_enum_string = '';
$g_status_enum_string = '10:open,20:review,30:assigned,40:wip,50:on-hold,60:resolved,80:closed';

$g_status_enum_workflow = array(
    10 => '20:review,30:assigned,40:wip,50:on-hold,60:resolved',
    20 => '30:assigned,40:wip,50:on-hold,60:resolved',
    30 => '40:wip,50:on-hold,60:resolved',
    40 => '50:on-hold,60:resolved',
    50 => '40:wip,60:resolved',
    60 => '80:closed,40:wip',
    80 => ''
);

$g_status_colors = array(
    'open'     => '#fcbdbd',
    'review'   => '#fff2a8',
    'assigned' => '#c2dfff',
    'wip'      => '#ffd5a3',
    'on-hold'  => '#e3e3e3',
    'resolved' => '#d2f5b0',
    'closed'   => '#c9ccc4'
);

/* REQUIRED thresholds */
$g_status_fixed_threshold = 60;            // Resolved starts at 60
$g_bug_resolved_status_threshold = 60;
$g_bug_closed_status_threshold = 80;

/* Reopen behavior | This forces reopened tickets to fall under open status */
$g_bug_reopen_status = 10;
$g_bug_reopen_resolution = FIXED;
