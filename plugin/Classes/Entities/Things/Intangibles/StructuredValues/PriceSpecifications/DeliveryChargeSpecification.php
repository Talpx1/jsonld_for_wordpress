<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PriceSpecifications;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PriceSpecification;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\DeliveryMethod;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\AdministrativeArea;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\GeoShape;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\QuantitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Date;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class DeliveryChargeSpecification extends PriceSpecification{
	protected DeliveryMethod|null $appliesToDeliveryMethod = null;
	protected AdministrativeArea|GeoShape|Place|string|null $areaServed = null;
	protected GeoShape|Place|string|null $eligibleRegion = null;
	protected GeoShape|Place|string|null $ineligibleRegion = null;
	protected QuantitativeValue|null $eligibleQuantity = null;
	protected PriceSpecification|null $eligibleTransactionVolume = null;
	protected float|null $maxPrice = null;
	protected float|null $minPrice = null;
	protected float|string|null $price = null;
	protected string|null $priceCurrency = null;
	protected Date|DateTime|null $validFrom = null;
	protected Date|DateTime|null $validThrough = null;
	protected bool|null $valueAddedTaxIncluded = null;
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
		return __("The price for the delivery of an offer using a particular delivery method.", 'jsonld-for-wordpress');
	}
}