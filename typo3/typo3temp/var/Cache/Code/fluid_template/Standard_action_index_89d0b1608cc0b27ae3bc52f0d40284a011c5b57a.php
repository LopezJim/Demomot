<?php

class Standard_action_index_89d0b1608cc0b27ae3bc52f0d40284a011c5b57a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
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
));
}

/**
 * section Page
 */
public function section_fb06270f7c212baabc8749ffc36e49dc8f321548(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <span class="text-nowrap" title="';
$array1 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('page.titleAttribute', $array1), ENT_QUOTES);

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['table'] = NULL;
$arguments2['row'] = NULL;
$arguments2['size'] = 'small';
$arguments2['alternativeMarkupIdentifier'] = NULL;
$arguments2['table'] = 'pages';
$array4 = array (
);$arguments2['row'] = $renderingContext->getVariableProvider()->getByPath('page.record', $array4);

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);
$array5 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('page.title', $array5), ENT_QUOTES);

$output0 .= '<br />
    </span>
';

return $output0;
}
/**
 * section FormLine
 */
public function section_a479c5fabf5531581f0d03ced8ac36a55f3a5f1a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '
    <div class="form-section" id="form-line-';
$array7 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array7), ENT_QUOTES);

$output6 .= '">
        <div class="row">
            <div class="form-group col-xs-8">
                <label for="page_new_';
$array8 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array8), ENT_QUOTES);

$output6 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$output11 = '';
$array12 = array (
);
$output11 .= $renderingContext->getVariableProvider()->getByPath('line.llprefix', $array12);

$output11 .= 'wiz_newPages_page';
$arguments9['key'] = $output11;

$output6 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext), ENT_QUOTES);

$output6 .= ' ';
$array13 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.label', $array13), ENT_QUOTES);

$output6 .= ':
                </label>
                <div class="form-control-wrap">
                    <input class="form-control" type="text" id="page_new_';
$array14 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array14), ENT_QUOTES);

$output6 .= '" name="data[pages][NEW';
$array15 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array15), ENT_QUOTES);

$output6 .= '][title]" />
                </div>
            </div>
            <div class="form-group col-xs-4">
                <label for="page_new_select_';
$array16 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array16), ENT_QUOTES);

$output6 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type';

$output6 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext), ENT_QUOTES);

$output6 .= '
                </label>
                <div class="form-control-wrap">
                    <div class="input-group">
                        <div id="page_new_icon_';
$array19 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array19), ENT_QUOTES);

$output6 .= '" class="input-group-addon input-group-icon">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['table'] = NULL;
$arguments20['row'] = NULL;
$arguments20['size'] = 'small';
$arguments20['alternativeMarkupIdentifier'] = NULL;
$arguments20['table'] = 'pages';
// Rendering Array
$array22 = array();
$array22['id'] = 0;
$arguments20['row'] = $array22;

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output6 .= '
                        </div>
                        <select id="page_new_select_';
$array23 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array23), ENT_QUOTES);

$output6 .= '" class="form-control form-control-adapt t3js-wizardcrpages-select-doktype" name="data[pages][NEW';
$array24 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array24), ENT_QUOTES);

$output6 .= '][doktype]" data-target="#page_new_icon_';
$array25 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array25), ENT_QUOTES);

$output6 .= '">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
                                <optgroup label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['htmlEscape'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$array32 = array (
);$arguments30['key'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('group', $array32), ENT_QUOTES);

$output29 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext), ENT_QUOTES);

$output29 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                                        <option data-icon=\'';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['identifier'] = NULL;
$arguments37['size'] = 'small';
$arguments37['overlay'] = NULL;
$arguments37['state'] = 'default';
$arguments37['alternativeMarkupIdentifier'] = NULL;
$array39 = array (
);$arguments37['identifier'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.2', $array39), ENT_QUOTES);

$output36 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '\' value="';
$array40 = array (
);
$output36 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.1', $array40), ENT_QUOTES);

$output36 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['key'] = NULL;
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['htmlEscape'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$array43 = array (
);$arguments41['key'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.0', $array43), ENT_QUOTES);

$output36 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext), ENT_QUOTES);

$output36 .= '</option>
                                    ';
return $output36;
};
$arguments33 = array();
$arguments33['each'] = NULL;
$arguments33['as'] = NULL;
$arguments33['key'] = NULL;
$arguments33['reverse'] = false;
$arguments33['iteration'] = NULL;
$array35 = array (
);$arguments33['each'] = $renderingContext->getVariableProvider()->getByPath('typegroup', $array35);
$arguments33['as'] = 'type';

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output29 .= '
                                </optgroup>
                            ';
return $output29;
};
$arguments26 = array();
$arguments26['each'] = NULL;
$arguments26['as'] = NULL;
$arguments26['key'] = NULL;
$arguments26['reverse'] = false;
$arguments26['iteration'] = NULL;
$array28 = array (
);$arguments26['each'] = $renderingContext->getVariableProvider()->getByPath('line.typeselect', $array28);
$arguments26['as'] = 'typegroup';
$arguments26['key'] = 'group';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output6 .= '
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
';

return $output6;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output44 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['pageTitle'] = '';
$arguments45['loadExtJs'] = false;
$arguments45['loadExtJsTheme'] = true;
$arguments45['enableExtJsDebug'] = false;
$arguments45['loadJQuery'] = false;
$arguments45['includeCssFiles'] = NULL;
$arguments45['includeJsFiles'] = NULL;
$arguments45['addJsInlineLabels'] = NULL;
$arguments45['includeRequireJsModules'] = NULL;
$arguments45['jQueryNamespace'] = NULL;
$arguments45['addInlineSettings'] = NULL;
// Rendering Array
$array47 = array();
$array47['0'] = 'TYPO3/CMS/WizardCrpages/WizardCreatePages';
$arguments45['includeRequireJsModules'] = $array47;

$output44 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext), ENT_QUOTES);

$output44 .= '
<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['htmlEscape'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$output50 = '';
$array51 = array (
);
$output50 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array51);

$output50 .= 'wiz_crMany';
$arguments48['key'] = $output50;

$output44 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext), ENT_QUOTES);

$output44 .= '</h1>
<div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
            <div class="form-group">
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['key'] = NULL;
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['htmlEscape'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$output111 = '';
$array112 = array (
);
$output111 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array112);

$output111 .= 'wiz_newPages_currentMenu';
$arguments109['key'] = $output111;

$output108 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext), ENT_QUOTES);

$output108 .= '</h4>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['section'] = NULL;
$arguments117['partial'] = NULL;
$arguments117['delegate'] = NULL;
$arguments117['arguments'] = array (
);
$arguments117['optional'] = false;
$arguments117['default'] = NULL;
$arguments117['contentAs'] = NULL;
$arguments117['section'] = 'Page';
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array120);
$arguments117['arguments'] = $array119;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
                ';
return $output116;
};
$arguments113 = array();
$arguments113['each'] = NULL;
$arguments113['as'] = NULL;
$arguments113['key'] = NULL;
$arguments113['reverse'] = false;
$arguments113['iteration'] = NULL;
$array115 = array (
);$arguments113['each'] = $renderingContext->getVariableProvider()->getByPath('pages', $array115);
$arguments113['as'] = 'page';

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output108 .= '
            </div>
        ';
return $output108;
};
$arguments106 = array();

$output105 .= '';

$output105 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
            <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['key'] = NULL;
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['htmlEscape'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$output126 = '';
$array127 = array (
);
$output126 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array127);

$output126 .= 'wiz_newPages';
$arguments124['key'] = $output126;

$output123 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext), ENT_QUOTES);

$output123 .= ':</h4>
            <div class="form-group t3js-wizardcrpages-container">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['section'] = NULL;
