<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks;

use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Quantities\Duration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ListItems\HowToItems\HowToSupply;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ListItems\HowToItems\HowToTool;
use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ItemList;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Ratings\AggregateRating;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\WebPage;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Audience;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\AudioObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Clip;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MusicRecording;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Comment;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Rating;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Comments\CorrectionComment;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeAreas\Country;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\AlignmentObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Grant;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Language;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\InteractionCounter;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Claim;
use JsonLDForWP\Plugin\Classes\Entities\Things\Product;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Demand;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Offer;
use JsonLDForWP\Plugin\Classes\Entities\Things\Events\PublicationEvent;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\Review;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\QualitativeValues\SizeSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\VideoObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ListItem;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;

/**
* @package JsonLDForWP
*/
class HowToDirection extends CreativeWork{
	protected MediaObject|string|null $afterMedia = null;
	protected MediaObject|string|null $beforeMedia = null;
	protected MediaObject|string|null $duringMedia = null;
	protected Duration|null $performTime = null;
	protected Duration|null $prepTime = null;
	protected HowToSupply|string|null $supply = null;
	protected HowToTool|string|null $tool = null;
	protected Duration|null $totalTime = null;
	protected Thing|null $about = null;
	protected string|null $abstract = null;
	protected string|null $accessMode = null;
	protected ItemList|null $accessModeSufficient = null;
	protected string|null $accessibilityAPI = null;
	protected string|null $accessibilityControl = null;
	protected string|null $accessibilityFeature = null;
	protected string|null $accessibilityHazard = null;
	protected string|null $accessibilitySummary = null;
	protected Person|null $accountablePerson = null;
	protected CreativeWork|string|null $acquireLicensePage = null;
	protected AggregateRating|null $aggregateRating = null;
	protected string|null $alternativeHeadline = null;
	protected string|WebPage|null $archivedAt = null;
	protected DefinedTerm|string|null $assesses = null;
	protected MediaObject|null $associatedMedia = null;
	protected Audience|null $audience = null;
	protected AudioObject|Clip|MusicRecording|null $audio = null;
	protected Organization|Person|null $author = null;
	protected string|null $award = null;
	protected Person|null $character = null;
	protected CreativeWork|string|null $citation = null;
	protected Comment|null $comment = null;
	protected int|null $commentCount = null;
	protected string|null $conditionsOfAccess = null;
	protected Place|null $contentLocation = null;
	protected Rating|string|null $contentRating = null;
	protected DateTime|null $contentReferenceTime = null;
	protected Organization|Person|null $contributor = null;
	protected Organization|Person|null $copyrightHolder = null;
	protected string|null $copyrightNotice = null;
	protected float|null $copyrightYear = null;
	protected CorrectionComment|string|null $correction = null;
	protected Country|null $countryOfOrigin = null;
	protected DefinedTerm|string|null $creativeWorkStatus = null;
	protected Organization|Person|null $creator = null;
	protected string|null $creditText = null;
	protected Date|DateTime|null $dateCreated = null;
	protected Date|DateTime|null $dateModified = null;
	protected Date|DateTime|null $datePublished = null;
	protected string|null $discussionUrl = null;
	protected string|null $editEIDR = null;
	protected Person|null $editor = null;
	protected AlignmentObject|null $educationalAlignment = null;
	protected DefinedTerm|string|null $educationalLevel = null;
	protected DefinedTerm|string|null $educationalUse = null;
	protected MediaObject|null $encoding = null;
	protected string|null $encodingFormat = null;
	protected CreativeWork|null $exampleOfWork = null;
	protected Date|DateTime|null $expires = null;
	protected Organization|Person|null $funder = null;
	protected Grant|null $funding = null;
	protected string|null $genre = null;
	protected CreativeWork|null $hasPart = null;
	protected string|null $headline = null;
	protected Language|string|null $inLanguage = null;
	protected InteractionCounter|null $interactionStatistic = null;
	protected string|null $interactivityType = null;
	protected Claim|null $interpretedAsClaim = null;
	protected bool|null $isAccessibleForFree = null;
	protected CreativeWork|Product|string|null $isBasedOn = null;
	protected bool|null $isFamilyFriendly = null;
	protected CreativeWork|string|null $isPartOf = null;
	protected DefinedTerm|string|null $keywords = null;
	protected DefinedTerm|string|null $learningResourceType = null;
	protected CreativeWork|string|null $license = null;
	protected Place|null $locationCreated = null;
	protected Thing|null $mainEntity = null;
	protected Organization|Person|null $maintainer = null;
	protected Product|string|null $material = null;
	protected QuantitativeValue|string|null $materialExtent = null;
	protected Thing|null $mentions = null;
	protected Demand|Offer|null $offers = null;
	protected DefinedTerm|string|null $pattern = null;
	protected int|string|null $position = null;
	protected Organization|Person|null $producer = null;
	protected Organization|Person|null $provider = null;
	protected PublicationEvent|null $publication = null;
	protected Organization|Person|null $publisher = null;
	protected Organization|null $publisherImprint = null;
	protected CreativeWork|string|null $publishingPrinciples = null;
	protected Event|null $recordedAt = null;
	protected PublicationEvent|null $releasedEvent = null;
	protected Review|null $review = null;
	protected string|null $schemaVersion = null;
	protected Date|null $sdDatePublished = null;
	protected CreativeWork|string|null $sdLicense = null;
	protected Organization|Person|null $sdPublisher = null;
	protected DefinedTerm|QuantitativeValue|SizeSpecification|string|null $size = null;
	protected Organization|null $sourceOrganization = null;
	protected Place|null $spatial = null;
	protected Place|null $spatialCoverage = null;
	protected Organization|Person|null $sponsor = null;
	protected DefinedTerm|string|null $teaches = null;
	protected DateTime|string|null $temporal = null;
	protected DateTime|string|null $temporalCoverage = null;
	protected string|null $text = null;
	protected ImageObject|null $thumbnail = null;
	protected string|null $thumbnailUrl = null;
	protected Duration|null $timeRequired = null;
	protected CreativeWork|null $translationOfWork = null;
	protected Organization|Person|null $translator = null;
	protected string|null $typicalAgeRange = null;
	protected CreativeWork|string|null $usageInfo = null;
	protected float|string|null $version = null;
	protected Clip|VideoObject|null $video = null;
	protected CreativeWork|null $workExample = null;
	protected CreativeWork|null $workTranslation = null;
	protected Thing|null $item = null;
	protected ListItem|null $nextItem = null;
	protected ListItem|null $previousItem = null;
	protected string|null $additionalType = null;
	protected string|null $alternateName = null;
	protected string|TextObject|null $description = null;
	protected string|null $disambiguatingDescription = null;
	protected PropertyValue|string|null $identifier = null;
	protected ImageObject|string|null $image = null;
	protected CreativeWork|string|null $mainEntityOfPage = null;
	protected string|null $name = null;
	protected Action|null $potentialAction = null;
	protected string|null $sameAs = null;
	protected CreativeWork|Event|null $subjectOf = null;
	protected string|null $url = null;

	public function description():string {
		return __("A direction indicating a single action to do in the instructions for how to achieve a result.", 'jsonld-for-wordpress');
	}
}