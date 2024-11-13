<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component aiprovider_groq, language 'en'.
 *
 * @package    aiprovider_groq
 * @copyright  2024 Marcus Green
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['action:generate_image:endpoint'] = 'API endpoint';
$string['action:generate_image:model'] = 'AI model';
$string['action:generate_image:model_desc'] = 'The model used to generate images from user prompts.';
$string['action:generate_text:endpoint'] = 'API endpoint';
$string['action:generate_text:model'] = 'AI model';
$string['action:generate_text:model_desc'] = 'The model used to generate the text response.
A list can be found at <a href=https://console.groq.com/docs/models target="_blank"_>https://console.groq.com/docs/models</a>';
$string['action:generate_text:systeminstruction'] = 'System instruction';
$string['action:generate_text:systeminstruction_desc'] = 'This instruction is sent to the AI model along with the user\'s prompt. Editing this instruction is not recommended unless absolutely required.';
$string['action:generate_text:temperature'] = 'Temperature';
$string['action:generate_text:temperature_desc'] = 'The randomness or creativity. Low temperature will generate more coherent but predictable text. The range is from 0 to 2.';

$string['action:summarise_text:endpoint'] = 'API endpoint';
$string['action:summarise_text:model'] = 'AI model';
$string['action:summarise_text:model_desc'] = 'The model used to summarise the provided text.';
$string['action:summarise_text:systeminstruction'] = 'System instruction';
$string['action:summarise_text:systeminstruction_desc'] = 'This instruction is sent to the AI model along with the user\'s prompt. Editing this instruction is not recommended unless absolutely required.';
$string['action:summarise_text:temperature'] = 'Temperature';
$string['action:summarise_text:temperature_desc'] = 'The randomness or creativity. Low temperature will generate more coherent but predictable text. The range is from 0 to 2.';

$string['apikey'] = 'Groq API key';
$string['apikey_desc'] = 'Get a key from your <a href="https://console.groq.com/keys" target="_blank">Groq API keys</a>.';
$string['enableglobalratelimit'] = 'Set site-wide rate limit';
$string['enableglobalratelimit_desc'] = 'Limit the number of requests that the groq API provider can receive across the entire site every hour.';
$string['enableuserratelimit'] = 'Set user rate limit';
$string['enableuserratelimit_desc'] = 'Limit the number of requests each user can make to the groq API provider every hour.';
$string['globalratelimit'] = 'Maximum number of site-wide requests';
$string['globalratelimit_desc'] = 'The number of site-wide requests allowed per hour.';
$string['orgid'] = 'Groq organization ID';
$string['orgid_desc'] = 'Get your Groq organization ID from your <a href="https://console.groq.com/settings" target="_blank">groq account</a>.';
$string['pluginname'] = 'Groq API Provider';
$string['privacy:metadata'] = 'The Groq API provider plugin does not store any personal data.';
$string['privacy:metadata:aiprovider_groq:externalpurpose'] = 'This information is sent to the groq API in order for a response to be generated. Your groq account settings may change how groq stores and retains this data. No user data is explicitly sent to groq or stored in Moodle LMS by this plugin.';
$string['privacy:metadata:aiprovider_groq:model'] = 'The model used to generate the response.';
$string['privacy:metadata:aiprovider_groq:numberimages'] = 'The number of images used in the response. When generating images.';
$string['privacy:metadata:aiprovider_groq:prompttext'] = 'The user entered text prompt used to generate the response.';
$string['privacy:metadata:aiprovider_groq:responseformat'] = 'The format of the response. When generating images.';
$string['userratelimit'] = 'Maximum number of requests per user';
$string['userratelimit_desc'] = 'The number of requests allowed per hour, per user.';
$string['testaiconfiguration'] = 'Test AI configuration';
$string['testaiservices'] = 'Make a test request to the external system to confirm the configuration is correct';
