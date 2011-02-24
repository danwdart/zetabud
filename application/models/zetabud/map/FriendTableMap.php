<?php



/**
 * This class defines the structure of the 'friend' table.
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
class FriendTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'zetabud.map.FriendTableMap';

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
		$this->setName('friend');
		$this->setPhpName('Friend');
		$this->setClassname('Friend');
		$this->setPackage('zetabud');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('USER1_ID', 'User1Id', 'INTEGER', 'user', 'ID', true, null, null);
		$this->addForeignKey('USER2_ID', 'User2Id', 'INTEGER', 'user', 'ID', true, null, null);
		$this->addColumn('FRIEND_GROUP_ID', 'FriendGroupId', 'INTEGER', true, null, null);
		$this->addColumn('REQUESTED_DATE', 'RequestedDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('CONFIRMED_DATE', 'ConfirmedDate', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('UserRelatedByUser1Id', 'User', RelationMap::MANY_TO_ONE, array('user1_id' => 'id', ), null, null);
    $this->addRelation('UserRelatedByUser2Id', 'User', RelationMap::MANY_TO_ONE, array('user2_id' => 'id', ), null, null);
	} // buildRelations()

} // FriendTableMap
