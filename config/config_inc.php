<?php

/* STATUS LIST */
$g_status_enum_string = '10:open,20:review,30:wip,40:onhold,50:assigned,60:resolved,80:closed';

/* WORKFLOW */
$g_status_enum_workflow = array(
    10 => '20:review,30:wip,40:onhold,50:assigned,60:resolved',
    20 => '30:wip,40:onhold,50:assigned,60:resolved',
    30 => '40:onhold,50:assigned,60:resolved',
    40 => '50:assigned,60:resolved',
    50 => '30:wip,40:onhold,60:resolved',
    60 => '80:closed,40:onhold',
    80 => ''
);

/* COLORS */
$g_status_colors = array(
    'open'     => '#fcbdbd',
    'review'   => '#fff2a8',
    'wip'      => '#c2dfff',
    'onhold'   => '#ffd5a3',
    'assigned' => '#e3e3e3',
    'resolved' => '#d2f5b0',
    'closed'   => '#c9ccc4'
);

/* THRESHOLDS */
$g_status_fixed_threshold = 60;
$g_bug_resolved_status_threshold = 60;
$g_bug_closed_status_threshold = 80;


/* Reopen behavior | This forces reopened tickets to fall under open status */
$g_bug_reopen_status = 10;
$g_bug_reopen_resolution = FIXED;
