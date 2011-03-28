<?php



/**
 * This class defines the structure of the 'ostatus_site' table.
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
class OStatus_SiteTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'zetabud.map.OStatus_SiteTableMap';

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
		$this->setName('ostatus_site');
		$this->setPhpName('OStatus_Site');
		$this->setClassname('OStatus_Site');
		$this->setPackage('zetabud');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('FULLNAME', 'Fullname', 'VARCHAR', true, 50, null);
		$this->addColumn('SHORTNAME', 'Shortname', 'VARCHAR', true, 30, null);
		$this->addColumn('CONSUMER_KEY', 'ConsumerKey', 'VARCHAR', true, 255, null);
		$this->addColumn('CONSUMER_SECRET', 'ConsumerSecret', 'VARCHAR', true, 255, null);
		$this->addColumn('SITE_URL', 'SiteUrl', 'VARCHAR', true, 255, null);
		$this->addColumn('REQUEST_TOKEN_URL', 'RequestTokenUrl', 'VARCHAR', true, 255, null);
		$this->addColumn('ACCESS_TOKEN_URL', 'AccessTokenUrl', 'VARCHAR', true, 255, null);
		$this->addColumn('AUTHORIZE_URL', 'AuthorizeUrl', 'VARCHAR', true, 255, null);
		$this->addColumn('UPDATE_URL', 'UpdateUrl', 'VARCHAR', true, 255, null);
		$this->addColumn('UPDATE_PARAM', 'UpdateParam', 'VARCHAR', true, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('OStatus_User', 'OStatus_User', RelationMap::ONE_TO_MANY, array('id' => 'site_id', ), null, null);
	} // buildRelations()

} // OStatus_SiteTableMap
