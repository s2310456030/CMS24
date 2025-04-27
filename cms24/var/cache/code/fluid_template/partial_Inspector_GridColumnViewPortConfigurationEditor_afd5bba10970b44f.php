<?php
class partial_Inspector_GridColumnViewPortConfigurationEditor_afd5bba10970b44f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
    return '
<div class="form-editor">
    <div class="t3-form-control-group form-group" data-identifier="editorWrapper">
        <label data-random-id data-random-id-attribute="for" data-random-id-number="1"><span data-template-property="label"></span></label>
        <div class="formengine-field-item">
            <div class="form-control-wrap">
                <div class="t3-form-controls btn-group d-flex flex-wrap" data-identifier="inspectorEditorControlsWrapper">
                    <button type="button" class="btn btn-default" data-identifier="viewportButton"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="t3-form-control-group form-group" data-template-property="numbersOfColumnsToUse">
        <label data-random-id data-random-id-attribute="for" data-random-id-number="1"><span data-template-property="numbersOfColumnsToUse-label"></span></label>
        <div class="formengine-field-item">
            <div data-template-property="numbersOfColumnsToUse-fieldExplanationText" class="form-description"></div>
            <div class="form-control-wrap">
                <div class="t3-form-controls" data-identifier="numbersOfColumnsToUse-inspectorEditorControlsWrapper">
                    <input data-random-id data-random-id-attribute="id" data-random-id-number="1" type="number" value="" data-template-property="numbersOfColumnsToUse-propertyPath" class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>

';
}

}

#