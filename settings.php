<?php
/**
 * ownCloud - disclaimer
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Mikel Olasagasti Uranga <mikel@olasagasti.info>
 * @copyright Mikel Olasagasti Uranga 2015
 */

OCP\User::checkAdminUser ();

$tmpl = new OCP\Template ( 'disclaimer', 'settings' );

return $tmpl->fetchPage ();
?>
