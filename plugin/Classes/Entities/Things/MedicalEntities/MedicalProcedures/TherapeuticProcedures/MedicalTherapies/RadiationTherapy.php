<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalProcedures\TherapeuticProcedures\MedicalTherapies;

use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalProcedures\TherapeuticProcedures\MedicalTherapy;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalContraindication;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntity;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\DoseSchedule;
use JsonLDForWP\Plugin\Classes\Entities\Things\Products\Drugs\Things\MedicalEntities\Substances\Drug;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations\MedicalProcedureType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations\EventStatusType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations\MedicalStudyStatus;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCodes\MedicalCodes\Things\MedicalEntities\MedicalIntangibles\MedicalCode as MedicalCode_647e171146531;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCodes\MedicalCode as MedicalCode_647e171146534;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\MedicalCode as MedicalCode_647e171146535;
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
class RadiationTherapy extends MedicalTherapy{
	protected MedicalContraindication|string|null $contraindication = null;
	protected MedicalTherapy|null $duplicateTherapy = null;
	protected MedicalEntity|null $seriousAdverseOutcome = null;
	protected MedicalEntity|null $adverseOutcome = null;
	protected DoseSchedule|null $doseSchedule = null;
	protected Drug|null $drug = null;
	protected string|null $bodyLocation = null;
	protected string|null $followup = null;
	protected string|null $howPerformed = null;
	protected MedicalEntity|string|null $preparation = null;
	protected MedicalProcedureType|null $procedureType = null;
	protected EventStatusType|MedicalStudyStatus|string|null $status = null;
	protected MedicalCode_647e171146531|MedicalCode_647e171146534|MedicalCode_647e171146535|null $code = null;
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
		return __("A process of care using radiation aimed at improving a health condition.", 'jsonld-for-wordpress');
	}
}