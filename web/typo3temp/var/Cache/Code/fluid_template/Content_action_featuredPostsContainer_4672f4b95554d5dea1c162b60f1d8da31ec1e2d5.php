<?php

class Content_action_featuredPostsContainer_4672f4b95554d5dea1c162b60f1d8da31ec1e2d5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'topPostsContainer';
$arguments1['label'] = 'Top posts Container';
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
$arguments13['colPos'] = 0;
$arguments13['colspan'] = 12;
$arguments13['name'] = 'top';
$arguments13['label'] = 'Top post';

$output12 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['name'] = 'column';
$arguments18['label'] = NULL;
$arguments18['colPos'] = -1;
$arguments18['colspan'] = 1;
$arguments18['rowspan'] = 1;
$arguments18['style'] = NULL;
$arguments18['variables'] = array (
);
$arguments18['extensionName'] = NULL;
$arguments18['colPos'] = 1;
$arguments18['colspan'] = 6;
$arguments18['name'] = 'featured1';
$arguments18['label'] = 'Featured post left';

$output17 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['name'] = 'column';
$arguments20['label'] = NULL;
$arguments20['colPos'] = -1;
$arguments20['colspan'] = 1;
$arguments20['rowspan'] = 1;
$arguments20['style'] = NULL;
$arguments20['variables'] = array (
);
$arguments20['extensionName'] = NULL;
$arguments20['colPos'] = 2;
$arguments20['colspan'] = 6;
$arguments20['name'] = 'featured2';
$arguments20['label'] = 'Featured post right';

$output17 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '
            ';
return $output17;
};
$arguments15 = array();
$arguments15['name'] = 'row';
$arguments15['label'] = NULL;
$arguments15['variables'] = array (
);
$arguments15['extensionName'] = NULL;

$output9 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

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
		<!-- If you wish, place custom backend preview content here -->
        Top Post Container <br />
	';
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output22 = '';

$output22 .= '
        <div class="container">
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="text-muted" href="#">Subscribe</a>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-dark" href="#">Large</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="text-muted" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                        </a>
                        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                    </div>
                </div>
            </header>

            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-muted" href="#">World</a>
                    <a class="p-2 text-muted" href="#">U.S.</a>
                    <a class="p-2 text-muted" href="#">Technology</a>
                    <a class="p-2 text-muted" href="#">Design</a>
                    <a class="p-2 text-muted" href="#">Culture</a>
                    <a class="p-2 text-muted" href="#">Business</a>
                    <a class="p-2 text-muted" href="#">Politics</a>
                    <a class="p-2 text-muted" href="#">Opinion</a>
                    <a class="p-2 text-muted" href="#">Science</a>
                    <a class="p-2 text-muted" href="#">Health</a>
                    <a class="p-2 text-muted" href="#">Style</a>
                    <a class="p-2 text-muted" href="#">Travel</a>
                </nav>
            </div>


            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['area'] = NULL;
$arguments23['limit'] = NULL;
$arguments23['offset'] = 0;
$arguments23['order'] = 'sorting';
$arguments23['sortDirection'] = 'ASC';
$arguments23['as'] = NULL;
$arguments23['loadRegister'] = NULL;
$arguments23['render'] = true;
$arguments23['area'] = 'top';

$output22 .= FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '

            <div class="row mb-2">
                <div class="col-md-6">
                    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['area'] = NULL;
$arguments25['limit'] = NULL;
$arguments25['offset'] = 0;
$arguments25['order'] = 'sorting';
$arguments25['sortDirection'] = 'ASC';
$arguments25['as'] = NULL;
$arguments25['loadRegister'] = NULL;
$arguments25['render'] = true;
$arguments25['area'] = 'featured1';

$output22 .= FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output22 .= '
                </div>
                <div class="col-md-6">
                    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['area'] = NULL;
$arguments27['limit'] = NULL;
$arguments27['offset'] = 0;
$arguments27['order'] = 'sorting';
$arguments27['sortDirection'] = 'ASC';
$arguments27['as'] = NULL;
$arguments27['loadRegister'] = NULL;
$arguments27['render'] = true;
$arguments27['area'] = 'featured2';

$output22 .= FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output22 .= '
                </div>
            </div>

        </div>
	';

return $output22;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output29 = '';

$output29 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
	xmlns:f="http://typo3.org/ns/TYPO3/Fluid/ViewHelpers"
	xmlns:flux="http://typo3.org/ns/FluidTYPO3/Flux/ViewHelpers"
	xmlns:v="http://typo3.org/ns/FluidTYPO3/Vhs/ViewHelpers">

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['name'] = NULL;
$arguments30['name'] = 'Content';

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output29 .= '
    
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['value'] = NULL;
$arguments39['value'] = 'fluxContentContainers';
$renderChildrenClosure40 = ($arguments39['value'] !== null) ? function() use ($arguments39) { return $arguments39['value']; } : $renderChildrenClosure40;
$output38 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
		';
