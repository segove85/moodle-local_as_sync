<?php
/**
 * Version information
 *
 * @package    local
 * @subpackage as_sync
 * @author     Sebastian Gomez Velasco (sebastian.gomez.velasco@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die('Direct access to this script is forbidden.');

$plugin->version = 2016082512;
$plugin->component = 'local_as_sync';
$plugin->requires = 2013111800;
$plugin->maturity = MATURITY_STABLE;
$plugin->cron = 60;
