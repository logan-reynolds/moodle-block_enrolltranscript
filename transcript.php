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
 *
 * @package    block_enrolltranscripts
 * @copyright  2013 eabyas.in
 * @author     Niranjan <niranjan@eabyas.in>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->dirroot . '/blocks/enrolltranscripts/lib.php');



require_login();



$systemcontext = context_system::instance;
$header = $SITE->shortname;

// Start setting up the page
$params = array();
$PAGE->set_context($systemcontext);
$PAGE->set_url('/local/enrolltranscript/index.php', $params);
$PAGE->set_pagelayout('mydashboard');


$PAGE->set_title($header);
$PAGE->set_heading($header);

$PAGE->navbar->add(get_string('viewtranscripts', 'block_enrolltranscripts'));




echo $OUTPUT->header();



echo '<div id="tabs">
    <h2>'.get_string('transcript','block_enrolltranscripts').'</h2>';
$mylearnings=mytranscripts($USER->id);  
//echo $mylearnings;  
   	
echo '</div>';

echo $OUTPUT->footer();
?>