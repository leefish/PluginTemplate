<?php
/**
 * PluginTemplate core plugin
 *
 * @author euantor <euan@euantor.com>
 * @version 1.0
 * @copyright euantor 2012
 * @package PluginTemplate
 * 
 * This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if (!defined('IN_MYBB'))
{
    die('Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.');
}

/**
 * Information function
 *
 * Returns information about the plugin to be displayed on the plugin listing page
 *
 * @return Array
 */
function PluginTemplate_info()
{
    global $lang;

    if (!$lang->PluginTemplate)
    {
        $lang->load('PluginTemplate');
    }

    return array(
        'name'          =>  $lang->PluginTemplate_info_name,
        'description'   =>  $lang->PluginTemplate_info_name,
        'website'       =>  'http://euantor.com',
        'author'        =>  'euantor',
        'authorsite'    =>  'http://euantor.com',
        'version'       =>  '1.0.0',
        'guid'          =>  '',
        'compatibility' =>  '16*',
        );
}


/**
 * Installation function
 *
 * Performs actions on installation. Recommended to add new tables and make table modifications here.
 *
 * @return null
 */
function PluginTemplate_install()
{
    global $db, $mybb;

    // Installation procedure
}

/**
 * Installation check function
 *
 * Check to see if the plugin is installed
 *
 * @return bool - true if installed, false if not.
 */
function PluginTemplate_is_installed()
{
    global $db, $mybb;

    // Check if installed - generally see if a table exists and return true if it does
}

/**
 * UnInstallation function
 *
 * Performs actions on uninstallation. Revert any changes made in PluginTemplate_install().
 *
 * @return null
 */
function PluginTemplate_uninstall()
{
    global $db, $mybb;

    // UnInstallation procedure
}

/**
 * Activation function
 *
 * Performs actions on activation.
 *
 * @return null
 */
function PluginTemplate_activate()
{
    global $db, $mybb;

    // Activation procedure
}

/**
 * DeActivation function
 *
 * Performs actions on deactivation.
 *
 * @return null
 */
function PluginTemplate_deactivate()
{
    global $db, $mybb;

    // DeActivation procedure
}

$plugins->add_hook('index_start', 'PluginTemplate_index_start');
function PluginTemplate_index_start()
{
    echo "PluginTemplate!";
}
 ?>