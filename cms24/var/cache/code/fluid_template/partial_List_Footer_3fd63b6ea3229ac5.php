<?php
class partial_List_Footer_3fd63b6ea3229ac5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '<footer class="mask-footer">
    <div class="mask-footer__column mask-footer__column--left">
        <div class="mask-footer__item mask-footer__item--first">
            <div class="mask-footer__version">
                <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'extensionName' => NULL,
'absolute' => false,
'path' => 'EXT:mask/Resources/Public/Images/legacy-icon.gif',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '" alt="Mask legacy icon" title="&#128489; Have fun with Mask!"/>v';

$output0 .= '{{ version }}';

$output0 .= '
            </div>
        </div>
        <div class="mask-footer__separator"></div>
        <div class="mask-footer__item">
            <a href="https://github.com/gernott/mask/issues/" target="_blank" title="Create an issue on Github"><i class="fa fa-github"></i> Report a bug</a>
        </div>
        <div class="mask-footer__separator"></div>
        <div class="mask-footer__item">
            <a href="https://typo3.org/community/meet/chat-slack/" target="_blank" title="Go to typo3.org slack info page" ><i class="fa fa-slack"></i> Get help on slack <code>#ext-mask</code></a>
        </div>
        <div class="mask-footer__separator"></div>
        <div class="mask-footer__item">
            <a href="https://mask.webprofil.at/featurelist/overview/" target="_blank" title="Go to official Mask website feature overview"><i class="fa fa-lightbulb-o"></i> Suggest a new feature</a>
        </div>
        <div class="mask-footer__separator"></div>
        <div class="mask-footer__item">
            <a href="https://github.com/sponsors/nhovratov" class="btn btn-mask" target="_blank" title="Sponsor me if you like Mask"><i class="fa fa-dollar"></i> Become a sponsor of mask</a>
        </div>
    </div>
    <div class="mask-footer__separator"></div>
    <div class="mask-footer__column mask-footer__column--right">
        <div class="mask-footer__item">
            <a href="https://tvconverter.webprofil.at/" target="_blank" class="templa" title="Go to https://tvconverter.webprofil.at/">
                <div class="templa__wrap">
                    <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'extensionName' => NULL,
'absolute' => false,
'path' => 'EXT:mask/Resources/Public/Images/Logo_TVconverter.png',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '" width="120" alt="TemplaVoila to Mask" class="templa__image img-fluid"/>
                    <div>
                        <div class="templa__header">TemplaVoila to Mask</div>
                        <p class="templa__text">Convert the entire content of your old project to Mask.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="mask-footer__separator"></div>
        <div class="mask-footer__item mask-footer__item--last">
            <div>
                developed with <i class="fa fa-heart mask-heart"></i> by <a href="https://www.webprofil.at/" target="_blank" title="Go to https://www.webprofil.at/">WEBprofil</a> & <a href="https://www.nikita-hovratov.de" target="_blank" title="Go to https://www.nikita-hovratov.de">Nikita Hovratov</a>
            </div>
        </div>
    </div>
</footer>
';

    return $output0;
}

}

#