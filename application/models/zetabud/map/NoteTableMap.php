<?php



/**
 * This class defines the structure of the 'note' table.
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
class NoteTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'zetabud.map.NoteTableMap';

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
		$this->setName('note');
		$this->setPhpName('Note');
		$this->setClassname('Note');
		$this->setPackage('zetabud');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('USER_ID', 'UserId', 'INTEGER', true, null, null);
		$this->addColumn('TEXT', 'Text', 'LONGVARCHAR', true, null, null);
		$this->addColumn('CREATED_DATE', 'CreatedDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('MODIFIED_DATE', 'ModifiedDate', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // NoteTableMap
