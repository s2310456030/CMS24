<?php
class partial_Element_74f8d95e7ecc72b6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '<div :class="[\'form-group\', {\'has-error\': fieldErrors.elementKey || !fieldErrors.elementKeyAvailable}]">
    <label class="t3js-formengine-label form-label" for="meta_key">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.all.fieldkey',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '*
    </label>
    <div class="t3js-formengine-field-item">
        <span class="formengine-field-item-description text-muted">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.all.fieldkey.description',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</span>
        <div class="form-control-wrap">
            <element-key :element="element" :mode="mode"></element-key>
        </div>
    </div>
</div>

<div :class="[\'form-group\', ';

$output0 .= '{\'has-error\': fieldErrors.elementLabel}';

$output0 .= ']">
    <label class="t3js-formengine-label form-label" for="meta_label">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.content.title',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '*
    </label>
    <div class="t3js-formengine-field-item">
        <div class="form-control-wrap">
            <input
                v-model="element.label"
                id="meta_label"
                class="form-control"
                required="required"
            />
        </div>
    </div>
</div>

<div class="form-group">
    <label class="t3js-formengine-label form-label" for="meta_shortlabel">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.all.shorttitle',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '
    </label>
    <div class="t3js-formengine-field-item">
        <div class="form-control-wrap">
            <input
                v-model="element.shortLabel"
                id="meta_shortlabel"
                class="form-control"
                required="required"
            />
        </div>
    </div>
</div>

<div class="form-group">
    <label class="t3js-formengine-label form-label" for="meta_description">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.all.description',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '
    </label>
    <div class="t3js-formengine-field-item">
        <div class="form-control-wrap">
            <textarea
                v-model="element.description"
                id="meta_description"
                class="form-control"
                required="required"
                rows="4"
            >
            </textarea>
        </div>
    </div>
</div>

<div class="row mb-1">
    <font-icon-picker :element="element" :label="language.icon" :fa-icons="faIcons" property="icon" ref="iconPicker"></font-icon-picker>
    <element-color-picker :element="element" :label="language.color" property="color"></element-color-picker>
</div>
<div v-if="global.typo3Version > 10" class="row mb-1">
    <font-icon-picker :element="element" :label="language.iconOverlay" :fa-icons="faIcons" property="iconOverlay" ref="iconOverlayPicker"></font-icon-picker>
    <element-color-picker :element="element" :label="language.colorOverlay" property="colorOverlay"></element-color-picker>
</div>
<div class="checkbox checkbox-type-toggle form-check form-switch">
    <input id="elementSaveAndClose" class="checkbox-input form-check-input" v-model="element.saveAndClose" type="checkbox" :true-value="1" :false-value="0">
    <label class="checkbox-label form-check-label" for="elementSaveAndClose">
        <span class="checkbox-label-text form-check-label-text">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.saveAndClose',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '</span>
    </label>
</div>
';

    return $output0;
}

}

#