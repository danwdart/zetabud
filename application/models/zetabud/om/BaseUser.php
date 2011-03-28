<?php


/**
 * Base class that represents a row from the 'user' table.
 *
 * 
 *
 * @package    propel.generator.zetabud.om
 */
abstract class BaseUser extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'UserPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        UserPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the username field.
	 * @var        string
	 */
	protected $username;

	/**
	 * The value for the password field.
	 * @var        string
	 */
	protected $password;

	/**
	 * The value for the fullname field.
	 * @var        string
	 */
	protected $fullname;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the created_date field.
	 * @var        string
	 */
	protected $created_date;

	/**
	 * The value for the modified_date field.
	 * @var        string
	 */
	protected $modified_date;

	/**
	 * The value for the last_active field.
	 * @var        string
	 */
	protected $last_active;

	/**
	 * @var        array AudioFile[] Collection to store aggregation of AudioFile objects.
	 */
	protected $collAudioFiles;

	/**
	 * @var        array Blog[] Collection to store aggregation of Blog objects.
	 */
	protected $collBlogs;

	/**
	 * @var        array ChatLine[] Collection to store aggregation of ChatLine objects.
	 */
	protected $collChatLines;

	/**
	 * @var        array Email[] Collection to store aggregation of Email objects.
	 */
	protected $collEmailsRelatedByUserFromId;

	/**
	 * @var        array Email[] Collection to store aggregation of Email objects.
	 */
	protected $collEmailsRelatedByUserToId;

	/**
	 * @var        array Friend[] Collection to store aggregation of Friend objects.
	 */
	protected $collFriendsRelatedByUser1Id;

	/**
	 * @var        array Friend[] Collection to store aggregation of Friend objects.
	 */
	protected $collFriendsRelatedByUser2Id;

	/**
	 * @var        array Note[] Collection to store aggregation of Note objects.
	 */
	protected $collNotes;

	/**
	 * @var        array Picture[] Collection to store aggregation of Picture objects.
	 */
	protected $collPictures;

	/**
	 * @var        array OStatus_User[] Collection to store aggregation of OStatus_User objects.
	 */
	protected $collOStatus_Users;

	/**
	 * @var        array VideoFile[] Collection to store aggregation of VideoFile objects.
	 */
	protected $collVideoFiles;

	/**
	 * @var        array User[] Collection to store aggregation of User objects.
	 */
	protected $collUsersRelatedByUser2Id;

	/**
	 * @var        array User[] Collection to store aggregation of User objects.
	 */
	protected $collUsersRelatedByUser1Id;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [username] column value.
	 * 
	 * @return     string
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * Get the [password] column value.
	 * 
	 * @return     string
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * Get the [fullname] column value.
	 * 
	 * @return     string
	 */
	public function getFullname()
	{
		return $this->fullname;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [optionally formatted] temporal [created_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreatedDate($format = 'Y-m-d H:i:s')
	{
		if ($this->created_date === null) {
			return null;
		}


		if ($this->created_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->created_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [modified_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getModifiedDate($format = 'Y-m-d H:i:s')
	{
		if ($this->modified_date === null) {
			return null;
		}


		if ($this->modified_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->modified_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->modified_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [last_active] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getLastActive($format = 'Y-m-d H:i:s')
	{
		if ($this->last_active === null) {
			return null;
		}


		if ($this->last_active === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->last_active);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->last_active, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = UserPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [username] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setUsername($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->username !== $v) {
			$this->username = $v;
			$this->modifiedColumns[] = UserPeer::USERNAME;
		}

		return $this;
	} // setUsername()

	/**
	 * Set the value of [password] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setPassword($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->password !== $v) {
			$this->password = $v;
			$this->modifiedColumns[] = UserPeer::PASSWORD;
		}

		return $this;
	} // setPassword()

	/**
	 * Set the value of [fullname] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setFullname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fullname !== $v) {
			$this->fullname = $v;
			$this->modifiedColumns[] = UserPeer::FULLNAME;
		}

		return $this;
	} // setFullname()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = UserPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Sets the value of [created_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     User The current object (for fluent API support)
	 */
	public function setCreatedDate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->created_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->created_date !== null && $tmpDt = new DateTime($this->created_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->created_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = UserPeer::CREATED_DATE;
			}
		} // if either are not null

		return $this;
	} // setCreatedDate()

	/**
	 * Sets the value of [modified_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     User The current object (for fluent API support)
	 */
	public function setModifiedDate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->modified_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->modified_date !== null && $tmpDt = new DateTime($this->modified_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->modified_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = UserPeer::MODIFIED_DATE;
			}
		} // if either are not null

		return $this;
	} // setModifiedDate()

	/**
	 * Sets the value of [last_active] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     User The current object (for fluent API support)
	 */
	public function setLastActive($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->last_active !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->last_active !== null && $tmpDt = new DateTime($this->last_active)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->last_active = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = UserPeer::LAST_ACTIVE;
			}
		} // if either are not null

		return $this;
	} // setLastActive()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->username = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->password = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->fullname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->created_date = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->modified_date = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->last_active = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = UserPeer::NUM_COLUMNS - UserPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating User object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = UserPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collAudioFiles = null;

			$this->collBlogs = null;

			$this->collChatLines = null;

			$this->collEmailsRelatedByUserFromId = null;

			$this->collEmailsRelatedByUserToId = null;

			$this->collFriendsRelatedByUser1Id = null;

			$this->collFriendsRelatedByUser2Id = null;

			$this->collNotes = null;

			$this->collPictures = null;

			$this->collOStatus_Users = null;

			$this->collVideoFiles = null;

			$this->collUsersRelatedByUser2Id = null;
			$this->collUsersRelatedByUser1Id = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				UserQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				UserPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = UserPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(UserPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.UserPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = UserPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collAudioFiles !== null) {
				foreach ($this->collAudioFiles as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collBlogs !== null) {
				foreach ($this->collBlogs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collChatLines !== null) {
				foreach ($this->collChatLines as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collEmailsRelatedByUserFromId !== null) {
				foreach ($this->collEmailsRelatedByUserFromId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collEmailsRelatedByUserToId !== null) {
				foreach ($this->collEmailsRelatedByUserToId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collFriendsRelatedByUser1Id !== null) {
				foreach ($this->collFriendsRelatedByUser1Id as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collFriendsRelatedByUser2Id !== null) {
				foreach ($this->collFriendsRelatedByUser2Id as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNotes !== null) {
				foreach ($this->collNotes as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPictures !== null) {
				foreach ($this->collPictures as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collOStatus_Users !== null) {
				foreach ($this->collOStatus_Users as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collVideoFiles !== null) {
				foreach ($this->collVideoFiles as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collAudioFiles !== null) {
					foreach ($this->collAudioFiles as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collBlogs !== null) {
					foreach ($this->collBlogs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collChatLines !== null) {
					foreach ($this->collChatLines as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collEmailsRelatedByUserFromId !== null) {
					foreach ($this->collEmailsRelatedByUserFromId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collEmailsRelatedByUserToId !== null) {
					foreach ($this->collEmailsRelatedByUserToId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFriendsRelatedByUser1Id !== null) {
					foreach ($this->collFriendsRelatedByUser1Id as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collFriendsRelatedByUser2Id !== null) {
					foreach ($this->collFriendsRelatedByUser2Id as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNotes !== null) {
					foreach ($this->collNotes as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPictures !== null) {
					foreach ($this->collPictures as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collOStatus_Users !== null) {
					foreach ($this->collOStatus_Users as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collVideoFiles !== null) {
					foreach ($this->collVideoFiles as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUsername();
				break;
			case 2:
				return $this->getPassword();
				break;
			case 3:
				return $this->getFullname();
				break;
			case 4:
				return $this->getEmail();
				break;
			case 5:
				return $this->getCreatedDate();
				break;
			case 6:
				return $this->getModifiedDate();
				break;
			case 7:
				return $this->getLastActive();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = UserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUsername(),
			$keys[2] => $this->getPassword(),
			$keys[3] => $this->getFullname(),
			$keys[4] => $this->getEmail(),
			$keys[5] => $this->getCreatedDate(),
			$keys[6] => $this->getModifiedDate(),
			$keys[7] => $this->getLastActive(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUsername($value);
				break;
			case 2:
				$this->setPassword($value);
				break;
			case 3:
				$this->setFullname($value);
				break;
			case 4:
				$this->setEmail($value);
				break;
			case 5:
				$this->setCreatedDate($value);
				break;
			case 6:
				$this->setModifiedDate($value);
				break;
			case 7:
				$this->setLastActive($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUsername($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPassword($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFullname($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedDate($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setModifiedDate($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLastActive($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserPeer::ID)) $criteria->add(UserPeer::ID, $this->id);
		if ($this->isColumnModified(UserPeer::USERNAME)) $criteria->add(UserPeer::USERNAME, $this->username);
		if ($this->isColumnModified(UserPeer::PASSWORD)) $criteria->add(UserPeer::PASSWORD, $this->password);
		if ($this->isColumnModified(UserPeer::FULLNAME)) $criteria->add(UserPeer::FULLNAME, $this->fullname);
		if ($this->isColumnModified(UserPeer::EMAIL)) $criteria->add(UserPeer::EMAIL, $this->email);
		if ($this->isColumnModified(UserPeer::CREATED_DATE)) $criteria->add(UserPeer::CREATED_DATE, $this->created_date);
		if ($this->isColumnModified(UserPeer::MODIFIED_DATE)) $criteria->add(UserPeer::MODIFIED_DATE, $this->modified_date);
		if ($this->isColumnModified(UserPeer::LAST_ACTIVE)) $criteria->add(UserPeer::LAST_ACTIVE, $this->last_active);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);
		$criteria->add(UserPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of User (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setUsername($this->username);
		$copyObj->setPassword($this->password);
		$copyObj->setFullname($this->fullname);
		$copyObj->setEmail($this->email);
		$copyObj->setCreatedDate($this->created_date);
		$copyObj->setModifiedDate($this->modified_date);
		$copyObj->setLastActive($this->last_active);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getAudioFiles() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addAudioFile($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getBlogs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addBlog($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getChatLines() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addChatLine($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getEmailsRelatedByUserFromId() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addEmailRelatedByUserFromId($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getEmailsRelatedByUserToId() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addEmailRelatedByUserToId($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getFriendsRelatedByUser1Id() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addFriendRelatedByUser1Id($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getFriendsRelatedByUser2Id() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addFriendRelatedByUser2Id($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNotes() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNote($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPictures() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPicture($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getOStatus_Users() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addOStatus_User($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getVideoFiles() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addVideoFile($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);
		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     User Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     UserPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new UserPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collAudioFiles collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addAudioFiles()
	 */
	public function clearAudioFiles()
	{
		$this->collAudioFiles = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collAudioFiles collection.
	 *
	 * By default this just sets the collAudioFiles collection to an empty array (like clearcollAudioFiles());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initAudioFiles()
	{
		$this->collAudioFiles = new PropelObjectCollection();
		$this->collAudioFiles->setModel('AudioFile');
	}

	/**
	 * Gets an array of AudioFile objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array AudioFile[] List of AudioFile objects
	 * @throws     PropelException
	 */
	public function getAudioFiles($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collAudioFiles || null !== $criteria) {
			if ($this->isNew() && null === $this->collAudioFiles) {
				// return empty collection
				$this->initAudioFiles();
			} else {
				$collAudioFiles = AudioFileQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collAudioFiles;
				}
				$this->collAudioFiles = $collAudioFiles;
			}
		}
		return $this->collAudioFiles;
	}

	/**
	 * Returns the number of related AudioFile objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related AudioFile objects.
	 * @throws     PropelException
	 */
	public function countAudioFiles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collAudioFiles || null !== $criteria) {
			if ($this->isNew() && null === $this->collAudioFiles) {
				return 0;
			} else {
				$query = AudioFileQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collAudioFiles);
		}
	}

	/**
	 * Method called to associate a AudioFile object to this object
	 * through the AudioFile foreign key attribute.
	 *
	 * @param      AudioFile $l AudioFile
	 * @return     void
	 * @throws     PropelException
	 */
	public function addAudioFile(AudioFile $l)
	{
		if ($this->collAudioFiles === null) {
			$this->initAudioFiles();
		}
		if (!$this->collAudioFiles->contains($l)) { // only add it if the **same** object is not already associated
			$this->collAudioFiles[]= $l;
			$l->setUser($this);
		}
	}

	/**
	 * Clears out the collBlogs collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addBlogs()
	 */
	public function clearBlogs()
	{
		$this->collBlogs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collBlogs collection.
	 *
	 * By default this just sets the collBlogs collection to an empty array (like clearcollBlogs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initBlogs()
	{
		$this->collBlogs = new PropelObjectCollection();
		$this->collBlogs->setModel('Blog');
	}

	/**
	 * Gets an array of Blog objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Blog[] List of Blog objects
	 * @throws     PropelException
	 */
	public function getBlogs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collBlogs || null !== $criteria) {
			if ($this->isNew() && null === $this->collBlogs) {
				// return empty collection
				$this->initBlogs();
			} else {
				$collBlogs = BlogQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collBlogs;
				}
				$this->collBlogs = $collBlogs;
			}
		}
		return $this->collBlogs;
	}

	/**
	 * Returns the number of related Blog objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Blog objects.
	 * @throws     PropelException
	 */
	public function countBlogs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collBlogs || null !== $criteria) {
			if ($this->isNew() && null === $this->collBlogs) {
				return 0;
			} else {
				$query = BlogQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collBlogs);
		}
	}

	/**
	 * Method called to associate a Blog object to this object
	 * through the Blog foreign key attribute.
	 *
	 * @param      Blog $l Blog
	 * @return     void
	 * @throws     PropelException
	 */
	public function addBlog(Blog $l)
	{
		if ($this->collBlogs === null) {
			$this->initBlogs();
		}
		if (!$this->collBlogs->contains($l)) { // only add it if the **same** object is not already associated
			$this->collBlogs[]= $l;
			$l->setUser($this);
		}
	}

	/**
	 * Clears out the collChatLines collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addChatLines()
	 */
	public function clearChatLines()
	{
		$this->collChatLines = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collChatLines collection.
	 *
	 * By default this just sets the collChatLines collection to an empty array (like clearcollChatLines());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initChatLines()
	{
		$this->collChatLines = new PropelObjectCollection();
		$this->collChatLines->setModel('ChatLine');
	}

	/**
	 * Gets an array of ChatLine objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array ChatLine[] List of ChatLine objects
	 * @throws     PropelException
	 */
	public function getChatLines($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collChatLines || null !== $criteria) {
			if ($this->isNew() && null === $this->collChatLines) {
				// return empty collection
				$this->initChatLines();
			} else {
				$collChatLines = ChatLineQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collChatLines;
				}
				$this->collChatLines = $collChatLines;
			}
		}
		return $this->collChatLines;
	}

	/**
	 * Returns the number of related ChatLine objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ChatLine objects.
	 * @throws     PropelException
	 */
	public function countChatLines(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collChatLines || null !== $criteria) {
			if ($this->isNew() && null === $this->collChatLines) {
				return 0;
			} else {
				$query = ChatLineQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collChatLines);
		}
	}

	/**
	 * Method called to associate a ChatLine object to this object
	 * through the ChatLine foreign key attribute.
	 *
	 * @param      ChatLine $l ChatLine
	 * @return     void
	 * @throws     PropelException
	 */
	public function addChatLine(ChatLine $l)
	{
		if ($this->collChatLines === null) {
			$this->initChatLines();
		}
		if (!$this->collChatLines->contains($l)) { // only add it if the **same** object is not already associated
			$this->collChatLines[]= $l;
			$l->setUser($this);
		}
	}

	/**
	 * Clears out the collEmailsRelatedByUserFromId collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addEmailsRelatedByUserFromId()
	 */
	public function clearEmailsRelatedByUserFromId()
	{
		$this->collEmailsRelatedByUserFromId = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collEmailsRelatedByUserFromId collection.
	 *
	 * By default this just sets the collEmailsRelatedByUserFromId collection to an empty array (like clearcollEmailsRelatedByUserFromId());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initEmailsRelatedByUserFromId()
	{
		$this->collEmailsRelatedByUserFromId = new PropelObjectCollection();
		$this->collEmailsRelatedByUserFromId->setModel('Email');
	}

	/**
	 * Gets an array of Email objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Email[] List of Email objects
	 * @throws     PropelException
	 */
	public function getEmailsRelatedByUserFromId($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collEmailsRelatedByUserFromId || null !== $criteria) {
			if ($this->isNew() && null === $this->collEmailsRelatedByUserFromId) {
				// return empty collection
				$this->initEmailsRelatedByUserFromId();
			} else {
				$collEmailsRelatedByUserFromId = EmailQuery::create(null, $criteria)
					->filterByUserFrom($this)
					->find($con);
				if (null !== $criteria) {
					return $collEmailsRelatedByUserFromId;
				}
				$this->collEmailsRelatedByUserFromId = $collEmailsRelatedByUserFromId;
			}
		}
		return $this->collEmailsRelatedByUserFromId;
	}

	/**
	 * Returns the number of related Email objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Email objects.
	 * @throws     PropelException
	 */
	public function countEmailsRelatedByUserFromId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collEmailsRelatedByUserFromId || null !== $criteria) {
			if ($this->isNew() && null === $this->collEmailsRelatedByUserFromId) {
				return 0;
			} else {
				$query = EmailQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUserFrom($this)
					->count($con);
			}
		} else {
			return count($this->collEmailsRelatedByUserFromId);
		}
	}

	/**
	 * Method called to associate a Email object to this object
	 * through the Email foreign key attribute.
	 *
	 * @param      Email $l Email
	 * @return     void
	 * @throws     PropelException
	 */
	public function addEmailRelatedByUserFromId(Email $l)
	{
		if ($this->collEmailsRelatedByUserFromId === null) {
			$this->initEmailsRelatedByUserFromId();
		}
		if (!$this->collEmailsRelatedByUserFromId->contains($l)) { // only add it if the **same** object is not already associated
			$this->collEmailsRelatedByUserFromId[]= $l;
			$l->setUserFrom($this);
		}
	}

	/**
	 * Clears out the collEmailsRelatedByUserToId collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addEmailsRelatedByUserToId()
	 */
	public function clearEmailsRelatedByUserToId()
	{
		$this->collEmailsRelatedByUserToId = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collEmailsRelatedByUserToId collection.
	 *
	 * By default this just sets the collEmailsRelatedByUserToId collection to an empty array (like clearcollEmailsRelatedByUserToId());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initEmailsRelatedByUserToId()
	{
		$this->collEmailsRelatedByUserToId = new PropelObjectCollection();
		$this->collEmailsRelatedByUserToId->setModel('Email');
	}

	/**
	 * Gets an array of Email objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Email[] List of Email objects
	 * @throws     PropelException
	 */
	public function getEmailsRelatedByUserToId($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collEmailsRelatedByUserToId || null !== $criteria) {
			if ($this->isNew() && null === $this->collEmailsRelatedByUserToId) {
				// return empty collection
				$this->initEmailsRelatedByUserToId();
			} else {
				$collEmailsRelatedByUserToId = EmailQuery::create(null, $criteria)
					->filterByUserTo($this)
					->find($con);
				if (null !== $criteria) {
					return $collEmailsRelatedByUserToId;
				}
				$this->collEmailsRelatedByUserToId = $collEmailsRelatedByUserToId;
			}
		}
		return $this->collEmailsRelatedByUserToId;
	}

	/**
	 * Returns the number of related Email objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Email objects.
	 * @throws     PropelException
	 */
	public function countEmailsRelatedByUserToId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collEmailsRelatedByUserToId || null !== $criteria) {
			if ($this->isNew() && null === $this->collEmailsRelatedByUserToId) {
				return 0;
			} else {
				$query = EmailQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUserTo($this)
					->count($con);
			}
		} else {
			return count($this->collEmailsRelatedByUserToId);
		}
	}

	/**
	 * Method called to associate a Email object to this object
	 * through the Email foreign key attribute.
	 *
	 * @param      Email $l Email
	 * @return     void
	 * @throws     PropelException
	 */
	public function addEmailRelatedByUserToId(Email $l)
	{
		if ($this->collEmailsRelatedByUserToId === null) {
			$this->initEmailsRelatedByUserToId();
		}
		if (!$this->collEmailsRelatedByUserToId->contains($l)) { // only add it if the **same** object is not already associated
			$this->collEmailsRelatedByUserToId[]= $l;
			$l->setUserTo($this);
		}
	}

	/**
	 * Clears out the collFriendsRelatedByUser1Id collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addFriendsRelatedByUser1Id()
	 */
	public function clearFriendsRelatedByUser1Id()
	{
		$this->collFriendsRelatedByUser1Id = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collFriendsRelatedByUser1Id collection.
	 *
	 * By default this just sets the collFriendsRelatedByUser1Id collection to an empty array (like clearcollFriendsRelatedByUser1Id());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initFriendsRelatedByUser1Id()
	{
		$this->collFriendsRelatedByUser1Id = new PropelObjectCollection();
		$this->collFriendsRelatedByUser1Id->setModel('Friend');
	}

	/**
	 * Gets an array of Friend objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Friend[] List of Friend objects
	 * @throws     PropelException
	 */
	public function getFriendsRelatedByUser1Id($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collFriendsRelatedByUser1Id || null !== $criteria) {
			if ($this->isNew() && null === $this->collFriendsRelatedByUser1Id) {
				// return empty collection
				$this->initFriendsRelatedByUser1Id();
			} else {
				$collFriendsRelatedByUser1Id = FriendQuery::create(null, $criteria)
					->filterByUserRelatedByUser1Id($this)
					->find($con);
				if (null !== $criteria) {
					return $collFriendsRelatedByUser1Id;
				}
				$this->collFriendsRelatedByUser1Id = $collFriendsRelatedByUser1Id;
			}
		}
		return $this->collFriendsRelatedByUser1Id;
	}

	/**
	 * Returns the number of related Friend objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Friend objects.
	 * @throws     PropelException
	 */
	public function countFriendsRelatedByUser1Id(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collFriendsRelatedByUser1Id || null !== $criteria) {
			if ($this->isNew() && null === $this->collFriendsRelatedByUser1Id) {
				return 0;
			} else {
				$query = FriendQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUserRelatedByUser1Id($this)
					->count($con);
			}
		} else {
			return count($this->collFriendsRelatedByUser1Id);
		}
	}

	/**
	 * Method called to associate a Friend object to this object
	 * through the Friend foreign key attribute.
	 *
	 * @param      Friend $l Friend
	 * @return     void
	 * @throws     PropelException
	 */
	public function addFriendRelatedByUser1Id(Friend $l)
	{
		if ($this->collFriendsRelatedByUser1Id === null) {
			$this->initFriendsRelatedByUser1Id();
		}
		if (!$this->collFriendsRelatedByUser1Id->contains($l)) { // only add it if the **same** object is not already associated
			$this->collFriendsRelatedByUser1Id[]= $l;
			$l->setUserRelatedByUser1Id($this);
		}
	}

	/**
	 * Clears out the collFriendsRelatedByUser2Id collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addFriendsRelatedByUser2Id()
	 */
	public function clearFriendsRelatedByUser2Id()
	{
		$this->collFriendsRelatedByUser2Id = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collFriendsRelatedByUser2Id collection.
	 *
	 * By default this just sets the collFriendsRelatedByUser2Id collection to an empty array (like clearcollFriendsRelatedByUser2Id());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initFriendsRelatedByUser2Id()
	{
		$this->collFriendsRelatedByUser2Id = new PropelObjectCollection();
		$this->collFriendsRelatedByUser2Id->setModel('Friend');
	}

	/**
	 * Gets an array of Friend objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Friend[] List of Friend objects
	 * @throws     PropelException
	 */
	public function getFriendsRelatedByUser2Id($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collFriendsRelatedByUser2Id || null !== $criteria) {
			if ($this->isNew() && null === $this->collFriendsRelatedByUser2Id) {
				// return empty collection
				$this->initFriendsRelatedByUser2Id();
			} else {
				$collFriendsRelatedByUser2Id = FriendQuery::create(null, $criteria)
					->filterByUserRelatedByUser2Id($this)
					->find($con);
				if (null !== $criteria) {
					return $collFriendsRelatedByUser2Id;
				}
				$this->collFriendsRelatedByUser2Id = $collFriendsRelatedByUser2Id;
			}
		}
		return $this->collFriendsRelatedByUser2Id;
	}

	/**
	 * Returns the number of related Friend objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Friend objects.
	 * @throws     PropelException
	 */
	public function countFriendsRelatedByUser2Id(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collFriendsRelatedByUser2Id || null !== $criteria) {
			if ($this->isNew() && null === $this->collFriendsRelatedByUser2Id) {
				return 0;
			} else {
				$query = FriendQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUserRelatedByUser2Id($this)
					->count($con);
			}
		} else {
			return count($this->collFriendsRelatedByUser2Id);
		}
	}

	/**
	 * Method called to associate a Friend object to this object
	 * through the Friend foreign key attribute.
	 *
	 * @param      Friend $l Friend
	 * @return     void
	 * @throws     PropelException
	 */
	public function addFriendRelatedByUser2Id(Friend $l)
	{
		if ($this->collFriendsRelatedByUser2Id === null) {
			$this->initFriendsRelatedByUser2Id();
		}
		if (!$this->collFriendsRelatedByUser2Id->contains($l)) { // only add it if the **same** object is not already associated
			$this->collFriendsRelatedByUser2Id[]= $l;
			$l->setUserRelatedByUser2Id($this);
		}
	}

	/**
	 * Clears out the collNotes collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNotes()
	 */
	public function clearNotes()
	{
		$this->collNotes = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNotes collection.
	 *
	 * By default this just sets the collNotes collection to an empty array (like clearcollNotes());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNotes()
	{
		$this->collNotes = new PropelObjectCollection();
		$this->collNotes->setModel('Note');
	}

	/**
	 * Gets an array of Note objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Note[] List of Note objects
	 * @throws     PropelException
	 */
	public function getNotes($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNotes || null !== $criteria) {
			if ($this->isNew() && null === $this->collNotes) {
				// return empty collection
				$this->initNotes();
			} else {
				$collNotes = NoteQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collNotes;
				}
				$this->collNotes = $collNotes;
			}
		}
		return $this->collNotes;
	}

	/**
	 * Returns the number of related Note objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Note objects.
	 * @throws     PropelException
	 */
	public function countNotes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNotes || null !== $criteria) {
			if ($this->isNew() && null === $this->collNotes) {
				return 0;
			} else {
				$query = NoteQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collNotes);
		}
	}

	/**
	 * Method called to associate a Note object to this object
	 * through the Note foreign key attribute.
	 *
	 * @param      Note $l Note
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNote(Note $l)
	{
		if ($this->collNotes === null) {
			$this->initNotes();
		}
		if (!$this->collNotes->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNotes[]= $l;
			$l->setUser($this);
		}
	}

	/**
	 * Clears out the collPictures collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPictures()
	 */
	public function clearPictures()
	{
		$this->collPictures = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPictures collection.
	 *
	 * By default this just sets the collPictures collection to an empty array (like clearcollPictures());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initPictures()
	{
		$this->collPictures = new PropelObjectCollection();
		$this->collPictures->setModel('Picture');
	}

	/**
	 * Gets an array of Picture objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Picture[] List of Picture objects
	 * @throws     PropelException
	 */
	public function getPictures($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPictures || null !== $criteria) {
			if ($this->isNew() && null === $this->collPictures) {
				// return empty collection
				$this->initPictures();
			} else {
				$collPictures = PictureQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collPictures;
				}
				$this->collPictures = $collPictures;
			}
		}
		return $this->collPictures;
	}

	/**
	 * Returns the number of related Picture objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Picture objects.
	 * @throws     PropelException
	 */
	public function countPictures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPictures || null !== $criteria) {
			if ($this->isNew() && null === $this->collPictures) {
				return 0;
			} else {
				$query = PictureQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collPictures);
		}
	}

	/**
	 * Method called to associate a Picture object to this object
	 * through the Picture foreign key attribute.
	 *
	 * @param      Picture $l Picture
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPicture(Picture $l)
	{
		if ($this->collPictures === null) {
			$this->initPictures();
		}
		if (!$this->collPictures->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPictures[]= $l;
			$l->setUser($this);
		}
	}

	/**
	 * Clears out the collOStatus_Users collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addOStatus_Users()
	 */
	public function clearOStatus_Users()
	{
		$this->collOStatus_Users = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collOStatus_Users collection.
	 *
	 * By default this just sets the collOStatus_Users collection to an empty array (like clearcollOStatus_Users());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initOStatus_Users()
	{
		$this->collOStatus_Users = new PropelObjectCollection();
		$this->collOStatus_Users->setModel('OStatus_User');
	}

	/**
	 * Gets an array of OStatus_User objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array OStatus_User[] List of OStatus_User objects
	 * @throws     PropelException
	 */
	public function getOStatus_Users($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collOStatus_Users || null !== $criteria) {
			if ($this->isNew() && null === $this->collOStatus_Users) {
				// return empty collection
				$this->initOStatus_Users();
			} else {
				$collOStatus_Users = OStatus_UserQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collOStatus_Users;
				}
				$this->collOStatus_Users = $collOStatus_Users;
			}
		}
		return $this->collOStatus_Users;
	}

	/**
	 * Returns the number of related OStatus_User objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related OStatus_User objects.
	 * @throws     PropelException
	 */
	public function countOStatus_Users(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collOStatus_Users || null !== $criteria) {
			if ($this->isNew() && null === $this->collOStatus_Users) {
				return 0;
			} else {
				$query = OStatus_UserQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collOStatus_Users);
		}
	}

	/**
	 * Method called to associate a OStatus_User object to this object
	 * through the OStatus_User foreign key attribute.
	 *
	 * @param      OStatus_User $l OStatus_User
	 * @return     void
	 * @throws     PropelException
	 */
	public function addOStatus_User(OStatus_User $l)
	{
		if ($this->collOStatus_Users === null) {
			$this->initOStatus_Users();
		}
		if (!$this->collOStatus_Users->contains($l)) { // only add it if the **same** object is not already associated
			$this->collOStatus_Users[]= $l;
			$l->setUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this User is new, it will return
	 * an empty collection; or if this User has previously
	 * been saved, it will retrieve related OStatus_Users from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in User.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array OStatus_User[] List of OStatus_User objects
	 */
	public function getOStatus_UsersJoinOStatus_Site($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = OStatus_UserQuery::create(null, $criteria);
		$query->joinWith('OStatus_Site', $join_behavior);

		return $this->getOStatus_Users($query, $con);
	}

	/**
	 * Clears out the collVideoFiles collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addVideoFiles()
	 */
	public function clearVideoFiles()
	{
		$this->collVideoFiles = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collVideoFiles collection.
	 *
	 * By default this just sets the collVideoFiles collection to an empty array (like clearcollVideoFiles());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initVideoFiles()
	{
		$this->collVideoFiles = new PropelObjectCollection();
		$this->collVideoFiles->setModel('VideoFile');
	}

	/**
	 * Gets an array of VideoFile objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array VideoFile[] List of VideoFile objects
	 * @throws     PropelException
	 */
	public function getVideoFiles($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collVideoFiles || null !== $criteria) {
			if ($this->isNew() && null === $this->collVideoFiles) {
				// return empty collection
				$this->initVideoFiles();
			} else {
				$collVideoFiles = VideoFileQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collVideoFiles;
				}
				$this->collVideoFiles = $collVideoFiles;
			}
		}
		return $this->collVideoFiles;
	}

	/**
	 * Returns the number of related VideoFile objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related VideoFile objects.
	 * @throws     PropelException
	 */
	public function countVideoFiles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collVideoFiles || null !== $criteria) {
			if ($this->isNew() && null === $this->collVideoFiles) {
				return 0;
			} else {
				$query = VideoFileQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collVideoFiles);
		}
	}

	/**
	 * Method called to associate a VideoFile object to this object
	 * through the VideoFile foreign key attribute.
	 *
	 * @param      VideoFile $l VideoFile
	 * @return     void
	 * @throws     PropelException
	 */
	public function addVideoFile(VideoFile $l)
	{
		if ($this->collVideoFiles === null) {
			$this->initVideoFiles();
		}
		if (!$this->collVideoFiles->contains($l)) { // only add it if the **same** object is not already associated
			$this->collVideoFiles[]= $l;
			$l->setUser($this);
		}
	}

	/**
	 * Clears out the collUsersRelatedByUser2Id collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addUsersRelatedByUser2Id()
	 */
	public function clearUsersRelatedByUser2Id()
	{
		$this->collUsersRelatedByUser2Id = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collUsersRelatedByUser2Id collection.
	 *
	 * By default this just sets the collUsersRelatedByUser2Id collection to an empty collection (like clearUsersRelatedByUser2Id());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initUsersRelatedByUser2Id()
	{
		$this->collUsersRelatedByUser2Id = new PropelObjectCollection();
		$this->collUsersRelatedByUser2Id->setModel('User');
	}

	/**
	 * Gets a collection of User objects related by a many-to-many relationship
	 * to the current object by way of the friend cross-reference table.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     PropelCollection|array User[] List of User objects
	 */
	public function getUsersRelatedByUser2Id($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collUsersRelatedByUser2Id || null !== $criteria) {
			if ($this->isNew() && null === $this->collUsersRelatedByUser2Id) {
				// return empty collection
				$this->initUsersRelatedByUser2Id();
			} else {
				$collUsersRelatedByUser2Id = UserQuery::create(null, $criteria)
					->filterByUserRelatedByUser1Id($this)
					->find($con);
				if (null !== $criteria) {
					return $collUsersRelatedByUser2Id;
				}
				$this->collUsersRelatedByUser2Id = $collUsersRelatedByUser2Id;
			}
		}
		return $this->collUsersRelatedByUser2Id;
	}

	/**
	 * Gets the number of User objects related by a many-to-many relationship
	 * to the current object by way of the friend cross-reference table.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      boolean $distinct Set to true to force count distinct
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     int the number of related User objects
	 */
	public function countUsersRelatedByUser2Id($criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collUsersRelatedByUser2Id || null !== $criteria) {
			if ($this->isNew() && null === $this->collUsersRelatedByUser2Id) {
				return 0;
			} else {
				$query = UserQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUserRelatedByUser1Id($this)
					->count($con);
			}
		} else {
			return count($this->collUsersRelatedByUser2Id);
		}
	}

	/**
	 * Associate a User object to this object
	 * through the friend cross reference table.
	 *
	 * @param      User $user The Friend object to relate
	 * @return     void
	 */
	public function addUserRelatedByUser2Id($user)
	{
		if ($this->collUsersRelatedByUser2Id === null) {
			$this->initUsersRelatedByUser2Id();
		}
		if (!$this->collUsersRelatedByUser2Id->contains($user)) { // only add it if the **same** object is not already associated
			$friend = new Friend();
			$friend->setUserRelatedByUser2Id($user);
			$this->addFriendRelatedByUser1Id($friend);

			$this->collUsersRelatedByUser2Id[]= $user;
		}
	}

	/**
	 * Clears out the collUsersRelatedByUser1Id collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addUsersRelatedByUser1Id()
	 */
	public function clearUsersRelatedByUser1Id()
	{
		$this->collUsersRelatedByUser1Id = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collUsersRelatedByUser1Id collection.
	 *
	 * By default this just sets the collUsersRelatedByUser1Id collection to an empty collection (like clearUsersRelatedByUser1Id());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initUsersRelatedByUser1Id()
	{
		$this->collUsersRelatedByUser1Id = new PropelObjectCollection();
		$this->collUsersRelatedByUser1Id->setModel('User');
	}

	/**
	 * Gets a collection of User objects related by a many-to-many relationship
	 * to the current object by way of the friend cross-reference table.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     PropelCollection|array User[] List of User objects
	 */
	public function getUsersRelatedByUser1Id($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collUsersRelatedByUser1Id || null !== $criteria) {
			if ($this->isNew() && null === $this->collUsersRelatedByUser1Id) {
				// return empty collection
				$this->initUsersRelatedByUser1Id();
			} else {
				$collUsersRelatedByUser1Id = UserQuery::create(null, $criteria)
					->filterByUserRelatedByUser2Id($this)
					->find($con);
				if (null !== $criteria) {
					return $collUsersRelatedByUser1Id;
				}
				$this->collUsersRelatedByUser1Id = $collUsersRelatedByUser1Id;
			}
		}
		return $this->collUsersRelatedByUser1Id;
	}

	/**
	 * Gets the number of User objects related by a many-to-many relationship
	 * to the current object by way of the friend cross-reference table.
	 *
	 * @param      Criteria $criteria Optional query object to filter the query
	 * @param      boolean $distinct Set to true to force count distinct
	 * @param      PropelPDO $con Optional connection object
	 *
	 * @return     int the number of related User objects
	 */
	public function countUsersRelatedByUser1Id($criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collUsersRelatedByUser1Id || null !== $criteria) {
			if ($this->isNew() && null === $this->collUsersRelatedByUser1Id) {
				return 0;
			} else {
				$query = UserQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUserRelatedByUser2Id($this)
					->count($con);
			}
		} else {
			return count($this->collUsersRelatedByUser1Id);
		}
	}

	/**
	 * Associate a User object to this object
	 * through the friend cross reference table.
	 *
	 * @param      User $user The Friend object to relate
	 * @return     void
	 */
	public function addUserRelatedByUser1Id($user)
	{
		if ($this->collUsersRelatedByUser1Id === null) {
			$this->initUsersRelatedByUser1Id();
		}
		if (!$this->collUsersRelatedByUser1Id->contains($user)) { // only add it if the **same** object is not already associated
			$friend = new Friend();
			$friend->setUserRelatedByUser1Id($user);
			$this->addFriendRelatedByUser2Id($friend);

			$this->collUsersRelatedByUser1Id[]= $user;
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->username = null;
		$this->password = null;
		$this->fullname = null;
		$this->email = null;
		$this->created_date = null;
		$this->modified_date = null;
		$this->last_active = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collAudioFiles) {
				foreach ((array) $this->collAudioFiles as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collBlogs) {
				foreach ((array) $this->collBlogs as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collChatLines) {
				foreach ((array) $this->collChatLines as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collEmailsRelatedByUserFromId) {
				foreach ((array) $this->collEmailsRelatedByUserFromId as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collEmailsRelatedByUserToId) {
				foreach ((array) $this->collEmailsRelatedByUserToId as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collFriendsRelatedByUser1Id) {
				foreach ((array) $this->collFriendsRelatedByUser1Id as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collFriendsRelatedByUser2Id) {
				foreach ((array) $this->collFriendsRelatedByUser2Id as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNotes) {
				foreach ((array) $this->collNotes as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPictures) {
				foreach ((array) $this->collPictures as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collOStatus_Users) {
				foreach ((array) $this->collOStatus_Users as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collVideoFiles) {
				foreach ((array) $this->collVideoFiles as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collAudioFiles = null;
		$this->collBlogs = null;
		$this->collChatLines = null;
		$this->collEmailsRelatedByUserFromId = null;
		$this->collEmailsRelatedByUserToId = null;
		$this->collFriendsRelatedByUser1Id = null;
		$this->collFriendsRelatedByUser2Id = null;
		$this->collNotes = null;
		$this->collPictures = null;
		$this->collOStatus_Users = null;
		$this->collVideoFiles = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BaseUser
