<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\DoseSchedules;

use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\DoseSchedule;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\QualitativeValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCodes\MedicalCodes\Things\MedicalEntities\MedicalIntangibles\MedicalCode as MedicalCode_647e1706290be;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCodes\MedicalCode as MedicalCode_647e1706290c1;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\MedicalCode as MedicalCode_647e1706290c2;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Grant;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalGuideline;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\DrugLegalStatus;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumeration;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations\MedicineSystem;
use JsonLDForWP\Plugin\Classes\Entities\Things\Organization;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations\MedicalSpecialties\Things\Intangibles\Enumerations\Specialties\MedicalSpecialty;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalStudy;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class RecommendedDoseSchedule extends DoseSchedule{
	protected string|null $doseUnit = null;
	protected float|QualitativeValue|null $doseValue = null;
	protected string|null $frequency = null;
	protected string|null $targetPopulation = null;
	protected MedicalCode_647e1706290be|MedicalCode_647e1706290c1|MedicalCode_647e1706290c2|null $code = null;
	protected Grant|null $funding = null;
	protected MedicalGuideline|null $guideline = null;
	protected DrugLegalStatus|MedicalEnumeration|string|null $legalStatus = null;
	protected MedicineSystem|null $medicineSystem = null;
	protected Organization|null $recognizingAuthority = null;
	protected MedicalSpecialty|null $relevantSpecialty = null;
	protected MedicalStudy|null $study = null;
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
		return __("A recommended dosing schedule for a drug or supplement as prescribed or recommended by an authority or by the drug/supplement's manufacturer. Capture the recommending authority in the recognizingAuthority property of MedicalEntity.", 'jsonld-for-wordpress');
	}
}