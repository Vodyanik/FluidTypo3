<?php

class partial_List_Item_258acb39bddad9a9a6980b8335e7e9ed5fde8bad extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'flux' => 
  array (
    0 => 'FluidTYPO3\\Flux\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

<div class="blog-post">
	<h2 class="blog-post-title">';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1)]);

$output0 .= '</h2>
	<p class="blog-post-meta">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['date'] = NULL;
$arguments2['format'] = '';
$arguments2['base'] = NULL;
$array4 = array (
);$arguments2['date'] = $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array4);
$arguments2['format'] = 'Y-m-d';
$renderChildrenClosure3 = ($arguments2['date'] !== null) ? function() use ($arguments2) { return $arguments2['date']; } : $renderChildrenClosure3;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext)]);

$output0 .= ' by <a href="#">Chris</a></p>
	<p>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$array7 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array7);
};
$arguments5 = array();
$arguments5['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
	</p>
</div>


';

return $output0;
}


}
#