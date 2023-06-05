<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things;

use JsonLDForWP\Plugin\Classes\Entities\Thing;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoints\PostalAddress;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\CivicStructures\EducationalOrganization as EducationalOrganization_647e1546cfc51;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organizations\EducationalOrganization as EducationalOrganization_647e1546cfc54;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Brand;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\ContactPoint;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Grant;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\GenderType;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\EducationalOccupationalCredential;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Occupation;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ItemLists\OfferCatalog;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Quantities\Distance;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\InteractionCounter;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Language;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Offer;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ProgramMembership;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeAreas\Country;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\MonetaryAmount;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PriceSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\OwnershipInfo;
use JsonLDForWP\Plugin\Classes\Entities\Things\Product;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Demand;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;

/**
* @package JsonLDForWP
*/
class Person extends Thing{
	protected string|null $additionalName = null;
	protected PostalAddress|string|null $address = null;
	protected Organization|null $affiliation = null;
	protected EducationalOrganization_647e1546cfc51|EducationalOrganization_647e1546cfc54|Organization|null $alumniOf = null;
	protected string|null $award = null;
	protected Date|null $birthDate = null;
	protected Place|null $birthPlace = null;
	protected Brand|Organization|null $brand = null;
	protected string|null $callSign = null;
	protected Person|null $children = null;
	protected Person|string|null $colleague = null;
	protected ContactPoint|null $contactPoint = null;
	protected Date|null $deathDate = null;
	protected Place|null $deathPlace = null;
	protected string|null $duns = null;
	protected string|null $email = null;
	protected string|null $familyName = null;
	protected string|null $faxNumber = null;
	protected Person|null $follows = null;
	protected Organization|Person|null $funder = null;
	protected Grant|null $funding = null;
	protected GenderType|string|null $gender = null;
	protected string|null $givenName = null;
	protected string|null $globalLocationNumber = null;
	protected EducationalOccupationalCredential|null $hasCredential = null;
	protected Occupation|null $hasOccupation = null;
	protected OfferCatalog|null $hasOfferCatalog = null;
	protected Place|null $hasPOS = null;
	protected Distance|QuantitativeValue|null $height = null;
	protected ContactPoint|Place|null $homeLocation = null;
	protected string|null $honorificPrefix = null;
	protected string|null $honorificSuffix = null;
	protected InteractionCounter|null $interactionStatistic = null;
	protected string|null $isicV4 = null;
	protected DefinedTerm|string|null $jobTitle = null;
	protected Person|null $knows = null;
	protected string|Thing|null $knowsAbout = null;
	protected Language|string|null $knowsLanguage = null;
	protected Offer|null $makesOffer = null;
	protected Organization|ProgramMembership|null $memberOf = null;
	protected string|null $naics = null;
	protected Country|null $nationality = null;
	protected MonetaryAmount|PriceSpecification|null $netWorth = null;
	protected OwnershipInfo|Product|null $owns = null;
	protected Person|null $parent = null;
	protected Event|null $performerIn = null;
	protected CreativeWork|string|null $publishingPrinciples = null;
	protected Person|null $relatedTo = null;
	protected Demand|null $seeks = null;
	protected Person|null $sibling = null;
	protected Organization|Person|null $sponsor = null;
	protected Person|null $spouse = null;
	protected string|null $taxID = null;
	protected string|null $telephone = null;
	protected string|null $vatID = null;
	protected QuantitativeValue|null $weight = null;
	protected ContactPoint|Place|null $workLocation = null;
	protected Organization|null $worksFor = null;
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
		return __("A person (alive, dead, undead, or fictional).", 'jsonld-for-wordpress');
	}
}