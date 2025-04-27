<?php
class partial_Inspector_CountrySelectEditor_89fccf3092f6c6e6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
<div class="form-editor">
    <div class="t3-form-control-group form-group">
        <label data-random-id data-random-id-attribute="for" data-random-id-number="1"><span data-template-property="label"></span></label>
        <div class="formengine-field-item">
            <div class="form-control-wrap">
                <div class="t3-form-controls" data-identifier="inspectorEditorControlsWrapper">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CountrySelectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'template-property' => 'selectOptions',
'random-id' => '',
'random-id-attribute' => 'id',
'random-id-number' => 1,
];

$array4 = [
'0' => 'multiple',
];

$expression5 = function($context) {return "multiple";};

$array6 = [
'0' => 1,
];

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'additionalAttributes' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'excludeCountries' => [],
'onlyCountries' => [],
'optionLabelField' => 'localizedName',
'errorClass' => 'f3-form-error',
'prependOptionLabel' => NULL,
'prependOptionValue' => NULL,
'required' => false,
'prioritizedCountries' => [],
'alternativeLanguage' => NULL,
'data' => $array3,
'class' => 'form-select',
'multiple' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
'sortByOptionLabel' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression7(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)),
    $renderingContext
),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CountrySelectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>
    </div>
</div>

';

    return $output0;
}

}

#