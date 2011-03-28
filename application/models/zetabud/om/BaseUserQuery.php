<?php


/**
 * Base class that represents a query for the 'user' table.
 *
 * 
 *
 * @method     UserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method     UserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     UserQuery orderByFullname($order = Criteria::ASC) Order by the fullname column
 * @method     UserQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     UserQuery orderByCreatedDate($order = Criteria::ASC) Order by the created_date column
 * @method     UserQuery orderByModifiedDate($order = Criteria::ASC) Order by the modified_date column
 * @method     UserQuery orderByLastActive($order = Criteria::ASC) Order by the last_active column
 *
 * @method     UserQuery groupById() Group by the id column
 * @method     UserQuery groupByUsername() Group by the username column
 * @method     UserQuery groupByPassword() Group by the password column
 * @method     UserQuery groupByFullname() Group by the fullname column
 * @method     UserQuery groupByEmail() Group by the email column
 * @method     UserQuery groupByCreatedDate() Group by the created_date column
 * @method     UserQuery groupByModifiedDate() Group by the modified_date column
 * @method     UserQuery groupByLastActive() Group by the last_active column
 *
 * @method     UserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserQuery leftJoinAudioFile($relationAlias = null) Adds a LEFT JOIN clause to the query using the AudioFile relation
 * @method     UserQuery rightJoinAudioFile($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AudioFile relation
 * @method     UserQuery innerJoinAudioFile($relationAlias = null) Adds a INNER JOIN clause to the query using the AudioFile relation
 *
 * @method     UserQuery leftJoinBlog($relationAlias = null) Adds a LEFT JOIN clause to the query using the Blog relation
 * @method     UserQuery rightJoinBlog($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Blog relation
 * @method     UserQuery innerJoinBlog($relationAlias = null) Adds a INNER JOIN clause to the query using the Blog relation
 *
 * @method     UserQuery leftJoinChatLine($relationAlias = null) Adds a LEFT JOIN clause to the query using the ChatLine relation
 * @method     UserQuery rightJoinChatLine($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ChatLine relation
 * @method     UserQuery innerJoinChatLine($relationAlias = null) Adds a INNER JOIN clause to the query using the ChatLine relation
 *
 * @method     UserQuery leftJoinEmailRelatedByUserFromId($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmailRelatedByUserFromId relation
 * @method     UserQuery rightJoinEmailRelatedByUserFromId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmailRelatedByUserFromId relation
 * @method     UserQuery innerJoinEmailRelatedByUserFromId($relationAlias = null) Adds a INNER JOIN clause to the query using the EmailRelatedByUserFromId relation
 *
 * @method     UserQuery leftJoinEmailRelatedByUserToId($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmailRelatedByUserToId relation
 * @method     UserQuery rightJoinEmailRelatedByUserToId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmailRelatedByUserToId relation
 * @method     UserQuery innerJoinEmailRelatedByUserToId($relationAlias = null) Adds a INNER JOIN clause to the query using the EmailRelatedByUserToId relation
 *
 * @method     UserQuery leftJoinFriendRelatedByUser1Id($relationAlias = null) Adds a LEFT JOIN clause to the query using the FriendRelatedByUser1Id relation
 * @method     UserQuery rightJoinFriendRelatedByUser1Id($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FriendRelatedByUser1Id relation
 * @method     UserQuery innerJoinFriendRelatedByUser1Id($relationAlias = null) Adds a INNER JOIN clause to the query using the FriendRelatedByUser1Id relation
 *
 * @method     UserQuery leftJoinFriendRelatedByUser2Id($relationAlias = null) Adds a LEFT JOIN clause to the query using the FriendRelatedByUser2Id relation
 * @method     UserQuery rightJoinFriendRelatedByUser2Id($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FriendRelatedByUser2Id relation
 * @method     UserQuery innerJoinFriendRelatedByUser2Id($relationAlias = null) Adds a INNER JOIN clause to the query using the FriendRelatedByUser2Id relation
 *
 * @method     UserQuery leftJoinNote($relationAlias = null) Adds a LEFT JOIN clause to the query using the Note relation
 * @method     UserQuery rightJoinNote($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Note relation
 * @method     UserQuery innerJoinNote($relationAlias = null) Adds a INNER JOIN clause to the query using the Note relation
 *
 * @method     UserQuery leftJoinPicture($relationAlias = null) Adds a LEFT JOIN clause to the query using the Picture relation
 * @method     UserQuery rightJoinPicture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Picture relation
 * @method     UserQuery innerJoinPicture($relationAlias = null) Adds a INNER JOIN clause to the query using the Picture relation
 *
 * @method     UserQuery leftJoinOStatus_User($relationAlias = null) Adds a LEFT JOIN clause to the query using the OStatus_User relation
 * @method     UserQuery rightJoinOStatus_User($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OStatus_User relation
 * @method     UserQuery innerJoinOStatus_User($relationAlias = null) Adds a INNER JOIN clause to the query using the OStatus_User relation
 *
 * @method     UserQuery leftJoinVideoFile($relationAlias = null) Adds a LEFT JOIN clause to the query using the VideoFile relation
 * @method     UserQuery rightJoinVideoFile($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VideoFile relation
 * @method     UserQuery innerJoinVideoFile($relationAlias = null) Adds a INNER JOIN clause to the query using the VideoFile relation
 *
 * @method     User findOne(PropelPDO $con = null) Return the first User matching the query
 * @method     User findOneOrCreate(PropelPDO $con = null) Return the first User matching the query, or a new User object populated from the query conditions when no match is found
 *
 * @method     User findOneById(int $id) Return the first User filtered by the id column
 * @method     User findOneByUsername(string $username) Return the first User filtered by the username column
 * @method     User findOneByPassword(string $password) Return the first User filtered by the password column
 * @method     User findOneByFullname(string $fullname) Return the first User filtered by the fullname column
 * @method     User findOneByEmail(string $email) Return the first User filtered by the email column
 * @method     User findOneByCreatedDate(string $created_date) Return the first User filtered by the created_date column
 * @method     User findOneByModifiedDate(string $modified_date) Return the first User filtered by the modified_date column
 * @method     User findOneByLastActive(string $last_active) Return the first User filtered by the last_active column
 *
 * @method     array findById(int $id) Return User objects filtered by the id column
 * @method     array findByUsername(string $username) Return User objects filtered by the username column
 * @method     array findByPassword(string $password) Return User objects filtered by the password column
 * @method     array findByFullname(string $fullname) Return User objects filtered by the fullname column
 * @method     array findByEmail(string $email) Return User objects filtered by the email column
 * @method     array findByCreatedDate(string $created_date) Return User objects filtered by the created_date column
 * @method     array findByModifiedDate(string $modified_date) Return User objects filtered by the modified_date column
 * @method     array findByLastActive(string $last_active) Return User objects filtered by the last_active column
 *
 * @package    propel.generator.zetabud.om
 */
