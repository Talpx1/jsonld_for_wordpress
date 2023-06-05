<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\AnatomicalStructures;

use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\AnatomicalStructure;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\AnatomicalStructures\Muscle;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\SuperficialAnatomy;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\AnatomicalStructures\BrainStructure;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\AnatomicalSystem;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalCondition;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalProcedures\TherapeuticProcedures\MedicalTherapy;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCodes\MedicalCodes\Things\MedicalEntities\MedicalIntangibles\MedicalCode as MedicalCode_647e16f49ed37;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCodes\MedicalCode as MedicalCode_647e16f49ed3a;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\MedicalCode as MedicalCode_647e16f49ed3c;
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
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class Nerve extends AnatomicalStructure{
	protected Muscle|null $nerveMotor = null;
	protected AnatomicalStructure|SuperficialAnatomy|null $sensoryUnit = null;
	protected BrainStructure|null $sourcedFrom = null;
	protected string|null $associatedPathophysiology = null;
	protected string|null $bodyLocation = null;
	protected AnatomicalStructure|null $connectedTo = null;
	protected ImageObject|null $diagram = null;
	protected AnatomicalSystem|null $partOfSystem = null;
	protected MedicalCondition|null $relatedCondition = null;
	protected MedicalTherapy|null $relatedTherapy = null;
	protected AnatomicalStructure|null $subStructure = null;
	protected MedicalCode_647e16f49ed37|MedicalCode_647e16f49ed3a|MedicalCode_647e16f49ed3c|null $code = null;
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
		return __("A common pathway for the electrochemical nerve impulses that are transmitted along each of the axons.", 'jsonld-for-wordpress');
	}
}