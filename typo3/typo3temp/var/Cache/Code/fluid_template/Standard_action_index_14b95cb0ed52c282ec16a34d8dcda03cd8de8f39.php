<?php

class Standard_action_index_14b95cb0ed52c282ec16a34d8dcda03cd8de8f39 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'LLL:EXT:lang/locallang_core.xlf:file_replace.php.pagetitle';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext), ENT_QUOTES);

$output0 .= '</h1>
<div>
    <form action="';
$array3 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('moduleUrlTceFile', $array3), ENT_QUOTES);

$output0 .= '" role="form" method="post" name="editform" enctype="multipart/form-data">
    <div class="form-group">
        <input type="checkbox" value="1" id="keepFilename" name="file[replace][1][keepFilename]">
        <label for="keepFilename">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:file_replace.php.keepfiletitle';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext), ENT_QUOTES);

$output0 .= '</label>
    </div>

    <div class="form-group">
        <label for="file_replace">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['key'] = NULL;
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:file_replace.php.selectfile';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext), ENT_QUOTES);

$output0 .= '</label>
        <div class="input-group col-xs-6">
            <input type="text" name="fakefile" id="fakefile" class="form-control input-xlarge" readonly>
            <a class="input-group-addon btn btn-primary" onclick="$(\'#file_replace\').click();">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:file_replace.php.browse';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext), ENT_QUOTES);

$output0 .= '
            </a>
        </div>
        <input class="form-control" type="file" id="file_replace" name="replace_1" style="visibility: hidden;" />
    </div>

    <script>
        $(\'#file_replace\').change(function() {
            $(\'#fakefile\').val($(this).val());
        });
    </script>

    <input type="hidden" name="overwriteExistingFiles" value="replace" />
    <input type="hidden" name="file[replace][1][data]" value="1" />
    <input type="hidden" name="file[replace][1][uid]" value="';
$array10 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('uid', $array10), ENT_QUOTES);

$output0 .= '" />

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:file_replace.php.submit';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext), ENT_QUOTES);

$output0 .= '" />
        <input class="btn btn-danger" type="submit" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.cancel';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext), ENT_QUOTES);

$output0 .= '"
             onclick="backToList(); return false;" />
        <input type="hidden" name="redirect" value="';
$array15 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('returnUrl', $array15), ENT_QUOTES);

$output0 .= '" />
    </div>
    </form>
</div>
';

return $output0;
}


}
#2993742390    6821      