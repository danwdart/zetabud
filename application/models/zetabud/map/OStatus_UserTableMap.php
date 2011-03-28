<?php



/**
 * This class defines the structure of the 'ostatus_user' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.zetabud.map
 */
class OStatus_UserTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'zetabud.map.OStatus_UserTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('ostatus_user');
		$this->setPhpName('OStatus_User');
		$this->setClassname('OStatus_User');
		$this->setPackage('zetabud');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', true, null, null);
		$this->addForeignKey('SITE_ID', 'SiteId', 'INTEGER', 'ostatus_site', 'ID', true, null, null);
		$this->addColumn('REQUEST_TOKEN', 'RequestToken', 'VARCHAR', true, 255, null);
		$this->addColumn('ACCESS_TOKEN', 'AccessToken', 'VARCHAR', true, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
    $this->addRelation('OStatus_Site', 'OStatus_Site', RelationMap::MANY_TO_ONE, array('site_id' => 'id', ), null, null);
	} // buildRelations()

} // OStatus_UserTableMap
