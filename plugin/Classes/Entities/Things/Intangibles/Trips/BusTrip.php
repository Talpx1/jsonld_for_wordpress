<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Trips;

use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Trip;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\CivicStructures\BusStation;
use JsonLDForWP\Plugin\Classes\Entities\Things\Places\CivicStructures\BusStop;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\DateTime;
use JsonLDForWP\Plugin\Classes\Entities\DataTypes\Time;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\ItemList;
use JsonLDForWP\Plugin\Classes\Entities\Things\Place;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Demand;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Offer;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Person;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class BusTrip extends Trip{
	protected BusStation|BusStop|null $arrivalBusStop = null;
	protected string|null $busName = null;
	protected string|null $busNumber = null;
	protected BusStation|BusStop|null $departureBusStop = null;
	protected DateTime|Time|null $arrivalTime = null;
	protected DateTime|Time|null $departureTime = null;
	protected ItemList|Place|null $itinerary = null;
	protected Demand|Offer|null $offers = null;
	protected Trip|null $partOfTrip = null;
	protected Organization|Person|null $provider = null;
	protected Trip|null $subTrip = null;
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
		return __("A trip on a commercial bus line.", 'jsonld-for-wordpress');
	}
}