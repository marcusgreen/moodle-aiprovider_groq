<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package ke    aiprovider_groq
 * @copyright   2024 Marcus Green
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use core_ai\admin\admin_settingspage_provider;

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    // Provider specific settings heading.
    $settings = new admin_settingspage_provider(
        'aiprovider_groq',
        new lang_string('pluginname', 'aiprovider_groq'),
        'moodle/site:config',
        true,
    );

    $settings->add(new admin_setting_heading(
        'aiprovider_groq/general',
        new lang_string('settings', 'core'),
        '',
    ));

    // Setting to store Groq API key.
    $settings->add(new admin_setting_configpasswordunmask(
        'aiprovider_groq/apikey',
        new lang_string('apikey', 'aiprovider_groq'),
        new lang_string('apikey_desc', 'aiprovider_groq'),
        '',
    ));

    // Setting to store Groq organization ID.
    $settings->add(new admin_setting_configtext(
        'aiprovider_groq/orgid',
        new lang_string('orgid', 'aiprovider_groq'),
        new lang_string('orgid_desc', 'aiprovider_groq'),
        '',
        PARAM_TEXT,
    ));

    // Setting to enable/disable global rate limiting.
    $settings->add(new admin_setting_configcheckbox(
        'aiprovider_groq/enableglobalratelimit',
        new lang_string('enableglobalratelimit', 'aiprovider_groq'),
        new lang_string('enableglobalratelimit_desc', 'aiprovider_groq'),
        0,
    ));

    // Setting to set how many requests per hour are allowed for the global rate limit.
    // Should only be enabled when global rate limiting is enabled.
    $settings->add(new admin_setting_configtext(
        'aiprovider_groq/globalratelimit',
        new lang_string('globalratelimit', 'aiprovider_groq'),
        new lang_string('globalratelimit_desc', 'aiprovider_groq'),
        100,
        PARAM_INT,
    ));
    $settings->hide_if('aiprovider_groq/globalratelimit', 'aiprovider_groq/enableglobalratelimit', 'eq', 0);

    // Setting to enable/disable user rate limiting.
    $settings->add(new admin_setting_configcheckbox(
        'aiprovider_groq/enableuserratelimit',
        new lang_string('enableuserratelimit', 'aiprovider_groq'),
        new lang_string('enableuserratelimit_desc', 'aiprovider_groq'),
        0,
    ));

    // Setting to set how many requests per hour are allowed for the user rate limit.
    // Should only be enabled when user rate limiting is enabled.
    $settings->add(new admin_setting_configtext(
        'aiprovider_groq/userratelimit',
        new lang_string('userratelimit', 'aiprovider_groq'),
        new lang_string('userratelimit_desc', 'aiprovider_groq'),
        10,
        PARAM_INT,
    ));
    $settings->hide_if('aiprovider_groq/userratelimit', 'aiprovider_groq/enableuserratelimit', 'eq', 0);

    $url = new moodle_url('../ai/provider/groq/test_connection.php');
    $link = html_writer::link($url, get_string('testaiservices', 'tool_aiconnect'));
    $settings->add(new admin_setting_heading('testaiconfiguration', new lang_string('testaiconfiguration', 'tool_aiconnect'),
        new lang_string('testoutgoingmaildetail', 'admin', $link)));
}
