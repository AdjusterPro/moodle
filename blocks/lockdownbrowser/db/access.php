<?php
// Respondus LockDown Browser Extension for Moodle
// Copyright (c) 2011-2021 Respondus, Inc.  All Rights Reserved.
// Date: October 27, 2021.

$capabilities = array(

    'block/lockdownbrowser:addinstance' => array(
        'riskbitmask'          => RISK_SPAM | RISK_XSS,
        'captype'              => 'write',
        'contextlevel'         => CONTEXT_BLOCK,
        'archetypes'           => array(
            'guest'          => CAP_PREVENT,
            'student'        => CAP_PREVENT,
            'teacher'        => CAP_PREVENT,
            'editingteacher' => CAP_ALLOW,
            'manager'        => CAP_ALLOW
        ),
        'clonepermissionsfrom' => 'moodle/site:manageblocks'
    ),

);

