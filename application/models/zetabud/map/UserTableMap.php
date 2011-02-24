<?php



/**
 * This class defines the structure of the 'user' table.
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
class UserTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'zetabud.map.UserTableMap';

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
		$this->setName('user');
		$this->setPhpName('User');
		$this->setClassname('User');
		$this->setPackage('zetabud');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('USERNAME', 'Username', 'VARCHAR', true, 255, null);
		$this->addColumn('PASSWORD', 'Password', 'VARCHAR', true, 255, null);
		$this->addColumn('FULLNAME', 'Fullname', 'VARCHAR', true, 255, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 255, null);
		$this->addColumn('CREATED_DATE', 'CreatedDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('MODIFIED_DATE', 'ModifiedDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('LAST_ACTIVE', 'LastActive', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('AudioFile', 'AudioFile', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null);
    $this->addRelation('Blog', 'Blog', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null);
    $this->addRelation('ChatLine', 'ChatLine', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null);
    $this->addRelation('EmailRelatedByUserFromId', 'Email', RelationMap::ONE_TO_MANY, array('id' => 'user_from_id', ), null, null);
    $this->addRelation('EmailRelatedByUserToId', 'Email', RelationMap::ONE_TO_MANY, array('id' => 'user_to_id', ), null, null);
    $this->addRelation('FriendRelatedByUser1Id', 'Friend', RelationMap::ONE_TO_MANY, array('id' => 'user1_id', ), null, null);
    $this->addRelation('FriendRelatedByUser2Id', 'Friend', RelationMap::ONE_TO_MANY, array('id' => 'user2_id', ), null, null);
    $this->addRelation('Note', 'Note', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null);
    $this->addRelation('Picture', 'Picture', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null);
    $this->addRelation('VideoFile', 'VideoFile', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null);
    $this->addRelation('UserRelatedByUser2Id', 'User', RelationMap::MANY_TO_MANY, array(), null, null);
    $this->addRelation('UserRelatedByUser1Id', 'User', RelationMap::MANY_TO_MANY, array(), null, null);
	} // buildRelations()

} // UserTableMap
