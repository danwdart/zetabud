<?php


/**
 * Base class that represents a query for the 'audio_file' table.
 *
 * 
 *
 * @method     AudioFileQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AudioFileQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     AudioFileQuery orderByArtist($order = Criteria::ASC) Order by the artist column
 * @method     AudioFileQuery orderByAlbum($order = Criteria::ASC) Order by the album column
 * @method     AudioFileQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     AudioFileQuery orderByTrack($order = Criteria::ASC) Order by the track column
 * @method     AudioFileQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method     AudioFileQuery orderByPath($order = Criteria::ASC) Order by the path column
 *
 * @method     AudioFileQuery groupById() Group by the id column
 * @method     AudioFileQuery groupByUserId() Group by the user_id column
 * @method     AudioFileQuery groupByArtist() Group by the artist column
 * @method     AudioFileQuery groupByAlbum() Group by the album column
 * @method     AudioFileQuery groupByTitle() Group by the title column
 * @method     AudioFileQuery groupByTrack() Group by the track column
 * @method     AudioFileQuery groupByComments() Group by the comments column
 * @method     AudioFileQuery groupByPath() Group by the path column
 *
 * @method     AudioFileQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AudioFileQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AudioFileQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AudioFile findOne(PropelPDO $con = null) Return the first AudioFile matching the query
 * @method     AudioFile findOneOrCreate(PropelPDO $con = null) Return the first AudioFile matching the query, or a new AudioFile object populated from the query conditions when no match is found
 *
 * @method     AudioFile findOneById(int $id) Return the first AudioFile filtered by the id column
 * @method     AudioFile findOneByUserId(int $user_id) Return the first AudioFile filtered by the user_id column
 * @method     AudioFile findOneByArtist(string $artist) Return the first AudioFile filtered by the artist column
 * @method     AudioFile findOneByAlbum(string $album) Return the first AudioFile filtered by the album column
 * @method     AudioFile findOneByTitle(string $title) Return the first AudioFile filtered by the title column
 * @method     AudioFile findOneByTrack(string $track) Return the first AudioFile filtered by the track column
 * @method     AudioFile findOneByComments(string $comments) Return the first AudioFile filtered by the comments column
 * @method     AudioFile findOneByPath(string $path) Return the first AudioFile filtered by the path column
 *
 * @method     array findById(int $id) Return AudioFile objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return AudioFile objects filtered by the user_id column
 * @method     array findByArtist(string $artist) Return AudioFile objects filtered by the artist column
 * @method     array findByAlbum(string $album) Return AudioFile objects filtered by the album column
 * @method     array findByTitle(string $title) Return AudioFile objects filtered by the title column
 * @method     array findByTrack(string $track) Return AudioFile objects filtered by the track column
 * @method     array findByComments(string $comments) Return AudioFile objects filtered by the comments column
 * @method     array findByPath(string $path) Return AudioFile objects filtered by the path column
 *
 * @package    propel.generator.zetabud.om
 */
abstract class BaseAudioFileQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAudioFileQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'zetabud', $modelName = 'AudioFile', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AudioFileQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AudioFileQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AudioFileQuery) {
			return $criteria;
		}
		$query = new AudioFileQuery();
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
	 * @return    AudioFile|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AudioFilePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AudioFileQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AudioFilePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AudioFileQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AudioFilePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AudioFileQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AudioFilePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AudioFileQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(AudioFilePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(AudioFilePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AudioFilePeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the artist column
	 * 
	 * @param     string $artist The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AudioFileQuery The current query, for fluid interface
	 */
	public function filterByArtist($artist = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($artist)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $artist)) {
				$artist = str_replace('*', '%', $artist);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AudioFilePeer::ARTIST, $artist, $comparison);
	}

	/**
	 * Filter the query on the album column
	 * 
	 * @param     string $album The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AudioFileQuery The current query, for fluid interface
	 */
	public function filterByAlbum($album = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($album)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $album)) {
				$album = str_replace('*', '%', $album);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AudioFilePeer::ALBUM, $album, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AudioFileQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AudioFilePeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the track column
	 * 
	 * @param     string $track The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AudioFileQuery The current query, for fluid interface
	 */
	public function filterByTrack($track = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($track)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $track)) {
				$track = str_replace('*', '%', $track);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AudioFilePeer::TRACK, $track, $comparison);
	}

	/**
	 * Filter the query on the comments column
	 * 
	 * @param     string $comments The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AudioFileQuery The current query, for fluid interface
	 */
	public function filterByComments($comments = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comments)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comments)) {
				$comments = str_replace('*', '%', $comments);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AudioFilePeer::COMMENTS, $comments, $comparison);
	}

	/**
	 * Filter the query on the path column
	 * 
	 * @param     string $path The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AudioFileQuery The current query, for fluid interface
	 */
	public function filterByPath($path = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($path)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $path)) {
				$path = str_replace('*', '%', $path);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AudioFilePeer::PATH, $path, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AudioFile $audioFile Object to remove from the list of results
	 *
	 * @return    AudioFileQuery The current query, for fluid interface
	 */
	public function prune($audioFile = null)
	{
		if ($audioFile) {
			$this->addUsingAlias(AudioFilePeer::ID, $audioFile->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAudioFileQuery
