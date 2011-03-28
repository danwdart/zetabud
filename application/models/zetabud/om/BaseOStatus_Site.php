<?php


/**
 * Base class that represents a row from the 'ostatus_site' table.
 *
 * 
 *
 * @package    propel.generator.zetabud.om
 */
abstract class BaseOStatus_Site extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'OStatus_SitePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        OStatus_SitePeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the fullname field.
	 * @var        string
	 */
	protected $fullname;

	/**
	 * The value for the shortname field.
	 * @var        string
	 */
	protected $shortname;

	/**
	 * The value for the consumer_key field.
	 * @var        string
	 */
	protected $consumer_key;

	/**
	 * The value for the consumer_secret field.
	 * @var        string
	 */
	protected $consumer_secret;

	/**
	 * The value for the site_url field.
	 * @var        string
	 */
	protected $site_url;

	/**
	 * The value for the request_token_url field.
	 * @var        string
	 */
	protected $request_token_url;

	/**
	 * The value for the access_token_url field.
	 * @var        string
	 */
	protected $access_token_url;

	/**
	 * The value for the authorize_url field.
	 * @var        string
	 */
	protected $authorize_url;

	/**
	 * The value for the update_url field.
	 * @var        string
	 */
	protected $update_url;

	/**
	 * The value for the update_param field.
	 * @var        string
	 */
	protected $update_param;

	/**
	 * @var        array OStatus_User[] Collection to store aggregation of OStatus_User objects.
	 */
	protected $collOStatus_Users;

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
	 * Get the [fullname] column value.
	 * 
	 * @return     string
	 */
	public function getFullname()
	{
		return $this->fullname;
	}

	/**
	 * Get the [shortname] column value.
	 * 
	 * @return     string
	 */
	public function getShortname()
	{
		return $this->shortname;
	}

	/**
	 * Get the [consumer_key] column value.
	 * 
	 * @return     string
	 */
	public function getConsumerKey()
	{
		return $this->consumer_key;
	}

	/**
	 * Get the [consumer_secret] column value.
	 * 
	 * @return     string
	 */
	public function getConsumerSecret()
	{
		return $this->consumer_secret;
	}

	/**
	 * Get the [site_url] column value.
	 * 
	 * @return     string
	 */
	public function getSiteUrl()
	{
		return $this->site_url;
	}

	/**
	 * Get the [request_token_url] column value.
	 * 
	 * @return     string
	 */
	public function getRequestTokenUrl()
	{
		return $this->request_token_url;
	}

	/**
	 * Get the [access_token_url] column value.
	 * 
	 * @return     string
	 */
	public function getAccessTokenUrl()
	{
		return $this->access_token_url;
	}

	/**
	 * Get the [authorize_url] column value.
	 * 
	 * @return     string
	 */
	public function getAuthorizeUrl()
	{
		return $this->authorize_url;
	}

	/**
	 * Get the [update_url] column value.
	 * 
	 * @return     string
	 */
	public function getUpdateUrl()
	{
		return $this->update_url;
	}

	/**
	 * Get the [update_param] column value.
	 * 
	 * @return     string
	 */
	public function getUpdateParam()
	{
		return $this->update_param;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     OStatus_Site The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = OStatus_SitePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [fullname] column.
	 * 
	 * @param      string $v new value
	 * @return     OStatus_Site The current object (for fluent API support)
	 */
	public function setFullname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fullname !== $v) {
			$this->fullname = $v;
			$this->modifiedColumns[] = OStatus_SitePeer::FULLNAME;
		}

		return $this;
	} // setFullname()

	/**
	 * Set the value of [shortname] column.
	 * 
	 * @param      string $v new value
	 * @return     OStatus_Site The current object (for fluent API support)
	 */
	public function setShortname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->shortname !== $v) {
			$this->shortname = $v;
			$this->modifiedColumns[] = OStatus_SitePeer::SHORTNAME;
		}

		return $this;
	} // setShortname()

	/**
	 * Set the value of [consumer_key] column.
	 * 
	 * @param      string $v new value
	 * @return     OStatus_Site The current object (for fluent API support)
	 */
	public function setConsumerKey($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->consumer_key !== $v) {
			$this->consumer_key = $v;
			$this->modifiedColumns[] = OStatus_SitePeer::CONSUMER_KEY;
		}

		return $this;
	} // setConsumerKey()

	/**
	 * Set the value of [consumer_secret] column.
	 * 
	 * @param      string $v new value
	 * @return     OStatus_Site The current object (for fluent API support)
	 */
	public function setConsumerSecret($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->consumer_secret !== $v) {
			$this->consumer_secret = $v;
			$this->modifiedColumns[] = OStatus_SitePeer::CONSUMER_SECRET;
		}

		return $this;
	} // setConsumerSecret()

	/**
	 * Set the value of [site_url] column.
	 * 
	 * @param      string $v new value
	 * @return     OStatus_Site The current object (for fluent API support)
	 */
	public function setSiteUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->site_url !== $v) {
			$this->site_url = $v;
			$this->modifiedColumns[] = OStatus_SitePeer::SITE_URL;
		}

		return $this;
	} // setSiteUrl()

	/**
	 * Set the value of [request_token_url] column.
	 * 
	 * @param      string $v new value
	 * @return     OStatus_Site The current object (for fluent API support)
	 */
	public function setRequestTokenUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->request_token_url !== $v) {
			$this->request_token_url = $v;
			$this->modifiedColumns[] = OStatus_SitePeer::REQUEST_TOKEN_URL;
		}

		return $this;
	} // setRequestTokenUrl()

	/**
	 * Set the value of [access_token_url] column.
	 * 
	 * @param      string $v new value
	 * @return     OStatus_Site The current object (for fluent API support)
	 */
	public function setAccessTokenUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->access_token_url !== $v) {
			$this->access_token_url = $v;
			$this->modifiedColumns[] = OStatus_SitePeer::ACCESS_TOKEN_URL;
		}

		return $this;
	} // setAccessTokenUrl()

	/**
	 * Set the value of [authorize_url] column.
	 * 
	 * @param      string $v new value
	 * @return     OStatus_Site The current object (for fluent API support)
	 */
	public function setAuthorizeUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->authorize_url !== $v) {
			$this->authorize_url = $v;
			$this->modifiedColumns[] = OStatus_SitePeer::AUTHORIZE_URL;
		}

		return $this;
	} // setAuthorizeUrl()

	/**
	 * Set the value of [update_url] column.
	 * 
	 * @param      string $v new value
	 * @return     OStatus_Site The current object (for fluent API support)
	 */
	public function setUpdateUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->update_url !== $v) {
			$this->update_url = $v;
			$this->modifiedColumns[] = OStatus_SitePeer::UPDATE_URL;
		}

		return $this;
	} // setUpdateUrl()

	/**
	 * Set the value of [update_param] column.
	 * 
	 * @param      string $v new value
	 * @return     OStatus_Site The current object (for fluent API support)
	 */
	public function setUpdateParam($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->update_param !== $v) {
			$this->update_param = $v;
			$this->modifiedColumns[] = OStatus_SitePeer::UPDATE_PARAM;
		}

		return $this;
	} // setUpdateParam()

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
			$this->fullname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->shortname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->consumer_key = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->consumer_secret = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->site_url = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->request_token_url = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->access_token_url = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->authorize_url = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->update_url = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->update_param = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = OStatus_SitePeer::NUM_COLUMNS - OStatus_SitePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating OStatus_Site object", $e);
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
			$con = Propel::getConnection(OStatus_SitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = OStatus_SitePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collOStatus_Users = null;

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
			$con = Propel::getConnection(OStatus_SitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				OStatus_SiteQuery::create()
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
			$con = Propel::getConnection(OStatus_SitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				OStatus_SitePeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = OStatus_SitePeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(OStatus_SitePeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.OStatus_SitePeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = OStatus_SitePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collOStatus_Users !== null) {
				foreach ($this->collOStatus_Users as $referrerFK) {
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


			if (($retval = OStatus_SitePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collOStatus_Users !== null) {
					foreach ($this->collOStatus_Users as $referrerFK) {
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
		$pos = OStatus_SitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getFullname();
				break;
			case 2:
				return $this->getShortname();
				break;
			case 3:
				return $this->getConsumerKey();
				break;
			case 4:
				return $this->getConsumerSecret();
				break;
			case 5:
				return $this->getSiteUrl();
				break;
			case 6:
				return $this->getRequestTokenUrl();
				break;
			case 7:
				return $this->getAccessTokenUrl();
				break;
			case 8:
				return $this->getAuthorizeUrl();
				break;
			case 9:
				return $this->getUpdateUrl();
				break;
			case 10:
				return $this->getUpdateParam();
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
		$keys = OStatus_SitePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getFullname(),
			$keys[2] => $this->getShortname(),
			$keys[3] => $this->getConsumerKey(),
			$keys[4] => $this->getConsumerSecret(),
			$keys[5] => $this->getSiteUrl(),
			$keys[6] => $this->getRequestTokenUrl(),
			$keys[7] => $this->getAccessTokenUrl(),
			$keys[8] => $this->getAuthorizeUrl(),
			$keys[9] => $this->getUpdateUrl(),
			$keys[10] => $this->getUpdateParam(),
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
		$pos = OStatus_SitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setFullname($value);
				break;
			case 2:
				$this->setShortname($value);
				break;
			case 3:
				$this->setConsumerKey($value);
				break;
			case 4:
				$this->setConsumerSecret($value);
				break;
			case 5:
				$this->setSiteUrl($value);
				break;
			case 6:
				$this->setRequestTokenUrl($value);
				break;
			case 7:
				$this->setAccessTokenUrl($value);
				break;
			case 8:
				$this->setAuthorizeUrl($value);
				break;
			case 9:
				$this->setUpdateUrl($value);
				break;
			case 10:
				$this->setUpdateParam($value);
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
		$keys = OStatus_SitePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFullname($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setShortname($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setConsumerKey($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setConsumerSecret($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSiteUrl($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRequestTokenUrl($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAccessTokenUrl($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAuthorizeUrl($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUpdateUrl($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setUpdateParam($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(OStatus_SitePeer::DATABASE_NAME);

		if ($this->isColumnModified(OStatus_SitePeer::ID)) $criteria->add(OStatus_SitePeer::ID, $this->id);
		if ($this->isColumnModified(OStatus_SitePeer::FULLNAME)) $criteria->add(OStatus_SitePeer::FULLNAME, $this->fullname);
		if ($this->isColumnModified(OStatus_SitePeer::SHORTNAME)) $criteria->add(OStatus_SitePeer::SHORTNAME, $this->shortname);
		if ($this->isColumnModified(OStatus_SitePeer::CONSUMER_KEY)) $criteria->add(OStatus_SitePeer::CONSUMER_KEY, $this->consumer_key);
		if ($this->isColumnModified(OStatus_SitePeer::CONSUMER_SECRET)) $criteria->add(OStatus_SitePeer::CONSUMER_SECRET, $this->consumer_secret);
		if ($this->isColumnModified(OStatus_SitePeer::SITE_URL)) $criteria->add(OStatus_SitePeer::SITE_URL, $this->site_url);
		if ($this->isColumnModified(OStatus_SitePeer::REQUEST_TOKEN_URL)) $criteria->add(OStatus_SitePeer::REQUEST_TOKEN_URL, $this->request_token_url);
		if ($this->isColumnModified(OStatus_SitePeer::ACCESS_TOKEN_URL)) $criteria->add(OStatus_SitePeer::ACCESS_TOKEN_URL, $this->access_token_url);
		if ($this->isColumnModified(OStatus_SitePeer::AUTHORIZE_URL)) $criteria->add(OStatus_SitePeer::AUTHORIZE_URL, $this->authorize_url);
		if ($this->isColumnModified(OStatus_SitePeer::UPDATE_URL)) $criteria->add(OStatus_SitePeer::UPDATE_URL, $this->update_url);
		if ($this->isColumnModified(OStatus_SitePeer::UPDATE_PARAM)) $criteria->add(OStatus_SitePeer::UPDATE_PARAM, $this->update_param);

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
		$criteria = new Criteria(OStatus_SitePeer::DATABASE_NAME);
		$criteria->add(OStatus_SitePeer::ID, $this->id);

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
	 * @param      object $copyObj An object of OStatus_Site (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setFullname($this->fullname);
		$copyObj->setShortname($this->shortname);
		$copyObj->setConsumerKey($this->consumer_key);
		$copyObj->setConsumerSecret($this->consumer_secret);
		$copyObj->setSiteUrl($this->site_url);
		$copyObj->setRequestTokenUrl($this->request_token_url);
		$copyObj->setAccessTokenUrl($this->access_token_url);
		$copyObj->setAuthorizeUrl($this->authorize_url);
		$copyObj->setUpdateUrl($this->update_url);
		$copyObj->setUpdateParam($this->update_param);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getOStatus_Users() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addOStatus_User($relObj->copy($deepCopy));
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
	 * @return     OStatus_Site Clone of current object.
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
	 * @return     OStatus_SitePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new OStatus_SitePeer();
		}
		return self::$peer;
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
	 * If this OStatus_Site is new, it will return
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
					->filterByOStatus_Site($this)
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
					->filterByOStatus_Site($this)
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
			$l->setOStatus_Site($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this OStatus_Site is new, it will return
	 * an empty collection; or if this OStatus_Site has previously
	 * been saved, it will retrieve related OStatus_Users from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in OStatus_Site.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array OStatus_User[] List of OStatus_User objects
	 */
	public function getOStatus_UsersJoinUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = OStatus_UserQuery::create(null, $criteria);
		$query->joinWith('User', $join_behavior);

		return $this->getOStatus_Users($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->fullname = null;
		$this->shortname = null;
		$this->consumer_key = null;
		$this->consumer_secret = null;
		$this->site_url = null;
		$this->request_token_url = null;
		$this->access_token_url = null;
		$this->authorize_url = null;
		$this->update_url = null;
		$this->update_param = null;
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
			if ($this->collOStatus_Users) {
				foreach ((array) $this->collOStatus_Users as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collOStatus_Users = null;
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

} // BaseOStatus_Site