abstract class BaseUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'zetabud', $modelName = 'User', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserQuery) {
			return $criteria;
		}
		$query = new UserQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    User|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the username column
	 * 
	 * @param     string $username The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUsername($username = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($username)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $username)) {
				$username = str_replace('*', '%', $username);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::USERNAME, $username, $comparison);
	}

	/**
	 * Filter the query on the password column
	 * 
	 * @param     string $password The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPassword($password = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($password)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $password)) {
				$password = str_replace('*', '%', $password);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::PASSWORD, $password, $comparison);
	}

	/**
	 * Filter the query on the fullname column
	 * 
	 * @param     string $fullname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByFullname($fullname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fullname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fullname)) {
				$fullname = str_replace('*', '%', $fullname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::FULLNAME, $fullname, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the created_date column
	 * 
	 * @param     string|array $createdDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByCreatedDate($createdDate = null, $comparison = null)
	{
		if (is_array($createdDate)) {
			$useMinMax = false;
			if (isset($createdDate['min'])) {
				$this->addUsingAlias(UserPeer::CREATED_DATE, $createdDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdDate['max'])) {
				$this->addUsingAlias(UserPeer::CREATED_DATE, $createdDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::CREATED_DATE, $createdDate, $comparison);
	}

	/**
	 * Filter the query on the modified_date column
	 * 
	 * @param     string|array $modifiedDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByModifiedDate($modifiedDate = null, $comparison = null)
	{
		if (is_array($modifiedDate)) {
			$useMinMax = false;
			if (isset($modifiedDate['min'])) {
				$this->addUsingAlias(UserPeer::MODIFIED_DATE, $modifiedDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($modifiedDate['max'])) {
				$this->addUsingAlias(UserPeer::MODIFIED_DATE, $modifiedDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::MODIFIED_DATE, $modifiedDate, $comparison);
	}

	/**
	 * Filter the query on the last_active column
	 * 
	 * @param     string|array $lastActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByLastActive($lastActive = null, $comparison = null)
	{
		if (is_array($lastActive)) {
			$useMinMax = false;
			if (isset($lastActive['min'])) {
				$this->addUsingAlias(UserPeer::LAST_ACTIVE, $lastActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastActive['max'])) {
				$this->addUsingAlias(UserPeer::LAST_ACTIVE, $lastActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::LAST_ACTIVE, $lastActive, $comparison);
	}

	/**
	 * Filter the query by a related AudioFile object
	 *
	 * @param     AudioFile $audioFile  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByAudioFile($audioFile, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $audioFile->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the AudioFile relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinAudioFile($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AudioFile');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'AudioFile');
		}
		
		return $this;
	}

	/**
	 * Use the AudioFile relation AudioFile object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AudioFileQuery A secondary query class using the current class as primary query
	 */
	public function useAudioFileQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAudioFile($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AudioFile', 'AudioFileQuery');
	}

	/**
	 * Filter the query by a related Blog object
	 *
	 * @param     Blog $blog  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByBlog($blog, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $blog->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Blog relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinBlog($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Blog');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Blog');
		}
		
		return $this;
	}

	/**
	 * Use the Blog relation Blog object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BlogQuery A secondary query class using the current class as primary query
	 */
	public function useBlogQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinBlog($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Blog', 'BlogQuery');
	}

	/**
	 * Filter the query by a related ChatLine object
	 *
	 * @param     ChatLine $chatLine  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByChatLine($chatLine, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $chatLine->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ChatLine relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinChatLine($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ChatLine');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'ChatLine');
		}
		
		return $this;
	}

	/**
	 * Use the ChatLine relation ChatLine object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ChatLineQuery A secondary query class using the current class as primary query
	 */
	public function useChatLineQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinChatLine($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ChatLine', 'ChatLineQuery');
	}

	/**
	 * Filter the query by a related Email object
	 *
	 * @param     Email $email  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByEmailRelatedByUserFromId($email, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $email->getUserFromId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the EmailRelatedByUserFromId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinEmailRelatedByUserFromId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('EmailRelatedByUserFromId');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'EmailRelatedByUserFromId');
		}
		
		return $this;
	}

	/**
	 * Use the EmailRelatedByUserFromId relation Email object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EmailQuery A secondary query class using the current class as primary query
	 */
	public function useEmailRelatedByUserFromIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinEmailRelatedByUserFromId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'EmailRelatedByUserFromId', 'EmailQuery');
	}

	/**
	 * Filter the query by a related Email object
	 *
	 * @param     Email $email  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByEmailRelatedByUserToId($email, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $email->getUserToId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the EmailRelatedByUserToId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinEmailRelatedByUserToId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('EmailRelatedByUserToId');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'EmailRelatedByUserToId');
		}
		
		return $this;
	}

	/**
	 * Use the EmailRelatedByUserToId relation Email object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EmailQuery A secondary query class using the current class as primary query
	 */
	public function useEmailRelatedByUserToIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinEmailRelatedByUserToId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'EmailRelatedByUserToId', 'EmailQuery');
	}

	/**
	 * Filter the query by a related Friend object
	 *
	 * @param     Friend $friend  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByFriendRelatedByUser1Id($friend, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $friend->getUser1Id(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the FriendRelatedByUser1Id relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinFriendRelatedByUser1Id($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('FriendRelatedByUser1Id');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'FriendRelatedByUser1Id');
		}
		
		return $this;
	}

	/**
	 * Use the FriendRelatedByUser1Id relation Friend object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FriendQuery A secondary query class using the current class as primary query
	 */
	public function useFriendRelatedByUser1IdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFriendRelatedByUser1Id($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'FriendRelatedByUser1Id', 'FriendQuery');
	}

	/**
	 * Filter the query by a related Friend object
	 *
	 * @param     Friend $friend  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByFriendRelatedByUser2Id($friend, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $friend->getUser2Id(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the FriendRelatedByUser2Id relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinFriendRelatedByUser2Id($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('FriendRelatedByUser2Id');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'FriendRelatedByUser2Id');
		}
		
		return $this;
	}

	/**
	 * Use the FriendRelatedByUser2Id relation Friend object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FriendQuery A secondary query class using the current class as primary query
	 */
	public function useFriendRelatedByUser2IdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFriendRelatedByUser2Id($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'FriendRelatedByUser2Id', 'FriendQuery');
	}

	/**
	 * Filter the query by a related Note object
	 *
	 * @param     Note $note  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByNote($note, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $note->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Note relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinNote($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Note');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Note');
		}
		
		return $this;
	}

	/**
	 * Use the Note relation Note object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NoteQuery A secondary query class using the current class as primary query
	 */
	public function useNoteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNote($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Note', 'NoteQuery');
	}

	/**
	 * Filter the query by a related Picture object
	 *
	 * @param     Picture $picture  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPicture($picture, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $picture->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Picture relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinPicture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Picture');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Picture');
		}
		
		return $this;
	}

	/**
	 * Use the Picture relation Picture object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PictureQuery A secondary query class using the current class as primary query
	 */
	public function usePictureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPicture($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Picture', 'PictureQuery');
	}

	/**
	 * Filter the query by a related OStatus_User object
	 *
	 * @param     OStatus_User $oStatus_User  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByOStatus_User($oStatus_User, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $oStatus_User->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the OStatus_User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinOStatus_User($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('OStatus_User');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'OStatus_User');
		}
		
		return $this;
	}

	/**
	 * Use the OStatus_User relation OStatus_User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OStatus_UserQuery A secondary query class using the current class as primary query
	 */
	public function useOStatus_UserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinOStatus_User($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'OStatus_User', 'OStatus_UserQuery');
	}

	/**
	 * Filter the query by a related VideoFile object
	 *
	 * @param     VideoFile $videoFile  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByVideoFile($videoFile, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $videoFile->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the VideoFile relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinVideoFile($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('VideoFile');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'VideoFile');
		}
		
		return $this;
	}

	/**
	 * Use the VideoFile relation VideoFile object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VideoFileQuery A secondary query class using the current class as primary query
	 */
	public function useVideoFileQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinVideoFile($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'VideoFile', 'VideoFileQuery');
	}

	/**
	 * Filter the query by a related User object
	 * using the friend table as cross reference
	 *
	 * @param     User $user the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUserRelatedByUser2Id($user, $comparison = Criteria::EQUAL)
	{
		return $this
			->useFriendRelatedByUser1IdQuery()
				->filterByUserRelatedByUser2Id($user, $comparison)
			->endUse();
	}
	
	/**
	 * Filter the query by a related User object
	 * using the friend table as cross reference
	 *
	 * @param     User $user the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUserRelatedByUser1Id($user, $comparison = Criteria::EQUAL)
	{
		return $this
			->useFriendRelatedByUser2IdQuery()
				->filterByUserRelatedByUser1Id($user, $comparison)
			->endUse();
	}
	
	/**
	 * Exclude object from result
	 *
	 * @param     User $user Object to remove from the list of results
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function prune($user = null)
	{
		if ($user) {
			$this->addUsingAlias(UserPeer::ID, $user->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserQuery
