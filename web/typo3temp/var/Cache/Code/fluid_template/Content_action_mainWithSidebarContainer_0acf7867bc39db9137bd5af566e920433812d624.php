<?php

class Content_action_mainWithSidebarContainer_0acf7867bc39db9137bd5af566e920433812d624 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Content';
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
$output4 = '';

$output4 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['value'] = NULL;
$arguments5['value'] = 'fluxContentContainers';
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output4 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
		';
return $output4;
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
$arguments1['id'] = 'mainWithSidebar';
$arguments1['label'] = 'Main content container with sidebar';
// Rendering Array
$array3 = array();
$array3['group'] = 'FCE';
$arguments1['options'] = $array3;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['name'] = 'column';
$arguments13['label'] = NULL;
$arguments13['colPos'] = -1;
$arguments13['colspan'] = 1;
$arguments13['rowspan'] = 1;
$arguments13['style'] = NULL;
$arguments13['variables'] = array (
);
$arguments13['extensionName'] = NULL;
$arguments13['colPos'] = 1;
$arguments13['colspan'] = 8;
$arguments13['name'] = 'main';
$arguments13['label'] = 'Main';

$output12 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['name'] = 'column';
$arguments15['label'] = NULL;
$arguments15['colPos'] = -1;
$arguments15['colspan'] = 1;
$arguments15['rowspan'] = 1;
$arguments15['style'] = NULL;
$arguments15['variables'] = array (
);
$arguments15['extensionName'] = NULL;
$arguments15['colPos'] = 2;
$arguments15['colspan'] = 4;
$arguments15['name'] = 'sidebar';
$arguments15['label'] = 'Sidebar';

$output12 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output12 .= '
			';
return $output12;
};
$arguments10 = array();
$arguments10['name'] = 'row';
$arguments10['label'] = NULL;
$arguments10['variables'] = array (
);
$arguments10['extensionName'] = NULL;

$output9 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
		';
return $output9;
};
$arguments7 = array();
$arguments7['name'] = 'grid';
$arguments7['label'] = NULL;
$arguments7['variables'] = array (
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '
	';

return $output0;
}
/**
 * section Preview
 */
public function section_f1fbb2b43dca281d0138f4fcc92543ad143ef0b1(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
		Main With Sidebar
	';
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output17 = '';

$output17 .= '
		<main role="main" class="container">
			<div class="row">
				<div class="col-md-8 blog-main">
					';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['area'] = NULL;
$arguments18['limit'] = NULL;
$arguments18['offset'] = 0;
$arguments18['order'] = 'sorting';
$arguments18['sortDirection'] = 'ASC';
$arguments18['as'] = NULL;
$arguments18['loadRegister'] = NULL;
$arguments18['render'] = true;
$arguments18['area'] = 'main';

$output17 .= FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
				</div>
				<aside class="col-md-4 blog-sidebar">
					';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['area'] = NULL;
$arguments20['limit'] = NULL;
$arguments20['offset'] = 0;
$arguments20['order'] = 'sorting';
$arguments20['sortDirection'] = 'ASC';
$arguments20['as'] = NULL;
$arguments20['loadRegister'] = NULL;
$arguments20['render'] = true;
$arguments20['area'] = 'sidebar';

$output17 .= FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '
				</aside>
			</div>
		</main>
	';

return $output17;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output22 = '';

$output22 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
	 xmlns:f="http://typo3.org/ns/TYPO3/Fluid/ViewHelpers"
	 xmlns:flux="http://typo3.org/ns/FluidTYPO3/Flux/ViewHelpers"
	 xmlns:v="http://typo3.org/ns/FluidTYPO3/Vhs/ViewHelpers">

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['name'] = NULL;
$arguments23['name'] = 'Content';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output22 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['value'] = NULL;
$arguments32['value'] = 'fluxContentContainers';
$renderChildrenClosure33 = ($arguments32['value'] !== null) ? function() use ($arguments32) { return $arguments32['value']; } : $renderChildrenClosure33;
$output31 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
		';
return $output31;
};
$arguments28 = array();
$arguments28['id'] = NULL;
$arguments28['label'] = NULL;
$arguments28['description'] = NULL;
$arguments28['enabled'] = true;
$arguments28['compact'] = false;
$arguments28['variables'] = array (
);
$arguments28['options'] = NULL;
$arguments28['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments28['extensionName'] = NULL;
$arguments28['id'] = 'mainWithSidebar';
$arguments28['label'] = 'Main content container with sidebar';
// Rendering Array
$array30 = array();
$array30['group'] = 'FCE';
$arguments28['options'] = $array30;

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['name'] = 'column';
$arguments40['label'] = NULL;
$arguments40['colPos'] = -1;
$arguments40['colspan'] = 1;
$arguments40['rowspan'] = 1;
$arguments40['style'] = NULL;
$arguments40['variables'] = array (
);
$arguments40['extensionName'] = NULL;
$arguments40['colPos'] = 1;
$arguments40['colspan'] = 8;
$arguments40['name'] = 'main';
$arguments40['label'] = 'Main';

$output39 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['name'] = 'column';
$arguments42['label'] = NULL;
$arguments42['colPos'] = -1;
$arguments42['colspan'] = 1;
$arguments42['rowspan'] = 1;
$arguments42['style'] = NULL;
$arguments42['variables'] = array (
);
$arguments42['extensionName'] = NULL;
$arguments42['colPos'] = 2;
$arguments42['colspan'] = 4;
$arguments42['name'] = 'sidebar';
$arguments42['label'] = 'Sidebar';

$output39 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output39 .= '
			';
return $output39;
};
$arguments37 = array();
$arguments37['name'] = 'row';
$arguments37['label'] = NULL;
$arguments37['variables'] = array (
);
$arguments37['extensionName'] = NULL;

$output36 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
		';
return $output36;
};
$arguments34 = array();
$arguments34['name'] = 'grid';
$arguments34['label'] = NULL;
$arguments34['variables'] = array (
);

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output27 .= '
	';
return $output27;
};
$arguments25 = array();
$arguments25['name'] = NULL;
$arguments25['name'] = 'Configuration';

$output22 .= NULL;

$output22 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return '
		Main With Sidebar
	';
};
$arguments44 = array();
$arguments44['name'] = NULL;
$arguments44['name'] = 'Preview';

$output22 .= NULL;

$output22 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
		<main role="main" class="container">
			<div class="row">
				<div class="col-md-8 blog-main">
					';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['area'] = NULL;
$arguments49['limit'] = NULL;
$arguments49['offset'] = 0;
$arguments49['order'] = 'sorting';
$arguments49['sortDirection'] = 'ASC';
$arguments49['as'] = NULL;
$arguments49['loadRegister'] = NULL;
$arguments49['render'] = true;
$arguments49['area'] = 'main';

$output48 .= FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
				</div>
				<aside class="col-md-4 blog-sidebar">
					';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['area'] = NULL;
$arguments51['limit'] = NULL;
$arguments51['offset'] = 0;
$arguments51['order'] = 'sorting';
$arguments51['sortDirection'] = 'ASC';
$arguments51['as'] = NULL;
$arguments51['loadRegister'] = NULL;
$arguments51['render'] = true;
$arguments51['area'] = 'sidebar';

$output48 .= FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output48 .= '
				</aside>
			</div>
		</main>
	';
return $output48;
};
$arguments46 = array();
$arguments46['name'] = NULL;
$arguments46['name'] = 'Main';

$output22 .= NULL;

$output22 .= '
</div>
';

return $output22;
}


}
#