$arguments128['partial'] = NULL;
$arguments128['delegate'] = NULL;
$arguments128['arguments'] = array (
);
$arguments128['optional'] = false;
$arguments128['default'] = NULL;
$arguments128['contentAs'] = NULL;
$arguments128['section'] = 'FormLine';
// Rendering Array
$array130 = array();
// Rendering Array
$array131 = array();
$array131['index'] = 0;
$array131['label'] = 1;
$array132 = array (
);$array131['llprefix'] = $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array132);
$array133 = array (
);$array131['typeselect'] = $renderingContext->getVariableProvider()->getByPath('typeSelect', $array133);
$array130['line'] = $array131;
$arguments128['arguments'] = $array130;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output123 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['section'] = NULL;
$arguments134['partial'] = NULL;
$arguments134['delegate'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['optional'] = false;
$arguments134['default'] = NULL;
$arguments134['contentAs'] = NULL;
$arguments134['section'] = 'FormLine';
// Rendering Array
$array136 = array();
// Rendering Array
$array137 = array();
$array137['index'] = 1;
$array137['label'] = 2;
$array138 = array (
);$array137['llprefix'] = $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array138);
$array139 = array (
);$array137['typeselect'] = $renderingContext->getVariableProvider()->getByPath('typeSelect', $array139);
$array136['line'] = $array137;
$arguments134['arguments'] = $array136;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output123 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['section'] = NULL;
$arguments140['partial'] = NULL;
$arguments140['delegate'] = NULL;
$arguments140['arguments'] = array (
);
$arguments140['optional'] = false;
$arguments140['default'] = NULL;
$arguments140['contentAs'] = NULL;
$arguments140['section'] = 'FormLine';
// Rendering Array
$array142 = array();
// Rendering Array
$array143 = array();
$array143['index'] = 2;
$array143['label'] = 3;
$array144 = array (
);$array143['llprefix'] = $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array144);
$array145 = array (
);$array143['typeselect'] = $renderingContext->getVariableProvider()->getByPath('typeSelect', $array145);
$array142['line'] = $array143;
$arguments140['arguments'] = $array142;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output123 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['section'] = NULL;
$arguments146['partial'] = NULL;
$arguments146['delegate'] = NULL;
$arguments146['arguments'] = array (
);
$arguments146['optional'] = false;
$arguments146['default'] = NULL;
$arguments146['contentAs'] = NULL;
$arguments146['section'] = 'FormLine';
// Rendering Array
$array148 = array();
// Rendering Array
$array149 = array();
$array149['index'] = 3;
$array149['label'] = 4;
$array150 = array (
);$array149['llprefix'] = $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array150);
$array151 = array (
);$array149['typeselect'] = $renderingContext->getVariableProvider()->getByPath('typeSelect', $array151);
$array148['line'] = $array149;
$arguments146['arguments'] = $array148;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output123 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['section'] = NULL;
$arguments152['partial'] = NULL;
$arguments152['delegate'] = NULL;
$arguments152['arguments'] = array (
);
$arguments152['optional'] = false;
$arguments152['default'] = NULL;
$arguments152['contentAs'] = NULL;
$arguments152['section'] = 'FormLine';
// Rendering Array
$array154 = array();
// Rendering Array
$array155 = array();
$array155['index'] = 4;
$array155['label'] = 5;
$array156 = array (
);$array155['llprefix'] = $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array156);
$array157 = array (
);$array155['typeselect'] = $renderingContext->getVariableProvider()->getByPath('typeSelect', $array157);
$array154['line'] = $array155;
$arguments152['arguments'] = $array154;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output123 .= '
            </div>
        ';
return $output123;
};
$arguments121 = array();
$arguments121['if'] = NULL;

$output105 .= '';

$output105 .= '
    ';
return $output105;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('pages', $array103);

$expression104 = function($context) {return ($context["node0"]);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments52['__thenClosure'] = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
            <div class="form-group">
                <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['key'] = NULL;
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$output57 = '';
$array58 = array (
);
$output57 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array58);

$output57 .= 'wiz_newPages_currentMenu';
$arguments55['key'] = $output57;

$output54 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext), ENT_QUOTES);

$output54 .= '</h4>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['section'] = NULL;
$arguments63['partial'] = NULL;
$arguments63['delegate'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['optional'] = false;
$arguments63['default'] = NULL;
$arguments63['contentAs'] = NULL;
$arguments63['section'] = 'Page';
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array66);
$arguments63['arguments'] = $array65;

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
                ';
return $output62;
};
$arguments59 = array();
$arguments59['each'] = NULL;
$arguments59['as'] = NULL;
$arguments59['key'] = NULL;
$arguments59['reverse'] = false;
$arguments59['iteration'] = NULL;
$array61 = array (
);$arguments59['each'] = $renderingContext->getVariableProvider()->getByPath('pages', $array61);
$arguments59['as'] = 'page';

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output54 .= '
            </div>
        ';
return $output54;
};
$arguments52['__elseClosures'][] = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
            <h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$output70 = '';
$array71 = array (
);
$output70 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array71);

$output70 .= 'wiz_newPages';
$arguments68['key'] = $output70;

$output67 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext), ENT_QUOTES);

$output67 .= ':</h4>
            <div class="form-group t3js-wizardcrpages-container">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['section'] = NULL;
$arguments72['partial'] = NULL;
$arguments72['delegate'] = NULL;
$arguments72['arguments'] = array (
);
$arguments72['optional'] = false;
$arguments72['default'] = NULL;
$arguments72['contentAs'] = NULL;
$arguments72['section'] = 'FormLine';
// Rendering Array
$array74 = array();
// Rendering Array
$array75 = array();
$array75['index'] = 0;
$array75['label'] = 1;
$array76 = array (
);$array75['llprefix'] = $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array76);
$array77 = array (
);$array75['typeselect'] = $renderingContext->getVariableProvider()->getByPath('typeSelect', $array77);
$array74['line'] = $array75;
$arguments72['arguments'] = $array74;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output67 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['section'] = NULL;
$arguments78['partial'] = NULL;
$arguments78['delegate'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['optional'] = false;
$arguments78['default'] = NULL;
$arguments78['contentAs'] = NULL;
$arguments78['section'] = 'FormLine';
// Rendering Array
$array80 = array();
// Rendering Array
$array81 = array();
$array81['index'] = 1;
$array81['label'] = 2;
$array82 = array (
);$array81['llprefix'] = $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array82);
$array83 = array (
);$array81['typeselect'] = $renderingContext->getVariableProvider()->getByPath('typeSelect', $array83);
$array80['line'] = $array81;
$arguments78['arguments'] = $array80;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output67 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['section'] = NULL;
$arguments84['partial'] = NULL;
$arguments84['delegate'] = NULL;
$arguments84['arguments'] = array (
);
$arguments84['optional'] = false;
$arguments84['default'] = NULL;
$arguments84['contentAs'] = NULL;
$arguments84['section'] = 'FormLine';
// Rendering Array
$array86 = array();
// Rendering Array
$array87 = array();
$array87['index'] = 2;
$array87['label'] = 3;
$array88 = array (
);$array87['llprefix'] = $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array88);
$array89 = array (
);$array87['typeselect'] = $renderingContext->getVariableProvider()->getByPath('typeSelect', $array89);
$array86['line'] = $array87;
$arguments84['arguments'] = $array86;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output67 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['section'] = NULL;
$arguments90['partial'] = NULL;
$arguments90['delegate'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['optional'] = false;
$arguments90['default'] = NULL;
$arguments90['contentAs'] = NULL;
$arguments90['section'] = 'FormLine';
// Rendering Array
$array92 = array();
// Rendering Array
$array93 = array();
$array93['index'] = 3;
$array93['label'] = 4;
$array94 = array (
);$array93['llprefix'] = $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array94);
$array95 = array (
);$array93['typeselect'] = $renderingContext->getVariableProvider()->getByPath('typeSelect', $array95);
$array92['line'] = $array93;
$arguments90['arguments'] = $array92;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output67 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['section'] = NULL;
$arguments96['partial'] = NULL;
$arguments96['delegate'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['optional'] = false;
$arguments96['default'] = NULL;
$arguments96['contentAs'] = NULL;
$arguments96['section'] = 'FormLine';
// Rendering Array
$array98 = array();
// Rendering Array
$array99 = array();
$array99['index'] = 4;
$array99['label'] = 5;
$array100 = array (
);$array99['llprefix'] = $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array100);
$array101 = array (
);$array99['typeselect'] = $renderingContext->getVariableProvider()->getByPath('typeSelect', $array101);
$array98['line'] = $array99;
$arguments96['arguments'] = $array98;

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output67 .= '
            </div>
        ';
return $output67;
};

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output44 .= '
    <div class="form-group">
        <input class="btn btn-default t3js-wizardcrpages-createnewfields" type="button" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['htmlEscape'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$output160 = '';
$array161 = array (
);
$output160 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('LLPrefix', $array161), ENT_QUOTES);

$output160 .= 'wiz_newPages_addMoreLines';
$arguments158['key'] = $output160;

$output44 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext), ENT_QUOTES);

$output44 .= '" />
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label for="createInListEnd">
                <input type="checkbox" name="createInListEnd" id="createInListEnd" value="1" />
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['key'] = NULL;
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['htmlEscape'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$output164 = '';
$array165 = array (
);
$output164 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('LLPrefix', $array165), ENT_QUOTES);

$output164 .= 'wiz_newPages_listEnd';
$arguments162['key'] = $output164;

$output44 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext), ENT_QUOTES);

$output44 .= '
            </label>
        </div>
        <div class="checkbox">
            <label for="hidePages">
                <input type="checkbox" name="hidePages" id="hidePages" value="1" />
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['key'] = NULL;
$arguments166['id'] = NULL;
$arguments166['default'] = NULL;
$arguments166['htmlEscape'] = NULL;
$arguments166['arguments'] = NULL;
$arguments166['extensionName'] = NULL;
$output168 = '';
$array169 = array (
);
$output168 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('LLPrefix', $array169), ENT_QUOTES);

$output168 .= 'wiz_newPages_hidePages';
$arguments166['key'] = $output168;

$output44 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext), ENT_QUOTES);

$output44 .= '
            </label>
        </div>
        <div class="checkbox">
            <label for="hidePagesInMenus">
                <input type="checkbox" name="hidePagesInMenus" id="hidePagesInMenus" value="1" />
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['key'] = NULL;
$arguments170['id'] = NULL;
$arguments170['default'] = NULL;
$arguments170['htmlEscape'] = NULL;
$arguments170['arguments'] = NULL;
$arguments170['extensionName'] = NULL;
$output172 = '';
$array173 = array (
);
$output172 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('LLPrefix', $array173), ENT_QUOTES);

$output172 .= 'wiz_newPages_hidePagesInMenus';
$arguments170['key'] = $output172;

$output44 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext), ENT_QUOTES);

$output44 .= '
            </label>
        </div>
    </div>
    <div class="form-group">
        <input class="btn btn-default" type="submit" name="create" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['htmlEscape'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$output176 = '';
$array177 = array (
);
$output176 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('LLPrefix', $array177), ENT_QUOTES);

$output176 .= 'wiz_newPages_lCreate';
$arguments174['key'] = $output176;

$output44 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext), ENT_QUOTES);

$output44 .= '" />
        <input class="btn btn-default" type="reset" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['key'] = NULL;
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['htmlEscape'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$output180 = '';
$array181 = array (
);
$output180 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('LLPrefix', $array181), ENT_QUOTES);

$output180 .= 'wiz_newPages_lReset';
$arguments178['key'] = $output180;

$output44 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext), ENT_QUOTES);

$output44 .= '" />
    </div>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
        <span class="btn btn-default btn-sm">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$array190 = array (
);return $renderingContext->getVariableProvider()->getByPath('cshItem', $array190);
};
$arguments188 = array();
$arguments188['value'] = NULL;

$output187 .= isset($arguments188['value']) ? $arguments188['value'] : $renderChildrenClosure189();

$output187 .= '</span>
    ';
return $output187;
};
$arguments182 = array();
$arguments182['then'] = NULL;
$arguments182['else'] = NULL;
$arguments182['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array184 = array();
$array185 = array (
);$array184['0'] = $renderingContext->getVariableProvider()->getByPath('cshItem', $array185);

$expression186 = function($context) {return ($context["node0"]);};
$arguments182['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array184)
					),
					$renderingContext
				);
$arguments182['__thenClosure'] = $renderChildrenClosure183;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output44 .= '
</div>

<script type="text/javascript">
    var tpl = `';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['section'] = NULL;
$arguments191['partial'] = NULL;
$arguments191['delegate'] = NULL;
$arguments191['arguments'] = array (
);
$arguments191['optional'] = false;
$arguments191['default'] = NULL;
$arguments191['contentAs'] = NULL;
$arguments191['section'] = 'FormLine';
// Rendering Array
$array193 = array();
// Rendering Array
$array194 = array();
$array194['index'] = '[0]';
$array194['label'] = '[1]';
$array195 = array (
);$array194['llprefix'] = $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array195);
$array196 = array (
);$array194['typeselect'] = $renderingContext->getVariableProvider()->getByPath('typeSelect', $array196);
$array193['line'] = $array194;
$arguments191['arguments'] = $array193;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output44 .= '`, i, line, div, bg, label;
</script>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
    <span class="text-nowrap" title="';
$array200 = array (
);
$output199 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('page.titleAttribute', $array200), ENT_QUOTES);

$output199 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['table'] = NULL;
$arguments201['row'] = NULL;
$arguments201['size'] = 'small';
$arguments201['alternativeMarkupIdentifier'] = NULL;
$arguments201['table'] = 'pages';
$array203 = array (
);$arguments201['row'] = $renderingContext->getVariableProvider()->getByPath('page.record', $array203);

$output199 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);
$array204 = array (
);
$output199 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('page.title', $array204), ENT_QUOTES);

$output199 .= '<br />
    </span>
';
return $output199;
};
$arguments197 = array();
$arguments197['name'] = NULL;
$arguments197['name'] = 'Page';

$output44 .= '';

$output44 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
    <div class="form-section" id="form-line-';
$array208 = array (
);
$output207 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array208), ENT_QUOTES);

$output207 .= '">
        <div class="row">
            <div class="form-group col-xs-8">
                <label for="page_new_';
$array209 = array (
);
$output207 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array209), ENT_QUOTES);

$output207 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['key'] = NULL;
$arguments210['id'] = NULL;
$arguments210['default'] = NULL;
$arguments210['htmlEscape'] = NULL;
$arguments210['arguments'] = NULL;
$arguments210['extensionName'] = NULL;
$output212 = '';
$array213 = array (
);
$output212 .= $renderingContext->getVariableProvider()->getByPath('line.llprefix', $array213);

$output212 .= 'wiz_newPages_page';
$arguments210['key'] = $output212;

$output207 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext), ENT_QUOTES);

$output207 .= ' ';
$array214 = array (
);
$output207 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.label', $array214), ENT_QUOTES);

$output207 .= ':
                </label>
                <div class="form-control-wrap">
                    <input class="form-control" type="text" id="page_new_';
$array215 = array (
);
$output207 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array215), ENT_QUOTES);

$output207 .= '" name="data[pages][NEW';
$array216 = array (
);
$output207 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array216), ENT_QUOTES);

$output207 .= '][title]" />
                </div>
            </div>
            <div class="form-group col-xs-4">
                <label for="page_new_select_';
$array217 = array (
);
$output207 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array217), ENT_QUOTES);

$output207 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['key'] = NULL;
$arguments218['id'] = NULL;
$arguments218['default'] = NULL;
$arguments218['htmlEscape'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['extensionName'] = NULL;
$arguments218['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type';

$output207 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext), ENT_QUOTES);

$output207 .= '
                </label>
                <div class="form-control-wrap">
                    <div class="input-group">
                        <div id="page_new_icon_';
$array220 = array (
);
$output207 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array220), ENT_QUOTES);

$output207 .= '" class="input-group-addon input-group-icon">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['table'] = NULL;
$arguments221['row'] = NULL;
$arguments221['size'] = 'small';
$arguments221['alternativeMarkupIdentifier'] = NULL;
$arguments221['table'] = 'pages';
// Rendering Array
$array223 = array();
$array223['id'] = 0;
$arguments221['row'] = $array223;

$output207 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output207 .= '
                        </div>
                        <select id="page_new_select_';
$array224 = array (
);
$output207 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array224), ENT_QUOTES);

$output207 .= '" class="form-control form-control-adapt t3js-wizardcrpages-select-doktype" name="data[pages][NEW';
$array225 = array (
);
$output207 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array225), ENT_QUOTES);

$output207 .= '][doktype]" data-target="#page_new_icon_';
$array226 = array (
);
$output207 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('line.index', $array226), ENT_QUOTES);

$output207 .= '">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
                                <optgroup label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['key'] = NULL;
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['htmlEscape'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$array233 = array (
);$arguments231['key'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('group', $array233), ENT_QUOTES);

$output230 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext), ENT_QUOTES);

$output230 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
                                        <option data-icon=\'';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['identifier'] = NULL;
$arguments238['size'] = 'small';
$arguments238['overlay'] = NULL;
$arguments238['state'] = 'default';
$arguments238['alternativeMarkupIdentifier'] = NULL;
$array240 = array (
);$arguments238['identifier'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.2', $array240), ENT_QUOTES);

$output237 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output237 .= '\' value="';
$array241 = array (
);
$output237 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.1', $array241), ENT_QUOTES);

$output237 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['key'] = NULL;
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['htmlEscape'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$array244 = array (
);$arguments242['key'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('type.0', $array244), ENT_QUOTES);

$output237 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext), ENT_QUOTES);

$output237 .= '</option>
                                    ';
return $output237;
};
$arguments234 = array();
$arguments234['each'] = NULL;
$arguments234['as'] = NULL;
$arguments234['key'] = NULL;
$arguments234['reverse'] = false;
$arguments234['iteration'] = NULL;
$array236 = array (
);$arguments234['each'] = $renderingContext->getVariableProvider()->getByPath('typegroup', $array236);
$arguments234['as'] = 'type';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output230 .= '
                                </optgroup>
                            ';
return $output230;
};
$arguments227 = array();
$arguments227['each'] = NULL;
$arguments227['as'] = NULL;
$arguments227['key'] = NULL;
$arguments227['reverse'] = false;
$arguments227['iteration'] = NULL;
$array229 = array (
);$arguments227['each'] = $renderingContext->getVariableProvider()->getByPath('line.typeselect', $array229);
$arguments227['as'] = 'typegroup';
$arguments227['key'] = 'group';

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output207 .= '
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
';
return $output207;
};
$arguments205 = array();
$arguments205['name'] = NULL;
$arguments205['name'] = 'FormLine';

$output44 .= '';

$output44 .= '
';

return $output44;
}


}
#2994619498    50930     