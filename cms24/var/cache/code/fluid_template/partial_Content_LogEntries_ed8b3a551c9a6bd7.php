<?php
class partial_Content_LogEntries_ed8b3a551c9a6bd7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'belog' => 
  array (
    0 => 'TYPO3\\CMS\\Belog\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('groupedLogEntries');
};

$arguments3 = [
'subject' => NULL,
];
$renderChildrenClosure4 = ($arguments3['subject'] !== null) ? function() use ($arguments3) { return $arguments3['subject']; } : $renderChildrenClosure4;
$array2 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext),
'1' => ' > 0',
];

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output6 = '';

$output6 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
$output12 = '';

$output12 .= '
                <h3>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output15 = '';

$output15 .= '@';

$output15 .= $renderingContext->getVariableProvider()->getByPath('dayTimestamp');
return $output15;
};

$arguments13 = [
'date' => NULL,
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
'format' => $renderingContext->getVariableProvider()->getByPath('settings.dateFormat'),
];
$renderChildrenClosure14 = ($arguments13['date'] !== null) ? function() use ($arguments13) { return $arguments13['date']; } : $renderChildrenClosure14;
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output12 .= '
                </h3>

                <div class="table-fit">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'chLog_l_time',
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output12 .= '</th>
                                <th colspan="2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'chLog_l_user',
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output12 .= '</th>
                                <th>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array21 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageId'),
];

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments20 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression22(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output23 = '';

$output23 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'chLog_l_table',
];

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output23 .= '
                                        ';
return $output23;
},
'__else' => function() use ($renderingContext) {
$output26 = '';

$output26 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$arguments27 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'chLog_l_level',
];

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output26 .= '
                                        ';
return $output26;
},
];

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, static fn() => '', $renderingContext)
;

$output12 .= '
                                </th>
                                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};

$arguments29 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'chLog_l_channel',
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output12 .= '</th>
                                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$arguments31 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'chLog_l_details',
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output12 .= '</th>
                                <th class="col-control"></th>
                            </tr>
                        </thead>
                        <tbody>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
$output35 = '';

$output35 .= '
                                <tr>
                                    <td class="col-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array37 = [
'0' => $renderingContext->getVariableProvider()->getByPath('logItem.errorIconClass'),
];

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments36 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression38(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output39 = '';

$output39 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => $renderingContext->getVariableProvider()->getByPath('logItem.errorIconClass'),
];

$output39 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
                                        ';
return $output39;
},
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, static fn() => '', $renderingContext)
;

$output35 .= '
                                    </td>
                                    <td class="col-time">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
$output44 = '';

$output44 .= '@';

$output44 .= $renderingContext->getVariableProvider()->getByPath('logItem.tstamp');
return $output44;
};

$arguments42 = [
'date' => NULL,
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
'format' => 'H:i:s',
];
$renderChildrenClosure43 = ($arguments42['date'] !== null) ? function() use ($arguments42) { return $arguments42['date']; } : $renderChildrenClosure43;
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output35 .= '
                                    </td>
                                    <td class="col-avatar">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$arguments47 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid'),
];

$array46 = [
'0' => TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext),
];

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments45 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression49(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output50 = '';

$output50 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};

$array53 = [
'0' => 'true',
];

$expression54 = function($context) {return TRUE;};

$arguments51 = [
'size' => 32,
'backendUser' => $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid'),
'showIcon' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression54(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)),
    $renderingContext
),
];

$output50 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                                        ';
return $output50;
},
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, static fn() => '', $renderingContext)
;

$output35 .= '
                                    </td>
                                    <td>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid'),
];

$array56 = [
'0' => TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext),
];

$expression59 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments55 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression59(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output60 = '';

$output60 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return NULL;
};

$arguments61 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid'),
];

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output60 .= '
                                            ';
return $output60;
},
'__else' => function() use ($renderingContext) {
$output63 = '';

$output63 .= '[';

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid')]);

$output63 .= ']';
return $output63;
},
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, static fn() => '', $renderingContext)
;

$output35 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array65 = [
'0' => $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser'),
];

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments64 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression66(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output67 = '';

$output67 .= '
                                            (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return NULL;
};

$arguments68 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'viaUser',
];

$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output67 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};

$arguments72 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser'),
];

$array71 = [
'0' => TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext),
];

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments70 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression74(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output75 = '';

$output75 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return NULL;
};

$arguments76 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser'),
];

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output75 .= '
                                                ';
return $output75;
},
'__else' => function() use ($renderingContext) {
$output78 = '';

$output78 .= '[';

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser')]);

$output78 .= ']';
return $output78;
},
];

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, static fn() => '', $renderingContext)
;

$output67 .= '
                                            )
                                        ';
return $output67;
},
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, static fn() => '', $renderingContext)
;

$output35 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array80 = [
'0' => $renderingContext->getVariableProvider()->getByPath('workspaces'),
];

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments79 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression81(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output82 = '';

$output82 .= '
                                            <br>
                                            <span class="text-body-secondary">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return NULL;
};

$arguments85 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid'),
];

$array84 = [
'0' => TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext),
];

$expression87 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments83 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression87(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
return NULL;
};

$arguments88 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid'),
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);
},
'__else' => function() use ($renderingContext) {
$output90 = '';

$output90 .= '[';

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid')]);

$output90 .= ']';
return $output90;
},
];

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, static fn() => '', $renderingContext)
;

$output82 .= '
                                            </span>
                                        ';
return $output82;
},
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, static fn() => '', $renderingContext)
;

$output35 .= '
                                    </td>
                                    <td>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array92 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageId'),
];

$expression93 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments91 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression93(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output94 = '';

$output94 .= '
                                                ';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.tableName')]);

$output94 .= '
                                            ';
return $output94;
},
'__else' => function() use ($renderingContext) {
$output95 = '';

$output95 .= '
                                                ';

$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.level')]);

$output95 .= '
                                            ';
return $output95;
},
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, static fn() => '', $renderingContext)
;

$output35 .= '
                                    </td>
                                    <td>
                                        ';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.channel')]);

$output35 .= '
                                    </td>
                                    <td class="col-word-break">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
return NULL;
};

$arguments96 = [
'logEntry' => $renderingContext->getVariableProvider()->getByPath('logItem'),
];

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext)]);

$output35 .= '
                                    </td>
                                    <td class="col-control">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array99 = [
'0' => $renderingContext->getVariableProvider()->getByPath('logItem.error'),
'1' => ' == 1',
];

$expression100 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments98 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression100(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output101 = '';

$output101 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure103 = function() use ($renderingContext) {
$output104 = '';

$output104 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return NULL;
};

$arguments105 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-delete',
'size' => 'small',
];

$output104 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return NULL;
};

$arguments107 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'actions.deleteWarnings',
];

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output104 .= '
                                            ';
return $output104;
};

$arguments102 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'formaction' => NULL,
'formenctype' => NULL,
'formmethod' => NULL,
'formnovalidate' => NULL,
'formtarget' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'class' => 'btn btn-sm btn-warning',
'form' => 'form-delete-message',
'type' => 'submit',
'name' => 'errorUid',
'value' => $renderingContext->getVariableProvider()->getByPath('logItem.uid'),
];

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
                                        ';
return $output101;
},
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, static fn() => '', $renderingContext)
;

$output35 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array110 = [
'0' => $renderingContext->getVariableProvider()->getByPath('logItem.error'),
'1' => ' == 2',
];

$expression111 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};

$arguments109 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression111(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output112 = '';

$output112 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
$output115 = '';

$output115 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure117 = function() use ($renderingContext) {
return NULL;
};

$arguments116 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-delete',
'size' => 'small',
];

$output115 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
return NULL;
};

$arguments118 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'actions.delete',
];

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext)]);

$output115 .= '
                                            ';
return $output115;
};

$arguments113 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'formaction' => NULL,
'formenctype' => NULL,
'formmethod' => NULL,
'formnovalidate' => NULL,
'formtarget' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'class' => 'btn btn-sm btn-danger',
'form' => 'form-delete-message',
'type' => 'submit',
'name' => 'errorUid',
'value' => $renderingContext->getVariableProvider()->getByPath('logItem.uid'),
];

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
                                        ';
return $output112;
},
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, static fn() => '', $renderingContext)
;

$output35 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array121 = [
'0' => $renderingContext->getVariableProvider()->getByPath('logItem.logData.history'),
];

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments120 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression122(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output123 = '';

$output123 .= '
                                            <a class="btn btn-sm btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure125 = function() use ($renderingContext) {
return NULL;
};

$array126 = [
'historyEntry' => $renderingContext->getVariableProvider()->getByPath('logItem.logData.history'),
];

$arguments124 = [
'query' => NULL,
'currentUrlParameterName' => NULL,
'route' => 'record_history',
'arguments' => $array126,
];

$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext)]);

$output123 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
return NULL;
};

$arguments127 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'showHistory',
];

$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output123 .= '">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
return NULL;
};

$arguments129 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-document-history-open',
];

$output123 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output123 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
return NULL;
};

$arguments131 = [
'key' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'id' => 'showHistory',
];

$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output123 .= '
                                            </a>
                                        ';
return $output123;
},
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, static fn() => '', $renderingContext)
;

$output35 .= '
                                    </td>
                                </tr>
                            ';
return $output35;
};

$arguments33 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('day'),
'as' => 'logItem',
];

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output12 .= '
                        </tbody>
                    </table>
                </div>
            ';
return $output12;
};

$arguments10 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('pidEntry'),
'as' => 'day',
'key' => 'dayTimestamp',
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
        ';
return $output9;
};

$arguments7 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('groupedLogEntries'),
'as' => 'pidEntry',
'key' => 'pid',
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure134 = function() use ($renderingContext) {
return NULL;
};

$arguments133 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'arguments' => [],
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'object' => NULL,
'pageType' => 0,
'noCache' => false,
'section' => '',
'format' => '',
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'fieldNamePrefix' => NULL,
'actionUri' => NULL,
'objectName' => NULL,
'hiddenFieldClassName' => NULL,
'requestToken' => NULL,
'signingType' => NULL,
'enctype' => NULL,
'name' => NULL,
'onreset' => NULL,
'onsubmit' => NULL,
'target' => NULL,
'novalidate' => NULL,
'dir' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'action' => 'deleteMessage',
'id' => 'form-delete-message',
'method' => 'post',
'class' => 'hidden',
];

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output6 .= '
    ';
return $output6;
},
'__else' => function() use ($renderingContext) {
$output135 = '';

$output135 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure137 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure139 = function() use ($renderingContext) {
return NULL;
};

$arguments138 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:info.noRecords.message',
];

$arguments136 = [
'title' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext)]),
'state' => -2,
];
$renderChildrenClosure137 = ($arguments136['message'] !== null) ? function() use ($arguments136) { return $arguments136['message']; } : $renderChildrenClosure137;
$output135 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
    ';
return $output135;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '


';

    return $output0;
}

}

#