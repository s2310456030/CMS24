<?php
class partial_Edit_1d9e77d33b21a4db extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '<div v-show="loaded" style="display: none;" class="mask-edit">
    <div class="mask-sidebar">
        <div class="mask-sidebar__background">
            <div class="mask-sidebar__inner">
                <div class="mask-sidebar__toolbar">
                    <div class="btn-toolbar">
                        <button @click="closeEdit" class="btn btn-default btn-sm"><span v-html="icons.close"></span> ';
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
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.close',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</button>
                        <button class="btn btn-default btn-sm" @click="save"><span v-show="!saving" v-html="icons.save"></span><span v-show="saving" v-html="icons.spinner"></span> ';
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
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.content.save',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</button>
                    </div>
                </div>
                <div class="mask-sidebar__toggle-wrap">
                    <div v-if="type != \'pages\'" class="mask-sidebar__toggle" :class="';

$output0 .= '{active: metaVisible, \'has-error\': hasElementErrors}';

$output0 .= '" @click="sidebar = \'meta\'"><i class="fa fa-cog"></i> ';
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
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.element.settings',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '</div>
                    <div class="mask-sidebar__toggle" :class="';

$output0 .= '{active: fieldsVisible, \'has-error\': hasFieldErrors}';

$output0 .= '" @click="sidebar = \'fields\'"><i class="fa fa-reorder"></i> ';
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
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.fields',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '</div>
                </div>
                <div class="mask-sidebar__content">
                    <div v-show="fieldsVisible">
                        <field-group
                                v-for="group in groups"
                                :key="group.label"
                                :group="group.name"
                                :label="group.label"
                                :on-move="onMove"
                                :handle-clone="handleClone"
                                :add-field="addField"
                                :field-types="fieldTypes"
                                :typo3-version="global.typo3Version"
                                :optional-extension-status="optionalExtensionStatus"
                        ></field-group>
                    </div>
                    <div v-show="metaVisible">
                        <div v-if="type == \'tt_content\'">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$array11 = [
'storage' => $renderingContext->getVariableProvider()->getByPath('storage'),
];

$arguments9 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Element',
'arguments' => $array11,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
                        </div>
                        <div v-else>';

$output0 .= '{{ element.title }}';

$output0 .= '</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mask-fields">
        <div v-if="type == \'tt_content\'" class="mask-fields__label">
            <span v-if="element.translatedLabel">';

$output0 .= '{{ element.translatedLabel }}';

$output0 .= '</span>
            <span v-else>';

$output0 .= '{{ element.label }}';

$output0 .= '</span>
        </div>
        <div v-else class="mask-fields__label t3js-formengine-label form-label">';

$output0 .= '{{ element.title }}';

$output0 .= '</div>
        <div class="mask-field-list" :class="{\'mask-field-list--empty\': !fields.length}">
            <nested-draggable
                :depth="0"
                :index="0"
                :fields="fields"
                :icons="icons"
                :global="global"
                :move="onMove"
                :sort="onSort"
                :field-has-error="fieldHasError"
                :validate-key="validateKey"
                :language="language"
                :load-multi-use="loadMultiUse"
                :multi-use-elements="multiUseElements"
                :existing-field-key-fields="fieldErrors.existingFieldKeyFields"
                :key-without-mask="keyWithoutMask"
                :is-root="isRoot"
            >
            </nested-draggable>
        </div>
    </div>
    <div class="form-group mask-field-form">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'section' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Form',
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
    </div>
</div>
';

    return $output0;
}

}

#