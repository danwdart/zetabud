<?php


/**
 * Base class that represents a query for the 'picture' table.
 *
 * 
 *
 * @method     PictureQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PictureQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     PictureQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     PictureQuery orderByCaption($order = Criteria::ASC) Order by the caption column
 * @method     PictureQuery orderByOrientation($order = Criteria::ASC) Order by the orientation column
 * @method     PictureQuery orderByRating($order = Criteria::ASC) Order by the rating column
 * @method     PictureQuery orderByCreatedDate($order = Criteria::ASC) Order by the created_date column
 * @method     PictureQuery orderByModifiedDate($order = Criteria::ASC) Order by the modified_date column
 *
 * @method     PictureQuery groupById() Group by the id column
 * @method     PictureQuery groupByUserId() Group by the user_id column
 * @method     PictureQuery groupByTitle() Group by the title column
 * @method     PictureQuery groupByCaption() Group by the caption column
 * @method     PictureQuery groupByOrientation() Group by the orientation column
 * @method     PictureQuery groupByRating() Group by the rating column
 * @method     PictureQuery groupByCreatedDate() Group by the created_date column
 * @method     PictureQuery groupByModifiedDate() Group by the modified_date column
 *
 * @method     PictureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PictureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PictureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PictureQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     PictureQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     PictureQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     Picture findOne(PropelPDO $con = null) Return the first Picture matching the query
 * @method     Picture findOneOrCreate(PropelPDO $con = null) Return the first Picture matching the query, or a new Picture object populated from the query conditions when no match is found
 *
 * @method     Picture findOneById(int $id) Return the first Picture filtered by the id column
 * @method     Picture findOneByUserId(int $user_id) Return the first Picture filtered by the user_id column
 * @method     Picture findOneByTitle(string $title) Return the first Picture filtered by the title column
 * @method     Picture findOneByCaption(string $caption) Return the first Picture filtered by the caption column
 * @method     Picture findOneByOrientation(string $orientation) Return the first Picture filtered by the orientation column
 * @method     Picture findOneByRating(string $rating) Return the first Picture filtered by the rating column
 * @method     Picture findOneByCreatedDate(string $created_date) Return the first Picture filtered by the created_date column
 * @method     Picture findOneByModifiedDate(string $modified_date) Return the first Picture filtered by the modified_date column
 *
 * @method     array findById(int $id) Return Picture objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return Picture objects filtered by the user_id column
 * @method     array findByTitle(string $title) Return Picture objects filtered by the title column
 * @method     array findByCaption(string $caption) Return Picture objects filtered by the caption column
 * @method     array findByOrientation(string $orientation) Return Picture objects filtered by the orientation column
 * @method     array findByRating(string $rating) Return Picture objects filtered by the rating column
 * @method     array findByCreatedDate(string $created_date) Return Picture objects filtered by the created_date column
 * @method     array findByModifiedDate(string $modified_date) Return Picture objects filtered by the modified_date column
 *
 * @package    propel.generator.zetabud.om
 */
abstract class BasePictureQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePictureQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'zetabud', $modelName = 'Picture', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PictureQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PictureQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PictureQuery) {
			return $criteria;
		}
		$query = new PictureQuery();
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
	 * @return    Picture|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PicturePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PicturePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PicturePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PicturePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(PicturePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(PicturePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PicturePeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PicturePeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the caption column
	 * 
	 * @param     string $caption The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function filterByCaption($caption = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($caption)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $caption)) {
				$caption = str_replace('*', '%', $caption);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PicturePeer::CAPTION, $caption, $comparison);
	}

	/**
	 * Filter the query on the orientation column
	 * 
	 * @param     string $orientation The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function filterByOrientation($orientation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($orientation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $orientation)) {
				$orientation = str_replace('*', '%', $orientation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PicturePeer::ORIENTATION, $orientation, $comparison);
	}

	/**
	 * Filter the query on the rating column
	 * 
	 * @param     string|array $rating The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function filterByRating($rating = null, $comparison = null)
	{
		if (is_array($rating)) {
			$useMinMax = false;
			if (isset($rating['min'])) {
				$this->addUsingAlias(PicturePeer::RATING, $rating['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($rating['max'])) {
				$this->addUsingAlias(PicturePeer::RATING, $rating['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PicturePeer::RATING, $rating, $comparison);
	}

	/**
	 * Filter the query on the created_date column
	 * 
	 * @param     string|array $createdDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function filterByCreatedDate($createdDate = null, $comparison = null)
	{
		if (is_array($createdDate)) {
			$useMinMax = false;
			if (isset($createdDate['min'])) {
				$this->addUsingAlias(PicturePeer::CREATED_DATE, $createdDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdDate['max'])) {
				$this->addUsingAlias(PicturePeer::CREATED_DATE, $createdDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PicturePeer::CREATED_DATE, $createdDate, $comparison);
	}

	/**
	 * Filter the query on the modified_date column
	 * 
	 * @param     string|array $modifiedDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function filterByModifiedDate($modifiedDate = null, $comparison = null)
	{
		if (is_array($modifiedDate)) {
			$useMinMax = false;
			if (isset($modifiedDate['min'])) {
				$this->addUsingAlias(PicturePeer::MODIFIED_DATE, $modifiedDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($modifiedDate['max'])) {
				$this->addUsingAlias(PicturePeer::MODIFIED_DATE, $modifiedDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PicturePeer::MODIFIED_DATE, $modifiedDate, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(PicturePeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PictureQuery The current query, for fluid interface
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
	 * @param     Picture $picture Object to remove from the list of results
	 *
	 * @return    PictureQuery The current query, for fluid interface
	 */
	public function prune($picture = null)
	{
		if ($picture) {
			$this->addUsingAlias(PicturePeer::ID, $picture->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePictureQuery
