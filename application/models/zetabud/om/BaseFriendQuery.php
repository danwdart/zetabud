<?php


/**
 * Base class that represents a query for the 'friend' table.
 *
 * 
 *
 * @method     FriendQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     FriendQuery orderByUser1Id($order = Criteria::ASC) Order by the user1_id column
 * @method     FriendQuery orderByUser2Id($order = Criteria::ASC) Order by the user2_id column
 * @method     FriendQuery orderByFriendGroupId($order = Criteria::ASC) Order by the friend_group_id column
 * @method     FriendQuery orderByRequestedDate($order = Criteria::ASC) Order by the requested_date column
 * @method     FriendQuery orderByConfirmedDate($order = Criteria::ASC) Order by the confirmed_date column
 *
 * @method     FriendQuery groupById() Group by the id column
 * @method     FriendQuery groupByUser1Id() Group by the user1_id column
 * @method     FriendQuery groupByUser2Id() Group by the user2_id column
 * @method     FriendQuery groupByFriendGroupId() Group by the friend_group_id column
 * @method     FriendQuery groupByRequestedDate() Group by the requested_date column
 * @method     FriendQuery groupByConfirmedDate() Group by the confirmed_date column
 *
 * @method     FriendQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     FriendQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     FriendQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Friend findOne(PropelPDO $con = null) Return the first Friend matching the query
 * @method     Friend findOneOrCreate(PropelPDO $con = null) Return the first Friend matching the query, or a new Friend object populated from the query conditions when no match is found
 *
 * @method     Friend findOneById(int $id) Return the first Friend filtered by the id column
 * @method     Friend findOneByUser1Id(int $user1_id) Return the first Friend filtered by the user1_id column
 * @method     Friend findOneByUser2Id(int $user2_id) Return the first Friend filtered by the user2_id column
 * @method     Friend findOneByFriendGroupId(int $friend_group_id) Return the first Friend filtered by the friend_group_id column
 * @method     Friend findOneByRequestedDate(string $requested_date) Return the first Friend filtered by the requested_date column
 * @method     Friend findOneByConfirmedDate(string $confirmed_date) Return the first Friend filtered by the confirmed_date column
 *
 * @method     array findById(int $id) Return Friend objects filtered by the id column
 * @method     array findByUser1Id(int $user1_id) Return Friend objects filtered by the user1_id column
 * @method     array findByUser2Id(int $user2_id) Return Friend objects filtered by the user2_id column
 * @method     array findByFriendGroupId(int $friend_group_id) Return Friend objects filtered by the friend_group_id column
 * @method     array findByRequestedDate(string $requested_date) Return Friend objects filtered by the requested_date column
 * @method     array findByConfirmedDate(string $confirmed_date) Return Friend objects filtered by the confirmed_date column
 *
 * @package    propel.generator.zetabud.om
 */
abstract class BaseFriendQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseFriendQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'zetabud', $modelName = 'Friend', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new FriendQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    FriendQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof FriendQuery) {
			return $criteria;
		}
		$query = new FriendQuery();
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
	 * @return    Friend|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = FriendPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    FriendQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(FriendPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    FriendQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(FriendPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FriendQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(FriendPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user1_id column
	 * 
	 * @param     int|array $user1Id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FriendQuery The current query, for fluid interface
	 */
	public function filterByUser1Id($user1Id = null, $comparison = null)
	{
		if (is_array($user1Id)) {
			$useMinMax = false;
			if (isset($user1Id['min'])) {
				$this->addUsingAlias(FriendPeer::USER1_ID, $user1Id['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($user1Id['max'])) {
				$this->addUsingAlias(FriendPeer::USER1_ID, $user1Id['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FriendPeer::USER1_ID, $user1Id, $comparison);
	}

	/**
	 * Filter the query on the user2_id column
	 * 
	 * @param     int|array $user2Id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FriendQuery The current query, for fluid interface
	 */
	public function filterByUser2Id($user2Id = null, $comparison = null)
	{
		if (is_array($user2Id)) {
			$useMinMax = false;
			if (isset($user2Id['min'])) {
				$this->addUsingAlias(FriendPeer::USER2_ID, $user2Id['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($user2Id['max'])) {
				$this->addUsingAlias(FriendPeer::USER2_ID, $user2Id['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FriendPeer::USER2_ID, $user2Id, $comparison);
	}

	/**
	 * Filter the query on the friend_group_id column
	 * 
	 * @param     int|array $friendGroupId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FriendQuery The current query, for fluid interface
	 */
	public function filterByFriendGroupId($friendGroupId = null, $comparison = null)
	{
		if (is_array($friendGroupId)) {
			$useMinMax = false;
			if (isset($friendGroupId['min'])) {
				$this->addUsingAlias(FriendPeer::FRIEND_GROUP_ID, $friendGroupId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($friendGroupId['max'])) {
				$this->addUsingAlias(FriendPeer::FRIEND_GROUP_ID, $friendGroupId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FriendPeer::FRIEND_GROUP_ID, $friendGroupId, $comparison);
	}

	/**
	 * Filter the query on the requested_date column
	 * 
	 * @param     string|array $requestedDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FriendQuery The current query, for fluid interface
	 */
	public function filterByRequestedDate($requestedDate = null, $comparison = null)
	{
		if (is_array($requestedDate)) {
			$useMinMax = false;
			if (isset($requestedDate['min'])) {
				$this->addUsingAlias(FriendPeer::REQUESTED_DATE, $requestedDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($requestedDate['max'])) {
				$this->addUsingAlias(FriendPeer::REQUESTED_DATE, $requestedDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FriendPeer::REQUESTED_DATE, $requestedDate, $comparison);
	}

	/**
	 * Filter the query on the confirmed_date column
	 * 
	 * @param     string|array $confirmedDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FriendQuery The current query, for fluid interface
	 */
	public function filterByConfirmedDate($confirmedDate = null, $comparison = null)
	{
		if (is_array($confirmedDate)) {
			$useMinMax = false;
			if (isset($confirmedDate['min'])) {
				$this->addUsingAlias(FriendPeer::CONFIRMED_DATE, $confirmedDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($confirmedDate['max'])) {
				$this->addUsingAlias(FriendPeer::CONFIRMED_DATE, $confirmedDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FriendPeer::CONFIRMED_DATE, $confirmedDate, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Friend $friend Object to remove from the list of results
	 *
	 * @return    FriendQuery The current query, for fluid interface
	 */
	public function prune($friend = null)
	{
		if ($friend) {
			$this->addUsingAlias(FriendPeer::ID, $friend->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseFriendQuery
