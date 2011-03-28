<?php


/**
 * Base class that represents a query for the 'ostatus_site' table.
 *
 * 
 *
 * @method     OStatus_SiteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     OStatus_SiteQuery orderByFullname($order = Criteria::ASC) Order by the fullname column
 * @method     OStatus_SiteQuery orderByShortname($order = Criteria::ASC) Order by the shortname column
 * @method     OStatus_SiteQuery orderByConsumerKey($order = Criteria::ASC) Order by the consumer_key column
 * @method     OStatus_SiteQuery orderByConsumerSecret($order = Criteria::ASC) Order by the consumer_secret column
 * @method     OStatus_SiteQuery orderBySiteUrl($order = Criteria::ASC) Order by the site_url column
 * @method     OStatus_SiteQuery orderByRequestTokenUrl($order = Criteria::ASC) Order by the request_token_url column
 * @method     OStatus_SiteQuery orderByAccessTokenUrl($order = Criteria::ASC) Order by the access_token_url column
 * @method     OStatus_SiteQuery orderByAuthorizeUrl($order = Criteria::ASC) Order by the authorize_url column
 * @method     OStatus_SiteQuery orderByUpdateUrl($order = Criteria::ASC) Order by the update_url column
 * @method     OStatus_SiteQuery orderByUpdateParam($order = Criteria::ASC) Order by the update_param column
 *
 * @method     OStatus_SiteQuery groupById() Group by the id column
 * @method     OStatus_SiteQuery groupByFullname() Group by the fullname column
 * @method     OStatus_SiteQuery groupByShortname() Group by the shortname column
 * @method     OStatus_SiteQuery groupByConsumerKey() Group by the consumer_key column
 * @method     OStatus_SiteQuery groupByConsumerSecret() Group by the consumer_secret column
 * @method     OStatus_SiteQuery groupBySiteUrl() Group by the site_url column
 * @method     OStatus_SiteQuery groupByRequestTokenUrl() Group by the request_token_url column
 * @method     OStatus_SiteQuery groupByAccessTokenUrl() Group by the access_token_url column
 * @method     OStatus_SiteQuery groupByAuthorizeUrl() Group by the authorize_url column
 * @method     OStatus_SiteQuery groupByUpdateUrl() Group by the update_url column
 * @method     OStatus_SiteQuery groupByUpdateParam() Group by the update_param column
 *
 * @method     OStatus_SiteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     OStatus_SiteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     OStatus_SiteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     OStatus_SiteQuery leftJoinOStatus_User($relationAlias = null) Adds a LEFT JOIN clause to the query using the OStatus_User relation
 * @method     OStatus_SiteQuery rightJoinOStatus_User($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OStatus_User relation
 * @method     OStatus_SiteQuery innerJoinOStatus_User($relationAlias = null) Adds a INNER JOIN clause to the query using the OStatus_User relation
 *
 * @method     OStatus_Site findOne(PropelPDO $con = null) Return the first OStatus_Site matching the query
 * @method     OStatus_Site findOneOrCreate(PropelPDO $con = null) Return the first OStatus_Site matching the query, or a new OStatus_Site object populated from the query conditions when no match is found
 *
 * @method     OStatus_Site findOneById(int $id) Return the first OStatus_Site filtered by the id column
 * @method     OStatus_Site findOneByFullname(string $fullname) Return the first OStatus_Site filtered by the fullname column
 * @method     OStatus_Site findOneByShortname(string $shortname) Return the first OStatus_Site filtered by the shortname column
 * @method     OStatus_Site findOneByConsumerKey(string $consumer_key) Return the first OStatus_Site filtered by the consumer_key column
 * @method     OStatus_Site findOneByConsumerSecret(string $consumer_secret) Return the first OStatus_Site filtered by the consumer_secret column
 * @method     OStatus_Site findOneBySiteUrl(string $site_url) Return the first OStatus_Site filtered by the site_url column
 * @method     OStatus_Site findOneByRequestTokenUrl(string $request_token_url) Return the first OStatus_Site filtered by the request_token_url column
 * @method     OStatus_Site findOneByAccessTokenUrl(string $access_token_url) Return the first OStatus_Site filtered by the access_token_url column
 * @method     OStatus_Site findOneByAuthorizeUrl(string $authorize_url) Return the first OStatus_Site filtered by the authorize_url column
 * @method     OStatus_Site findOneByUpdateUrl(string $update_url) Return the first OStatus_Site filtered by the update_url column
 * @method     OStatus_Site findOneByUpdateParam(string $update_param) Return the first OStatus_Site filtered by the update_param column
 *
 * @method     array findById(int $id) Return OStatus_Site objects filtered by the id column
 * @method     array findByFullname(string $fullname) Return OStatus_Site objects filtered by the fullname column
 * @method     array findByShortname(string $shortname) Return OStatus_Site objects filtered by the shortname column
 * @method     array findByConsumerKey(string $consumer_key) Return OStatus_Site objects filtered by the consumer_key column
 * @method     array findByConsumerSecret(string $consumer_secret) Return OStatus_Site objects filtered by the consumer_secret column
 * @method     array findBySiteUrl(string $site_url) Return OStatus_Site objects filtered by the site_url column
 * @method     array findByRequestTokenUrl(string $request_token_url) Return OStatus_Site objects filtered by the request_token_url column
 * @method     array findByAccessTokenUrl(string $access_token_url) Return OStatus_Site objects filtered by the access_token_url column
 * @method     array findByAuthorizeUrl(string $authorize_url) Return OStatus_Site objects filtered by the authorize_url column
 * @method     array findByUpdateUrl(string $update_url) Return OStatus_Site objects filtered by the update_url column
 * @method     array findByUpdateParam(string $update_param) Return OStatus_Site objects filtered by the update_param column
 *
 * @package    propel.generator.zetabud.om
 */
abstract class BaseOStatus_SiteQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseOStatus_SiteQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'zetabud', $modelName = 'OStatus_Site', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new OStatus_SiteQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    OStatus_SiteQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof OStatus_SiteQuery) {
			return $criteria;
		}
		$query = new OStatus_SiteQuery();
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
	 * @return    OStatus_Site|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = OStatus_SitePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(OStatus_SitePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(OStatus_SitePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(OStatus_SitePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the fullname column
	 * 
	 * @param     string $fullname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
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
		return $this->addUsingAlias(OStatus_SitePeer::FULLNAME, $fullname, $comparison);
	}

	/**
	 * Filter the query on the shortname column
	 * 
	 * @param     string $shortname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterByShortname($shortname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($shortname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $shortname)) {
				$shortname = str_replace('*', '%', $shortname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OStatus_SitePeer::SHORTNAME, $shortname, $comparison);
	}

	/**
	 * Filter the query on the consumer_key column
	 * 
	 * @param     string $consumerKey The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterByConsumerKey($consumerKey = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($consumerKey)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $consumerKey)) {
				$consumerKey = str_replace('*', '%', $consumerKey);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OStatus_SitePeer::CONSUMER_KEY, $consumerKey, $comparison);
	}

	/**
	 * Filter the query on the consumer_secret column
	 * 
	 * @param     string $consumerSecret The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterByConsumerSecret($consumerSecret = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($consumerSecret)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $consumerSecret)) {
				$consumerSecret = str_replace('*', '%', $consumerSecret);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OStatus_SitePeer::CONSUMER_SECRET, $consumerSecret, $comparison);
	}

	/**
	 * Filter the query on the site_url column
	 * 
	 * @param     string $siteUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterBySiteUrl($siteUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($siteUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $siteUrl)) {
				$siteUrl = str_replace('*', '%', $siteUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OStatus_SitePeer::SITE_URL, $siteUrl, $comparison);
	}

	/**
	 * Filter the query on the request_token_url column
	 * 
	 * @param     string $requestTokenUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterByRequestTokenUrl($requestTokenUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($requestTokenUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $requestTokenUrl)) {
				$requestTokenUrl = str_replace('*', '%', $requestTokenUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OStatus_SitePeer::REQUEST_TOKEN_URL, $requestTokenUrl, $comparison);
	}

	/**
	 * Filter the query on the access_token_url column
	 * 
	 * @param     string $accessTokenUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterByAccessTokenUrl($accessTokenUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($accessTokenUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $accessTokenUrl)) {
				$accessTokenUrl = str_replace('*', '%', $accessTokenUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OStatus_SitePeer::ACCESS_TOKEN_URL, $accessTokenUrl, $comparison);
	}

	/**
	 * Filter the query on the authorize_url column
	 * 
	 * @param     string $authorizeUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterByAuthorizeUrl($authorizeUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorizeUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorizeUrl)) {
				$authorizeUrl = str_replace('*', '%', $authorizeUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OStatus_SitePeer::AUTHORIZE_URL, $authorizeUrl, $comparison);
	}

	/**
	 * Filter the query on the update_url column
	 * 
	 * @param     string $updateUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterByUpdateUrl($updateUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($updateUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $updateUrl)) {
				$updateUrl = str_replace('*', '%', $updateUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OStatus_SitePeer::UPDATE_URL, $updateUrl, $comparison);
	}

	/**
	 * Filter the query on the update_param column
	 * 
	 * @param     string $updateParam The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterByUpdateParam($updateParam = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($updateParam)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $updateParam)) {
				$updateParam = str_replace('*', '%', $updateParam);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OStatus_SitePeer::UPDATE_PARAM, $updateParam, $comparison);
	}

	/**
	 * Filter the query by a related OStatus_User object
	 *
	 * @param     OStatus_User $oStatus_User  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function filterByOStatus_User($oStatus_User, $comparison = null)
	{
		return $this
			->addUsingAlias(OStatus_SitePeer::ID, $oStatus_User->getSiteId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the OStatus_User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     OStatus_Site $oStatus_Site Object to remove from the list of results
	 *
	 * @return    OStatus_SiteQuery The current query, for fluid interface
	 */
	public function prune($oStatus_Site = null)
	{
		if ($oStatus_Site) {
			$this->addUsingAlias(OStatus_SitePeer::ID, $oStatus_Site->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseOStatus_SiteQuery
