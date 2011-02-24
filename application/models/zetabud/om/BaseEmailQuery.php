<?php


/**
 * Base class that represents a query for the 'email' table.
 *
 * 
 *
 * @method     EmailQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EmailQuery orderByUserFromId($order = Criteria::ASC) Order by the user_from_id column
 * @method     EmailQuery orderByUserToId($order = Criteria::ASC) Order by the user_to_id column
 * @method     EmailQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     EmailQuery orderByText($order = Criteria::ASC) Order by the text column
 *
 * @method     EmailQuery groupById() Group by the id column
 * @method     EmailQuery groupByUserFromId() Group by the user_from_id column
 * @method     EmailQuery groupByUserToId() Group by the user_to_id column
 * @method     EmailQuery groupBySubject() Group by the subject column
 * @method     EmailQuery groupByText() Group by the text column
 *
 * @method     EmailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EmailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EmailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EmailQuery leftJoinUserFrom($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserFrom relation
 * @method     EmailQuery rightJoinUserFrom($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserFrom relation
 * @method     EmailQuery innerJoinUserFrom($relationAlias = null) Adds a INNER JOIN clause to the query using the UserFrom relation
 *
 * @method     EmailQuery leftJoinUserTo($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserTo relation
 * @method     EmailQuery rightJoinUserTo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserTo relation
 * @method     EmailQuery innerJoinUserTo($relationAlias = null) Adds a INNER JOIN clause to the query using the UserTo relation
 *
 * @method     Email findOne(PropelPDO $con = null) Return the first Email matching the query
 * @method     Email findOneOrCreate(PropelPDO $con = null) Return the first Email matching the query, or a new Email object populated from the query conditions when no match is found
 *
 * @method     Email findOneById(int $id) Return the first Email filtered by the id column
 * @method     Email findOneByUserFromId(int $user_from_id) Return the first Email filtered by the user_from_id column
 * @method     Email findOneByUserToId(int $user_to_id) Return the first Email filtered by the user_to_id column
 * @method     Email findOneBySubject(string $subject) Return the first Email filtered by the subject column
 * @method     Email findOneByText(string $text) Return the first Email filtered by the text column
 *
 * @method     array findById(int $id) Return Email objects filtered by the id column
 * @method     array findByUserFromId(int $user_from_id) Return Email objects filtered by the user_from_id column
 * @method     array findByUserToId(int $user_to_id) Return Email objects filtered by the user_to_id column
 * @method     array findBySubject(string $subject) Return Email objects filtered by the subject column
 * @method     array findByText(string $text) Return Email objects filtered by the text column
 *
 * @package    propel.generator.zetabud.om
 */
abstract class BaseEmailQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseEmailQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'zetabud', $modelName = 'Email', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new EmailQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    EmailQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof EmailQuery) {
			return $criteria;
		}
		$query = new EmailQuery();
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
	 * @return    Email|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = EmailPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(EmailPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(EmailPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(EmailPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_from_id column
	 * 
	 * @param     int|array $userFromId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterByUserFromId($userFromId = null, $comparison = null)
	{
		if (is_array($userFromId)) {
			$useMinMax = false;
			if (isset($userFromId['min'])) {
				$this->addUsingAlias(EmailPeer::USER_FROM_ID, $userFromId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userFromId['max'])) {
				$this->addUsingAlias(EmailPeer::USER_FROM_ID, $userFromId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmailPeer::USER_FROM_ID, $userFromId, $comparison);
	}

	/**
	 * Filter the query on the user_to_id column
	 * 
	 * @param     int|array $userToId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterByUserToId($userToId = null, $comparison = null)
	{
		if (is_array($userToId)) {
			$useMinMax = false;
			if (isset($userToId['min'])) {
				$this->addUsingAlias(EmailPeer::USER_TO_ID, $userToId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userToId['max'])) {
				$this->addUsingAlias(EmailPeer::USER_TO_ID, $userToId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmailPeer::USER_TO_ID, $userToId, $comparison);
	}

	/**
	 * Filter the query on the subject column
	 * 
	 * @param     string $subject The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterBySubject($subject = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($subject)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $subject)) {
				$subject = str_replace('*', '%', $subject);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailPeer::SUBJECT, $subject, $comparison);
	}

	/**
	 * Filter the query on the text column
	 * 
	 * @param     string $text The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterByText($text = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($text)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $text)) {
				$text = str_replace('*', '%', $text);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailPeer::TEXT, $text, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterByUserFrom($user, $comparison = null)
	{
		return $this
			->addUsingAlias(EmailPeer::USER_FROM_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserFrom relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function joinUserFrom($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserFrom');
		
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
			$this->addJoinObject($join, 'UserFrom');
		}
		
		return $this;
	}

	/**
	 * Use the UserFrom relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserFromQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserFrom($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserFrom', 'UserQuery');
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function filterByUserTo($user, $comparison = null)
	{
		return $this
			->addUsingAlias(EmailPeer::USER_TO_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserTo relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function joinUserTo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserTo');
		
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
			$this->addJoinObject($join, 'UserTo');
		}
		
		return $this;
	}

	/**
	 * Use the UserTo relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserToQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserTo($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserTo', 'UserQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Email $email Object to remove from the list of results
	 *
	 * @return    EmailQuery The current query, for fluid interface
	 */
	public function prune($email = null)
	{
		if ($email) {
			$this->addUsingAlias(EmailPeer::ID, $email->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseEmailQuery
