<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\BioChemEntities;

use JsonLDForWP\Plugin\Classes\Entities\Things\BioChemEntity;
use JsonLDForWP\Plugin\Classes\Entities\Things\MedicalEntities\MedicalCondition;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\StructuredValues\PropertyValue;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\DefinedTerm;
use JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Grant;
use JsonLDForWP\Plugin\Classes\Entities\Things\BioChemEntities\Gene;
use JsonLDForWP\Plugin\Classes\Entities\Things\Taxon;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\TextObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWorks\MediaObjects\ImageObject;
use JsonLDForWP\Plugin\Classes\Entities\Things\CreativeWork;
use JsonLDForWP\Plugin\Classes\Entities\Things\Action;
use JsonLDForWP\Plugin\Classes\Entities\Things\Event;

/**
* @package JsonLDForWP
*/
class Protein extends BioChemEntity{
	protected string|null $hasBioPolymerSequence = null;
	protected MedicalCondition|PropertyValue|string|null $associatedDisease = null;
	protected BioChemEntity|null $bioChemInteraction = null;
	protected BioChemEntity|null $bioChemSimilarity = null;
	protected DefinedTerm|null $biologicalRole = null;
	protected Grant|null $funding = null;
	protected BioChemEntity|null $hasBioChemEntityPart = null;
	protected DefinedTerm|PropertyValue|string|null $hasMolecularFunction = null;
	protected PropertyValue|string|null $hasRepresentation = null;
	protected Gene|null $isEncodedByBioChemEntity = null;
	protected DefinedTerm|PropertyValue|string|null $isInvolvedInBiologicalProcess = null;
	protected DefinedTerm|PropertyValue|string|null $isLocatedInSubcellularLocation = null;
	protected BioChemEntity|null $isPartOfBioChemEntity = null;
	protected DefinedTerm|Taxon|string|null $taxonomicRange = null;
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
		return __("Protein is here used in its widest possible definition, as classes of amino acid based molecules. Amyloid-beta Protein in human (UniProt P05067), eukaryota (e.g. an OrthoDB group) or even a single molecule that one can point to are all of type :Protein. A protein can thus be a subclass of another protein, e.g. :Protein as a UniProt record can have multiple isoforms inside it which would also be :Protein. They can be imagined, synthetic, hypothetical or naturally occurring.", 'jsonld-for-wordpress');
	}
}