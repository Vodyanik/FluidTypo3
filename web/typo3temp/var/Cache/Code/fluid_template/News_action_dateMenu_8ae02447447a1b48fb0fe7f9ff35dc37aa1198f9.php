<?php

class News_action_dateMenu_8ae02447447a1b48fb0fe7f9ff35dc37aa1198f9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'General';
}
public function hasLayout() {
return TRUE;
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
  'flux' => 
  array (
    0 => 'FluidTYPO3\\Flux\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div class="p-3">
		<ol class="list-unstyled mb-0">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
							';
$array13 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('month', $array13)]);

$output12 .= '
							';
$array14 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('year', $array14)]);

$output12 .= '
						';
return $output12;
};
$arguments9 = array();
$arguments9['action'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['controller'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['pluginName'] = NULL;
$arguments9['pageUid'] = NULL;
$arguments9['pageType'] = 0;
$arguments9['noCache'] = false;
$arguments9['noCacheHash'] = false;
$arguments9['section'] = '';
$arguments9['format'] = '';
$arguments9['linkAccessRestrictedPages'] = false;
$arguments9['additionalParams'] = array (
);
$arguments9['absolute'] = false;
$arguments9['addQueryString'] = false;
$arguments9['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments9['addQueryStringMethod'] = NULL;
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['name'] = NULL;
$arguments9['rel'] = NULL;
$arguments9['rev'] = NULL;
$arguments9['target'] = NULL;
$array11 = array (
);$arguments9['pageUid'] = $renderingContext->getVariableProvider()->getByPath('listPid', $array11);

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
					</li>
				';
return $output8;
};
$arguments5 = array();
$arguments5['each'] = NULL;
$arguments5['as'] = NULL;
$arguments5['key'] = NULL;
$arguments5['reverse'] = false;
$arguments5['iteration'] = NULL;
$array7 = array (
);$arguments5['each'] = $renderingContext->getVariableProvider()->getByPath('months', $array7);
$arguments5['key'] = 'month';
$arguments5['as'] = 'count';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
			';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('data.single', $array3);
$arguments1['key'] = 'year';
$arguments1['as'] = 'months';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		</ol>
	</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output15 = '';

$output15 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['name'] = NULL;
$arguments16['name'] = 'General';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output15 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
	<div class="p-3">
		<ol class="list-unstyled mb-0">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
							';
$array33 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('month', $array33)]);

$output32 .= '
							';
$array34 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('year', $array34)]);

$output32 .= '
						';
return $output32;
};
$arguments29 = array();
$arguments29['action'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['controller'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['pluginName'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['pageType'] = 0;
$arguments29['noCache'] = false;
$arguments29['noCacheHash'] = false;
$arguments29['section'] = '';
$arguments29['format'] = '';
$arguments29['linkAccessRestrictedPages'] = false;
$arguments29['additionalParams'] = array (
);
$arguments29['absolute'] = false;
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['addQueryStringMethod'] = NULL;
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['name'] = NULL;
$arguments29['rel'] = NULL;
$arguments29['rev'] = NULL;
$arguments29['target'] = NULL;
$array31 = array (
);$arguments29['pageUid'] = $renderingContext->getVariableProvider()->getByPath('listPid', $array31);

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
					</li>
				';
return $output28;
};
$arguments25 = array();
$arguments25['each'] = NULL;
$arguments25['as'] = NULL;
$arguments25['key'] = NULL;
$arguments25['reverse'] = false;
$arguments25['iteration'] = NULL;
$array27 = array (
);$arguments25['each'] = $renderingContext->getVariableProvider()->getByPath('months', $array27);
$arguments25['key'] = 'month';
$arguments25['as'] = 'count';

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
			';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('data.single', $array23);
$arguments21['key'] = 'year';
$arguments21['as'] = 'months';

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
		</ol>
	</div>
';
return $output20;
};
$arguments18 = array();
$arguments18['name'] = NULL;
$arguments18['name'] = 'content';

$output15 .= NULL;

$output15 .= '
';

return $output15;
}


}
#