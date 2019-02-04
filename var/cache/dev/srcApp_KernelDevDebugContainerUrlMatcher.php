<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' => array(
                array(array('_route' => 'lista_contatos', '_controller' => 'App\\Controller\\CadastroController::index'), null, null, null, false, false, null),
                array(array('_route' => 'lista_enderecos', '_controller' => 'App\\Controller\\EnderecoController::index'), null, null, null, false, false, null),
                array(array('_route' => 'index', '_controller' => 'App\\Controller\\CadastroController::index'), null, null, null, false, false, null),
            ),
            '/contato/novo' => array(array(array('_route' => 'contato_novo', '_controller' => 'App\\Controller\\CadastroController::novo'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/contato/(?'
                        .'|editar/([^/]++)(*:34)'
                        .'|([^/]++)(*:49)'
                        .'|delete/([^/]++)(*:71)'
                    .')'
                    .'|/endereco/(?'
                        .'|novo/([^/]++)(*:105)'
                        .'|editar/([^/]++)(*:128)'
                        .'|delete/([^/]++)(*:151)'
                    .')'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:188)'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            34 => array(array(array('_route' => 'contato_editar', '_controller' => 'App\\Controller\\CadastroController::editar'), array('id'), null, null, false, true, null)),
            49 => array(array(array('_route' => 'contato_ver', '_controller' => 'App\\Controller\\CadastroController::ver'), array('id'), null, null, false, true, null)),
            71 => array(array(array('_route' => 'app_cadastro_apagar', '_controller' => 'App\\Controller\\CadastroController::apagar'), array('id'), null, null, false, true, null)),
            105 => array(array(array('_route' => 'endereco_novo', '_controller' => 'App\\Controller\\EnderecoController::novo'), array('id'), null, null, false, true, null)),
            128 => array(array(array('_route' => 'endereco_editar', '_controller' => 'App\\Controller\\EnderecoController::editar'), array('id'), null, null, false, true, null)),
            151 => array(array(array('_route' => 'app_endereco_apagar', '_controller' => 'App\\Controller\\EnderecoController::apagar'), array('id'), null, null, false, true, null)),
            188 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
        );
    }
}
