<?php

/**
 * @file classes/security/PKPRole.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPRole
 * @ingroup security
 * @see RoleDAO
 *
 * @brief Describes generic PKP user roles within the system and the associated permissions.
 */

/** ID codes and paths for all default roles */
define('ROLE_ID_MANAGER',		0x00000010);
define('ROLE_ID_SITE_ADMIN',		0x00000001);
define('ROLE_ID_AUTHOR',		0x00010000);
define('ROLE_ID_REVIEWER',		0x00001000);
define('ROLE_ID_ASSISTANT',		0x00001001);
define('ROLE_ID_READER',		0x00100000);

class PKPRole extends DataObject {
	/**
	 * Constructor.
	 * @param $roleId for this role.  Default to null for backwards
	 * 	compatibility
	 */
	function PKPRole($roleId = null) {
		parent::DataObject();
		$this->setId($roleId);
	}


	//
	// Get/set methods
	//
	/**
	 * Get role ID of this role.
	 * @return int
	 */
	function getRoleId() {
		return $this->getId();
	}

	/**
	 * Set role ID of this role.
	 * @param $roleId int
	 */
	function setRoleId($roleId) {
		return $this->setId($roleId);
	}
}

?>