return $output38;
};
$arguments35 = array();
$arguments35['id'] = NULL;
$arguments35['label'] = NULL;
$arguments35['description'] = NULL;
$arguments35['enabled'] = true;
$arguments35['compact'] = false;
$arguments35['variables'] = array (
);
$arguments35['options'] = NULL;
$arguments35['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments35['extensionName'] = NULL;
$arguments35['id'] = 'topPostsContainer';
$arguments35['label'] = 'Top posts Container';
// Rendering Array
$array37 = array();
$array37['group'] = 'FCE';
$arguments35['options'] = $array37;

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['name'] = 'column';
$arguments47['label'] = NULL;
$arguments47['colPos'] = -1;
$arguments47['colspan'] = 1;
$arguments47['rowspan'] = 1;
$arguments47['style'] = NULL;
$arguments47['variables'] = array (
);
$arguments47['extensionName'] = NULL;
$arguments47['colPos'] = 0;
$arguments47['colspan'] = 12;
$arguments47['name'] = 'top';
$arguments47['label'] = 'Top post';

$output46 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
            ';
return $output46;
};
$arguments44 = array();
$arguments44['name'] = 'row';
$arguments44['label'] = NULL;
$arguments44['variables'] = array (
);
$arguments44['extensionName'] = NULL;

$output43 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['name'] = 'column';
$arguments52['label'] = NULL;
$arguments52['colPos'] = -1;
$arguments52['colspan'] = 1;
$arguments52['rowspan'] = 1;
$arguments52['style'] = NULL;
$arguments52['variables'] = array (
);
$arguments52['extensionName'] = NULL;
$arguments52['colPos'] = 1;
$arguments52['colspan'] = 6;
$arguments52['name'] = 'featured1';
$arguments52['label'] = 'Featured post left';

$output51 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['name'] = 'column';
$arguments54['label'] = NULL;
$arguments54['colPos'] = -1;
$arguments54['colspan'] = 1;
$arguments54['rowspan'] = 1;
$arguments54['style'] = NULL;
$arguments54['variables'] = array (
);
$arguments54['extensionName'] = NULL;
$arguments54['colPos'] = 2;
$arguments54['colspan'] = 6;
$arguments54['name'] = 'featured2';
$arguments54['label'] = 'Featured post right';

$output51 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output51 .= '
            ';
return $output51;
};
$arguments49 = array();
$arguments49['name'] = 'row';
$arguments49['label'] = NULL;
$arguments49['variables'] = array (
);
$arguments49['extensionName'] = NULL;

$output43 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output43 .= '
        ';
return $output43;
};
$arguments41 = array();
$arguments41['name'] = 'grid';
$arguments41['label'] = NULL;
$arguments41['variables'] = array (
);

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output34 .= '
	';
return $output34;
};
$arguments32 = array();
$arguments32['name'] = NULL;
$arguments32['name'] = 'Configuration';

$output29 .= NULL;

$output29 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return '
		<!-- If you wish, place custom backend preview content here -->
        Top Post Container <br />
	';
};
$arguments56 = array();
$arguments56['name'] = NULL;
$arguments56['name'] = 'Preview';

$output29 .= NULL;

$output29 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
        <div class="container">
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="text-muted" href="#">Subscribe</a>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-dark" href="#">Large</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="text-muted" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                        </a>
                        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                    </div>
                </div>
            </header>

            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-muted" href="#">World</a>
                    <a class="p-2 text-muted" href="#">U.S.</a>
                    <a class="p-2 text-muted" href="#">Technology</a>
                    <a class="p-2 text-muted" href="#">Design</a>
                    <a class="p-2 text-muted" href="#">Culture</a>
                    <a class="p-2 text-muted" href="#">Business</a>
                    <a class="p-2 text-muted" href="#">Politics</a>
                    <a class="p-2 text-muted" href="#">Opinion</a>
                    <a class="p-2 text-muted" href="#">Science</a>
                    <a class="p-2 text-muted" href="#">Health</a>
                    <a class="p-2 text-muted" href="#">Style</a>
                    <a class="p-2 text-muted" href="#">Travel</a>
                </nav>
            </div>


            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['area'] = NULL;
$arguments61['limit'] = NULL;
$arguments61['offset'] = 0;
$arguments61['order'] = 'sorting';
$arguments61['sortDirection'] = 'ASC';
$arguments61['as'] = NULL;
$arguments61['loadRegister'] = NULL;
$arguments61['render'] = true;
$arguments61['area'] = 'top';

$output60 .= FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '

            <div class="row mb-2">
                <div class="col-md-6">
                    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['area'] = NULL;
$arguments63['limit'] = NULL;
$arguments63['offset'] = 0;
$arguments63['order'] = 'sorting';
$arguments63['sortDirection'] = 'ASC';
$arguments63['as'] = NULL;
$arguments63['loadRegister'] = NULL;
$arguments63['render'] = true;
$arguments63['area'] = 'featured1';

$output60 .= FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output60 .= '
                </div>
                <div class="col-md-6">
                    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['area'] = NULL;
$arguments65['limit'] = NULL;
$arguments65['offset'] = 0;
$arguments65['order'] = 'sorting';
$arguments65['sortDirection'] = 'ASC';
$arguments65['as'] = NULL;
$arguments65['loadRegister'] = NULL;
$arguments65['render'] = true;
$arguments65['area'] = 'featured2';

$output60 .= FluidTYPO3\Flux\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output60 .= '
                </div>
            </div>

        </div>
	';
return $output60;
};
$arguments58 = array();
$arguments58['name'] = NULL;
$arguments58['name'] = 'Main';

$output29 .= NULL;

$output29 .= '
</div>
';

return $output29;
}


}
#