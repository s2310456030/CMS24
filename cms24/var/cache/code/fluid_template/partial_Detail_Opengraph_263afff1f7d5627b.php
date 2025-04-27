<?php
class partial_Detail_Opengraph_263afff1f7d5627b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
  'rx' => 
  array (
    0 => 'Reelworx\\RxShariff\\ViewHelper',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'name' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'property' => 'og:title',
'content' => $renderingContext->getVariableProvider()->getByPath('newsItem.alternativeTitle'),
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);
},
'__else' => function() use ($renderingContext) {
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'name' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'property' => 'og:title',
'content' => $renderingContext->getVariableProvider()->getByPath('newsItem.title'),
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'name' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'property' => 'og:type',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.type'),
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$array12 = [
'0' => 1,
];

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'name' => '',
'forceAbsoluteUrl' => false,
'replace' => false,
'property' => 'og:url',
'content' => '',
'useCurrentDomain' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression13(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)),
    $renderingContext
),
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'name' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'property' => 'og:site_name',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.site_name'),
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array17 = [
'0' => $renderingContext->getVariableProvider()->getByPath('newsItem.firstPreview'),
];

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments16 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output19 = '';

$output19 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'name' => 'ogImage',
'value' => $renderingContext->getVariableProvider()->getByPath('newsItem.firstPreview'),
];
$renderChildrenClosure21 = ($arguments20['value'] !== null) ? function() use ($arguments20) { return $arguments20['value']; } : $renderChildrenClosure21;
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output19 .= '
	';
return $output19;
},
'__elseIf' => [
    0 => [
        'condition' => function() use ($renderingContext) {

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('newsItem.falMedia'),
];

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output24 = '';

$output24 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$arguments25 = [
'name' => 'ogImage',
'value' => $renderingContext->getVariableProvider()->getByPath('newsItem.falMedia.0'),
];
$renderChildrenClosure26 = ($arguments25['value'] !== null) ? function() use ($arguments25) { return $arguments25['value']; } : $renderChildrenClosure26;
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output24 .= '
	';
return $output24;
}
    ],
],
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, static fn() => '', $renderingContext)
;

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('ogImage'),
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments27 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output30 = '';

$output30 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$array35 = [
'0' => 1,
];

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments33 = [
'image' => NULL,
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxHeight' => NULL,
'absolute' => false,
'src' => $renderingContext->getVariableProvider()->getByPath('ogImage.uid'),
'treatIdAsReference' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression36(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
),
'maxWidth' => 1200,
];

$arguments31 = [
'name' => 'ogImagePath',
'value' => TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext),
];
$renderChildrenClosure32 = ($arguments31['value'] !== null) ? function() use ($arguments31) { return $arguments31['value']; } : $renderChildrenClosure32;
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output30 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$array39 = [
'0' => 1,
];

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments37 = [
'name' => '',
'useCurrentDomain' => false,
'replace' => false,
'property' => 'og:image',
'content' => $renderingContext->getVariableProvider()->getByPath('ogImagePath'),
'forceAbsoluteUrl' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression40(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)),
    $renderingContext
),
];

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output30 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ImageSizeViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'property' => 'width',
'image' => $renderingContext->getVariableProvider()->getByPath('ogImagePath'),
];

$arguments41 = [
'name' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'property' => 'og:image:width',
'content' => GeorgRinger\News\ViewHelpers\ImageSizeViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext),
];

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output30 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ImageSizeViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$arguments47 = [
'property' => 'height',
'image' => $renderingContext->getVariableProvider()->getByPath('ogImagePath'),
];

$arguments45 = [
'name' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'property' => 'og:image:height',
'content' => GeorgRinger\News\ViewHelpers\ImageSizeViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext),
];

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output30 .= '
';
return $output30;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, static fn() => '', $renderingContext)
;

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array50 = [
'0' => $renderingContext->getVariableProvider()->getByPath('newsItem.description'),
];

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments49 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression51(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output52 = '';

$output52 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'property' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'name' => 'description',
'content' => $renderingContext->getVariableProvider()->getByPath('newsItem.description'),
];

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output52 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};

$arguments55 = [
'name' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'property' => 'og:description',
'content' => $renderingContext->getVariableProvider()->getByPath('newsItem.description'),
];

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output52 .= '
	';
return $output52;
},
'__else' => function() use ($renderingContext) {
$output57 = '';

$output57 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser');
};

$arguments60 = [
'value' => NULL,
'allowedTags' => NULL,
];
$renderChildrenClosure61 = ($arguments60['value'] !== null) ? function() use ($arguments60) { return $arguments60['value']; } : $renderChildrenClosure61;
$arguments58 = [
'property' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'name' => 'description',
'content' => TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext),
];

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= '
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser');
};

$arguments64 = [
'value' => NULL,
'allowedTags' => NULL,
];
$renderChildrenClosure65 = ($arguments64['value'] !== null) ? function() use ($arguments64) { return $arguments64['value']; } : $renderChildrenClosure65;
$arguments62 = [
'name' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'property' => 'og:description',
'content' => TYPO3\CMS\Fluid\ViewHelpers\Format\StripTagsViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext),
];

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output57 .= '
	';
return $output57;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, static fn() => '', $renderingContext)
;

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
return NULL;
};

$arguments66 = [
'property' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'name' => 'keywords',
'content' => $renderingContext->getVariableProvider()->getByPath('newsItem.keywords'),
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return NULL;
};

$arguments68 = [
'name' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'property' => 'fb:admins',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.admins'),
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return NULL;
};

$arguments70 = [
'name' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'property' => 'og:locale',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.locale'),
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array73 = [
'0' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.site'),
];

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments72 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression74(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output75 = '';

$output75 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return NULL;
};

$arguments76 = [
'property' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'name' => 'twitter:card',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.card'),
];

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output75 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
return NULL;
};

$arguments78 = [
'property' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'name' => 'twitter:site',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.site'),
];

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output75 .= '
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\MetaTagViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
return NULL;
};

$arguments80 = [
'property' => '',
'useCurrentDomain' => false,
'forceAbsoluteUrl' => false,
'replace' => false,
'name' => 'twitter:creator',
'content' => $renderingContext->getVariableProvider()->getByPath('settings.opengraph.twitter.creator'),
];

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\MetaTagViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output75 .= '
';
return $output75;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#