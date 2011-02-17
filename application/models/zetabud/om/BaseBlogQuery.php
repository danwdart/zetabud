<?php


/**
 * Base class that represents a query for the 'blog' table.
 *
 * 
 *
 * @method     BlogQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     BlogQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     BlogQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     BlogQuery orderByText($order = Criteria::ASC) Order by the text column
 * @method     BlogQuery orderByCreatedDate($order = Criteria::ASC) Order by the created_date column
 * @method     BlogQuery orderByModifiedDate($order = Criteria::ASC) Order by the modified_date column
 * @method     BlogQuery orderByPublishedDate($order = Criteria::ASC) Order by the published_date column
 *
 * @method     BlogQuery groupById() Group by the id column
 * @method     BlogQuery groupByUserId() Group by the user_id column
 * @method     BlogQuery groupByTitle() Group by the title column
 * @method     BlogQuery groupByText() Group by the text column
 * @method     BlogQuery groupByCreatedDate() Group by the created_date column
 * @method     BlogQuery groupByModifiedDate() Group by the modified_date column
 * @method     BlogQuery groupByPublishedDate() Group by the published_date column
 *
 * @method     BlogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BlogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BlogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Blog findOne(PropelPDO $con = null) Return the first Blog matching the query
 * @method     Blog findOneOrCreate(PropelPDO $con = null) Return the first Blog matching the query, or a new Blog object populated from the query conditions when no match is found
 *
 * @method     Blog findOneById(int $id) Return the first Blog filtered by the id column
 * @method     Blog findOneByUserId(int $user_id) Return the first Blog filtered by the user_id column
 * @method     Blog findOneByTitle(string $title) Return the first Blog filtered by the title column
 * @method     Blog findOneByText(string $text) Return the first Blog filtered by the text column
 * @method     Blog findOneByCreatedDate(string $created_date) Return the first Blog filtered by the created_date column
 * @method     Blog findOneByModifiedDate(string $modified_date) Return the first Blog filtered by the modified_date column
 * @method     Blog findOneByPublishedDate(string $published_date) Return the first Blog filtered by the published_date column
 *
 * @method     array findById(int $id) Return Blog objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return Blog objects filtered by the user_id column
 * @method     array findByTitle(string $title) Return Blog objects filtered by the title column
 * @method     array findByText(string $text) Return Blog objects filtered by the text column
 * @method     array findByCreatedDate(string $created_date) Return Blog objects filtered by the created_date column
 * @method     array findByModifiedDate(string $modified_date) Return Blog objects filtered by the modified_date column
 * @method     array findByPublishedDate(string $published_date) Return Blog objects filtered by the published_date column
 *
 * @package    propel.generator.zetabud.om
 */
abstract class BaseBlogQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBlogQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'zetabud', $modelName = 'Blog', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BlogQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BlogQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BlogQuery) {
			return $criteria;
		}
		$query = new BlogQuery();
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
	 * @return    Blog|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BlogPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BlogPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BlogPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BlogPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(BlogPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(BlogPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BlogPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the text column
	 * 
	 * @param     string $text The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BlogPeer::TEXT, $text, $comparison);
	}

	/**
	 * Filter the query on the created_date column
	 * 
	 * @param     string|array $createdDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByCreatedDate($createdDate = null, $comparison = null)
	{
		if (is_array($createdDate)) {
			$useMinMax = false;
			if (isset($createdDate['min'])) {
				$this->addUsingAlias(BlogPeer::CREATED_DATE, $createdDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdDate['max'])) {
				$this->addUsingAlias(BlogPeer::CREATED_DATE, $createdDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPeer::CREATED_DATE, $createdDate, $comparison);
	}

	/**
	 * Filter the query on the modified_date column
	 * 
	 * @param     string|array $modifiedDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByModifiedDate($modifiedDate = null, $comparison = null)
	{
		if (is_array($modifiedDate)) {
			$useMinMax = false;
			if (isset($modifiedDate['min'])) {
				$this->addUsingAlias(BlogPeer::MODIFIED_DATE, $modifiedDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($modifiedDate['max'])) {
				$this->addUsingAlias(BlogPeer::MODIFIED_DATE, $modifiedDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPeer::MODIFIED_DATE, $modifiedDate, $comparison);
	}

	/**
	 * Filter the query on the published_date column
	 * 
	 * @param     string|array $publishedDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByPublishedDate($publishedDate = null, $comparison = null)
	{
		if (is_array($publishedDate)) {
			$useMinMax = false;
			if (isset($publishedDate['min'])) {
				$this->addUsingAlias(BlogPeer::PUBLISHED_DATE, $publishedDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($publishedDate['max'])) {
				$this->addUsingAlias(BlogPeer::PUBLISHED_DATE, $publishedDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPeer::PUBLISHED_DATE, $publishedDate, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Blog $blog Object to remove from the list of results
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function prune($blog = null)
	{
		if ($blog) {
			$this->addUsingAlias(BlogPeer::ID, $blog->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBlogQuery
