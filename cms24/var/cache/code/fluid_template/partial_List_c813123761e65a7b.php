<?php
class partial_List_c813123761e65a7b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '<div v-show="loaded" v-if="mode == \'list\'" class="mask-list" style="display: none;">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'List/Header',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    <div class="mask-elements">
        <div class="mask-elements__column mask-elements__column--elements">
            <div class="mask-elements__header">
                <div class="mask-elements__header-icon-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'mimetypes-x-content-text',
'size' => $renderingContext->getVariableProvider()->getByPath('iconSize'),
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
                    <div class="mask-elements__header-icon-label">
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
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.all.contentelements',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '
                    </div>
                </div>
                <div class="form-control-wrap mask-elements__header-search">
                    <div class="form-control-holder">
                        <div class="form-control-icon">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'apps-toolbar-menu-search',
'size' => 'small',
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
                        </div>
                        <div class="form-control-clearable form-control-clearable-wrapper">
                            <input class="form-control" v-model="searchString" placeholder="';
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
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.search',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '" aria-label="';
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
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.search_content_elements',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '" autocomplete="off" spellcheck="off" autocapitalize="none"/>
                            <button v-show="searchString !== \'\'" @click="searchString = \'\'" class="close" type="button" tabindex="-1">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-close',
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
                            </button>
                        </div>
                    </div>
                </div>
                <div v-if="missingFilesOrFolders.missing" @click="showMissingFilesOrFolder" class="mask-elements__missing btn btn-warning"><i class="fa fa-warning"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.all.missingFilesOrFolders',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '</div>
                <div @click="openNew" class="btn btn-success"><i class="fa fa-plus"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.all.create_content_element',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output0 .= '</div>
            </div>
            <div class="mask-elements__table-wrap">
                <table class="table table-hover mask-elements__table">
                    <tr v-for="item in filteredElements" :class="{\'has-warning\': !item.templateExists, \'disabled\': item.hidden}">
                        <td>
                            <div class="mask-elements__element-name" @click="openEdit(\'tt_content\', item)" :title="item.label">
                                <div v-html="item.iconMarkup" class="mask-elements__element-name-icon" ></div><span class="mask-elements__element-name-label"><span v-if="item.translatedLabel != \'\'">';

$output0 .= '{{ item.translatedLabel }}';

$output0 .= '</span><span v-else>';

$output0 .= '{{ item.label }}';

$output0 .= '</span><br><code>[';

$output0 .= '{{ item.key }}';

$output0 .= ']</code></span>
                            </div>
                        </td>
                        <td>
                            <div class="mask-elements__description"><span v-if="item.translatedDescription != \'\'">';

$output0 .= '{{ item.translatedDescription }}';

$output0 .= '</span><span v-else>';

$output0 .= '{{ item.description }}';

$output0 .= '</span></div>
                        </td>
                        <td class="mask-elements__count"><span :title="language.usage">';

$output0 .= '{{ item.count }}';

$output0 .= '</span></td>
                        <td class="mask-elements__buttons">
                            <button-bar
                                    v-if="loaded"
                                    @toggle="loadElements"
                                    :element="item"
                                    :icons="icons"
                                    :show-messages="showMessages"
                                    :open-edit="openEdit"
                                    :open-delete-dialog="openDeleteDialog"
                                    :language="language"
                                    table="tt_content"
                            ></button-bar>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="mask-elements__column mask-elements__column--templates">
            <div class="mask-elements__header" v-if="Object.keys(features).length">
                <div class="mask-elements__header-icon-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$arguments19 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-cog-alt',
'size' => $renderingContext->getVariableProvider()->getByPath('iconSize'),
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
                    <div class="mask-elements__header-icon-label">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.all.features',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output0 .= '
                    </div>
                </div>
            </div>
            <div class="mask-list__short-list" v-if="Object.keys(features).length">
                <ul>
                    <li v-for="feature in features">
                        <i class="fa fa-lightbulb-o"></i>
                        &nbsp;<a :href="feature.documentation" class="text-primary" target="_blank">';

$output0 .= '{{ feature.title }}';

$output0 .= '</a>:
                        <span v-if="feature.state">enabled</span>
                        <span v-if="!feature.state">disabled</span>
                    </li>
                </ul>
            </div>

            <div class="mask-elements__header">
                <div class="mask-elements__header-icon-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$arguments23 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'mimetypes-x-backend_layout',
'size' => $renderingContext->getVariableProvider()->getByPath('iconSize'),
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
                    <div class="mask-elements__header-icon-label">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$arguments25 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.all.pagetemplates',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output0 .= '
                    </div>
                </div>
            </div>
            <div class="mask-elements__table-wrap">
                <table class="table table-hover mask-elements__table">
                    <tr v-for="(item, key) in backendLayouts">
                        <td>
                            <div class="mask-elements__element-name" @click="openEdit(\'pages\', item)" :title="item.title">
                                <img v-if="item.icon" :src="item.icon" class="mask-elements__element-name-icon" width="32"/>
                                <div v-else class="mask-elements__element-name-icon">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$arguments27 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'module-templates',
'size' => $renderingContext->getVariableProvider()->getByPath('iconSize'),
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '
                                </div>
                                </img><span class="mask-elements__element-name-label">';

$output0 .= '{{ item.title }}';

$output0 .= '<br><code>[';

$output0 .= '{{ item.key }}';

$output0 .= ']</code></span>
                            </div>
                        </td>
                        <td>
                            <div class="mask-elements__description" v-if="item.description">';

$output0 .= '{{ item.description }}';

$output0 .= '</div>
                        </td>
                        <td>
                            <button-bar
                                    v-if="loaded"
                                    :element="item"
                                    :icons="icons"
                                    :show-messages="showMessages"
                                    :open-edit="openEdit"
                                    :open-delete-dialog="openDeleteDialog"
                                    :language="language"
                                    table="pages"
                            ></button-bar>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};

$arguments29 = [
'section' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'List/Footer',
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '
</div>

<div v-show="loaded" v-if="mode == \'setup\'" class="mask-list" style="display: none;">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$arguments31 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'List/Header',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '
    <div class="mask-setup-incomplete">
        <div class="mask-setup-incomplete__content">
            <div class="mask-setup-incomplete__text">
                <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$arguments33 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.setup_incomplete',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output0 .= '</h1>
                <p>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$arguments37 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.setup_incomplete.text',
];
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);
};

$arguments35 = [
'value' => NULL,
];

$output0 .= isset($arguments35['value']) ? $arguments35['value'] : $renderChildrenClosure36();

$output0 .= '</p>
            </div>
        </div>
        <form class="form-horizontal mask-setup-incomplete__form">
            <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return NULL;
};

$arguments39 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.auto_configuration',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output0 .= '</h2>
            <p>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.auto_configuration.text',
];
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);
};

$arguments41 = [
'value' => NULL,
];

$output0 .= isset($arguments41['value']) ? $arguments41['value'] : $renderChildrenClosure42();

$output0 .= '</p>
            <div class="form-group row">
                <label for="extension-key" class="col-sm-2 control-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.extension_key',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output0 .= ':</label>
                <div class="col-sm-8">
                    <input v-model="setupConfiguration.extension" id="extension-key" class="form-control">
                </div>
                <div class="col-sm-2 d-flex align-items-center"><span class="text-danger" v-if="setupConfiguration.error">';

$output0 .= '{{ setupConfiguration.error }}';

$output0 .= '</span></div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2 control-label"><b>Loader <a href="https://docs.typo3.org/p/mask/mask/main/en-us/API/Loader.html#available-loaders" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$arguments47 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.learn_about_loaders',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output0 .= '" target="_blank"><i class="fa fa-info-circle"></i></a> :</b></div>
                <div class="col-sm-10">
                    <div>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return NULL;
};

$arguments49 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.loader.description',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output0 .= '</div>
                    <div>
                        <label for="json" class="control-label">JsonLoader</label>
                        <input v-model="setupConfiguration.loader" id="json" type="radio" name="loader" value="json"/>
                        <code>[json]</code>
                    </div>
                    <div>
                        <label for="json-split" class="control-label">JsonSplitLoader</label>
                        <input v-model="setupConfiguration.loader" id="json-split" type="radio" name="loader" value="json-split"/>
                        <code>[json-split]</code>
                    </div>
                </div>
            </div>
            <input @click.prevent="submitAutoConfiguration" type="submit" class="btn btn-primary" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};

$arguments51 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:mask/Resources/Private/Language/locallang.xlf:tx_mask.submit',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output0 .= '">
        </form>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'section' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'List/Footer',
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output0 .= '
</div>
';

    return $output0;
}

}

#