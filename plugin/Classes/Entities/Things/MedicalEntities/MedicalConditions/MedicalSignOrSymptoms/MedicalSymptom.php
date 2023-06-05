<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalConditions\MedicalSignOrSymptoms;

use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalConditions\MedicalSignOrSymptom;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalProcedures\TherapeuticProcedures\MedicalTherapy;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\AnatomicalStructure;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\AnatomicalSystem;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\SuperficialAnatomy;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\DDxElement;
use JsonLDForWP\Plugin\Classes\Entities\Things\Products\Drugs\Things\MedicalEntities\Substances\Drug;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalRiskFactor;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\MedicalConditionStage;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\StatusEnumerations\EventStatusType;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations\MedicalEnumerations\MedicalStudyStatus;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalTest;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCodes\MedicalCodes\Things\MedicalEntities\MedicalIntangibles\MedicalCode as MedicalCode_647e16ffdc7c6;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerms\CategoryCodes\MedicalCode as MedicalCode_647e16ffdc7c9;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalIntangibles\MedicalCode as MedicalCode_647e16ffdc7ca;
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
class MedicalSymptom extends MedicalSignOrSymptom{
	protected MedicalTherapy|null $possibleTreatment = null;
	protected AnatomicalStructure|AnatomicalSystem|SuperficialAnatomy|null $associatedAnatomy = null;
	protected DDxElement|null $differentialDiagnosis = null;
	protected Drug|null $drug = null;
	protected string|null $epidemiology = null;
	protected string|null $expectedPrognosis = null;
	protected string|null $naturalProgression = null;
	protected string|null $pathophysiology = null;
	protected string|null $possibleComplication = null;
	protected MedicalTherapy|null $primaryPrevention = null;
	protected MedicalRiskFactor|null $riskFactor = null;
	protected MedicalTherapy|null $secondaryPrevention = null;
	protected MedicalSignOrSymptom|null $signOrSymptom = null;
	protected MedicalConditionStage|null $stage = null;
	protected EventStatusType|MedicalStudyStatus|string|null $status = null;
	protected MedicalTest|null $typicalTest = null;
	protected MedicalCode_647e16ffdc7c6|MedicalCode_647e16ffdc7c9|MedicalCode_647e16ffdc7ca|null $code = null;
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
		return __("Any complaint sensed and expressed by the patient (therefore defined as subjective)  like stomachache, lower-back pain, or fatigue.", 'jsonld-for-wordpress');
	}
}