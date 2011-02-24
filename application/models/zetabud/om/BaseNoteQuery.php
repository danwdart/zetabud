<?php


/**
 * Base class that represents a query for the 'note' table.
 *
 * 
 *
 * @method     NoteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NoteQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     NoteQuery orderByText($order = Criteria::ASC) Order by the text column
 * @method     NoteQuery orderByCreatedDate($order = Criteria::ASC) Order by the created_date column
 * @method     NoteQuery orderByModifiedDate($order = Criteria::ASC) Order by the modified_date column
 *
 * @method     NoteQuery groupById() Group by the id column
 * @method     NoteQuery groupByUserId() Group by the user_id column
 * @method     NoteQuery groupByText() Group by the text column
 * @method     NoteQuery groupByCreatedDate() Group by the created_date column
 * @method     NoteQuery groupByModifiedDate() Group by the modified_date column
 *
 * @method     NoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NoteQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     NoteQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     NoteQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     Note findOne(PropelPDO $con = null) Return the first Note matching the query
 * @method     Note findOneOrCreate(PropelPDO $con = null) Return the first Note matching the query, or a new Note object populated from the query conditions when no match is found
 *
 * @method     Note findOneById(int $id) Return the first Note filtered by the id column
 * @method     Note findOneByUserId(int $user_id) Return the first Note filtered by the user_id column
 * @method     Note findOneByText(string $text) Return the first Note filtered by the text column
 * @method     Note findOneByCreatedDate(string $created_date) Return the first Note filtered by the created_date column
 * @method     Note findOneByModifiedDate(string $modified_date) Return the first Note filtered by the modified_date column
 *
 * @method     array findById(int $id) Return Note objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return Note objects filtered by the user_id column
 * @method     array findByText(string $text) Return Note objects filtered by the text column
 * @method     array findByCreatedDate(string $created_date) Return Note objects filtered by the created_date column
 * @method     array findByModifiedDate(string $modified_date) Return Note objects filtered by the modified_date column
 *
 * @package    propel.generator.zetabud.om
 */
abstract class BaseNoteQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNoteQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'zetabud', $modelName = 'Note', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NoteQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NoteQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NoteQuery) {
			return $criteria;
		}
		$query = new NoteQuery();
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
	 * @return    Note|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NotePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NoteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NotePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NoteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NotePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NoteQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NotePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NoteQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(NotePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(NotePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NotePeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the text column
	 * 
	 * @param     string $text The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NoteQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NotePeer::TEXT, $text, $comparison);
	}

	/**
	 * Filter the query on the created_date column
	 * 
	 * @param     string|array $createdDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NoteQuery The current query, for fluid interface
	 */
	public function filterByCreatedDate($createdDate = null, $comparison = null)
	{
		if (is_array($createdDate)) {
			$useMinMax = false;
			if (isset($createdDate['min'])) {
				$this->addUsingAlias(NotePeer::CREATED_DATE, $createdDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdDate['max'])) {
				$this->addUsingAlias(NotePeer::CREATED_DATE, $createdDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NotePeer::CREATED_DATE, $createdDate, $comparison);
	}

	/**
	 * Filter the query on the modified_date column
	 * 
	 * @param     string|array $modifiedDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NoteQuery The current query, for fluid interface
	 */
	public function filterByModifiedDate($modifiedDate = null, $comparison = null)
	{
		if (is_array($modifiedDate)) {
			$useMinMax = false;
			if (isset($modifiedDate['min'])) {
				$this->addUsingAlias(NotePeer::MODIFIED_DATE, $modifiedDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($modifiedDate['max'])) {
				$this->addUsingAlias(NotePeer::MODIFIED_DATE, $modifiedDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NotePeer::MODIFIED_DATE, $modifiedDate, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NoteQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(NotePeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NoteQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Note $note Object to remove from the list of results
	 *
	 * @return    NoteQuery The current query, for fluid interface
	 */
	public function prune($note = null)
	{
		if ($note) {
			$this->addUsingAlias(NotePeer::ID, $note->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNoteQuery
