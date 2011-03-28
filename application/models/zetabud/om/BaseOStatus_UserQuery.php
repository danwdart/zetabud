<?php


/**
 * Base class that represents a query for the 'ostatus_user' table.
 *
 * 
 *
 * @method     OStatus_UserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     OStatus_UserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     OStatus_UserQuery orderBySiteId($order = Criteria::ASC) Order by the site_id column
 * @method     OStatus_UserQuery orderByRequestToken($order = Criteria::ASC) Order by the request_token column
 * @method     OStatus_UserQuery orderByAccessToken($order = Criteria::ASC) Order by the access_token column
 *
 * @method     OStatus_UserQuery groupById() Group by the id column
 * @method     OStatus_UserQuery groupByUserId() Group by the user_id column
 * @method     OStatus_UserQuery groupBySiteId() Group by the site_id column
 * @method     OStatus_UserQuery groupByRequestToken() Group by the request_token column
 * @method     OStatus_UserQuery groupByAccessToken() Group by the access_token column
 *
 * @method     OStatus_UserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     OStatus_UserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     OStatus_UserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     OStatus_UserQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     OStatus_UserQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     OStatus_UserQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     OStatus_UserQuery leftJoinOStatus_Site($relationAlias = null) Adds a LEFT JOIN clause to the query using the OStatus_Site relation
 * @method     OStatus_UserQuery rightJoinOStatus_Site($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OStatus_Site relation
 * @method     OStatus_UserQuery innerJoinOStatus_Site($relationAlias = null) Adds a INNER JOIN clause to the query using the OStatus_Site relation
 *
 * @method     OStatus_User findOne(PropelPDO $con = null) Return the first OStatus_User matching the query
 * @method     OStatus_User findOneOrCreate(PropelPDO $con = null) Return the first OStatus_User matching the query, or a new OStatus_User object populated from the query conditions when no match is found
 *
 * @method     OStatus_User findOneById(int $id) Return the first OStatus_User filtered by the id column
 * @method     OStatus_User findOneByUserId(int $user_id) Return the first OStatus_User filtered by the user_id column
 * @method     OStatus_User findOneBySiteId(int $site_id) Return the first OStatus_User filtered by the site_id column
 * @method     OStatus_User findOneByRequestToken(string $request_token) Return the first OStatus_User filtered by the request_token column
 * @method     OStatus_User findOneByAccessToken(string $access_token) Return the first OStatus_User filtered by the access_token column
 *
 * @method     array findById(int $id) Return OStatus_User objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return OStatus_User objects filtered by the user_id column
 * @method     array findBySiteId(int $site_id) Return OStatus_User objects filtered by the site_id column
 * @method     array findByRequestToken(string $request_token) Return OStatus_User objects filtered by the request_token column
 * @method     array findByAccessToken(string $access_token) Return OStatus_User objects filtered by the access_token column
 *
 * @package    propel.generator.zetabud.om
 */
abstract class BaseOStatus_UserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseOStatus_UserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'zetabud', $modelName = 'OStatus_User', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new OStatus_UserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    OStatus_UserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof OStatus_UserQuery) {
			return $criteria;
		}
		$query = new OStatus_UserQuery();
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
	 * @return    OStatus_User|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = OStatus_UserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(OStatus_UserPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(OStatus_UserPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(OStatus_UserPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(OStatus_UserPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(OStatus_UserPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OStatus_UserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the site_id column
	 * 
	 * @param     int|array $siteId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function filterBySiteId($siteId = null, $comparison = null)
	{
		if (is_array($siteId)) {
			$useMinMax = false;
			if (isset($siteId['min'])) {
				$this->addUsingAlias(OStatus_UserPeer::SITE_ID, $siteId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($siteId['max'])) {
				$this->addUsingAlias(OStatus_UserPeer::SITE_ID, $siteId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OStatus_UserPeer::SITE_ID, $siteId, $comparison);
	}

	/**
	 * Filter the query on the request_token column
	 * 
	 * @param     string $requestToken The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function filterByRequestToken($requestToken = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($requestToken)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $requestToken)) {
				$requestToken = str_replace('*', '%', $requestToken);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OStatus_UserPeer::REQUEST_TOKEN, $requestToken, $comparison);
	}

	/**
	 * Filter the query on the access_token column
	 * 
	 * @param     string $accessToken The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function filterByAccessToken($accessToken = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($accessToken)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $accessToken)) {
				$accessToken = str_replace('*', '%', $accessToken);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OStatus_UserPeer::ACCESS_TOKEN, $accessToken, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(OStatus_UserPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('User');
		
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
			$this->addJoinObject($join, 'User');
		}
		
		return $this;
	}

	/**
	 * Use the User relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
	}

	/**
	 * Filter the query by a related OStatus_Site object
	 *
	 * @param     OStatus_Site $oStatus_Site  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function filterByOStatus_Site($oStatus_Site, $comparison = null)
	{
		return $this
			->addUsingAlias(OStatus_UserPeer::SITE_ID, $oStatus_Site->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the OStatus_Site relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function joinOStatus_Site($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('OStatus_Site');
		
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
			$this->addJoinObject($join, 'OStatus_Site');
		}
		
		return $this;
	}

	/**
	 * Use the OStatus_Site relation OStatus_Site object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OStatus_SiteQuery A secondary query class using the current class as primary query
	 */
	public function useOStatus_SiteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinOStatus_Site($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'OStatus_Site', 'OStatus_SiteQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     OStatus_User $oStatus_User Object to remove from the list of results
	 *
	 * @return    OStatus_UserQuery The current query, for fluid interface
	 */
	public function prune($oStatus_User = null)
	{
		if ($oStatus_User) {
			$this->addUsingAlias(OStatus_UserPeer::ID, $oStatus_User->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseOStatus_UserQuery
