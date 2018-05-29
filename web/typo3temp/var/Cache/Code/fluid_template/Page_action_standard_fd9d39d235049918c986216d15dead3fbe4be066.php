<?php

class Page_action_standard_fd9d39d235049918c986216d15dead3fbe4be066 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Page';
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
    2 => 'TYPO3\\Fluid\\ViewHelpers',
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
 * section Configuration
 */
public function section_754164850f38c1ecdaf6b8ed894cb192bc36c5f4(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['id'] = NULL;
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['enabled'] = true;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['options'] = NULL;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments1['extensionName'] = NULL;
$arguments1['id'] = 'standard';
$arguments1['label'] = 'Standard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['name'] = 'column';
$arguments9['label'] = NULL;
$arguments9['colPos'] = -1;
$arguments9['colspan'] = 1;
$arguments9['rowspan'] = 1;
$arguments9['style'] = NULL;
$arguments9['variables'] = array (
);
$arguments9['extensionName'] = NULL;
$arguments9['colPos'] = 0;
$arguments9['colspan'] = 12;
$arguments9['name'] = 'standard';

$output8 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
			';
return $output8;
};
$arguments6 = array();
$arguments6['name'] = 'row';
$arguments6['label'] = NULL;
$arguments6['variables'] = array (
);
$arguments6['extensionName'] = NULL;

$output5 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
		';
return $output5;
};
$arguments3 = array();
$arguments3['name'] = 'grid';
$arguments3['label'] = NULL;
$arguments3['variables'] = array (
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
	';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output11 = '';

$output11 .= '
		';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['column'] = NULL;
$arguments12['order'] = 'sorting';
$arguments12['sortDirection'] = 'ASC';
$arguments12['pageUid'] = 0;
$arguments12['contentUids'] = NULL;
$arguments12['sectionIndexOnly'] = false;
$arguments12['loadRegister'] = NULL;
$arguments12['render'] = true;
$arguments12['hideUntranslated'] = false;
$arguments12['limit'] = NULL;
$arguments12['slide'] = 0;
$arguments12['slideCollect'] = 0;
$arguments12['slideCollectReverse'] = false;
$arguments12['as'] = NULL;
$arguments12['column'] = 0;

$output11 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
	';

return $output11;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output14 = '';

$output14 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
	xmlns:f="http://typo3.org/ns/TYPO3/Fluid/ViewHelpers"
	xmlns:v="http://typo3.org/ns/FluidTYPO3/Vhs/ViewHelpers"
	xmlns:flux="http://typo3.org/ns/FluidTYPO3/Flux/ViewHelpers">

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['name'] = NULL;
$arguments15['name'] = 'Page';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output14 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['id'] = NULL;
$arguments20['label'] = NULL;
$arguments20['description'] = NULL;
$arguments20['enabled'] = true;
$arguments20['compact'] = false;
$arguments20['variables'] = array (
);
$arguments20['options'] = NULL;
$arguments20['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments20['extensionName'] = NULL;
$arguments20['id'] = 'standard';
$arguments20['label'] = 'Standard';

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output19 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['name'] = 'column';
$arguments28['label'] = NULL;
$arguments28['colPos'] = -1;
$arguments28['colspan'] = 1;
$arguments28['rowspan'] = 1;
$arguments28['style'] = NULL;
$arguments28['variables'] = array (
);
$arguments28['extensionName'] = NULL;
$arguments28['colPos'] = 0;
$arguments28['colspan'] = 12;
$arguments28['name'] = 'standard';

$output27 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
			';
return $output27;
};
$arguments25 = array();
$arguments25['name'] = 'row';
$arguments25['label'] = NULL;
$arguments25['variables'] = array (
);
$arguments25['extensionName'] = NULL;

$output24 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
		';
return $output24;
};
$arguments22 = array();
$arguments22['name'] = 'grid';
$arguments22['label'] = NULL;
$arguments22['variables'] = array (
);

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output19 .= '
	';
return $output19;
};
$arguments17 = array();
$arguments17['name'] = NULL;
$arguments17['name'] = 'Configuration';

$output14 .= NULL;

$output14 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
		';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['column'] = NULL;
$arguments33['order'] = 'sorting';
$arguments33['sortDirection'] = 'ASC';
$arguments33['pageUid'] = 0;
$arguments33['contentUids'] = NULL;
$arguments33['sectionIndexOnly'] = false;
$arguments33['loadRegister'] = NULL;
$arguments33['render'] = true;
$arguments33['hideUntranslated'] = false;
$arguments33['limit'] = NULL;
$arguments33['slide'] = 0;
$arguments33['slideCollect'] = 0;
$arguments33['slideCollectReverse'] = false;
$arguments33['as'] = NULL;
$arguments33['column'] = 0;

$output32 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
	';
return $output32;
};
$arguments30 = array();
$arguments30['name'] = NULL;
$arguments30['name'] = 'Main';

$output14 .= NULL;

$output14 .= '
</div>
';

return $output14;
}


}
#