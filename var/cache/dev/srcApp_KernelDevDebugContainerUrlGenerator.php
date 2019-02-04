<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'lista_contatos' => array(array(), array('_controller' => 'App\\Controller\\CadastroController::index'), array(), array(array('text', '/')), array(), array()),
        'contato_novo' => array(array(), array('_controller' => 'App\\Controller\\CadastroController::novo'), array(), array(array('text', '/contato/novo')), array(), array()),
        'contato_editar' => array(array('id'), array('_controller' => 'App\\Controller\\CadastroController::editar'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/contato/editar')), array(), array()),
        'contato_ver' => array(array('id'), array('_controller' => 'App\\Controller\\CadastroController::ver'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/contato')), array(), array()),
        'app_cadastro_apagar' => array(array('id'), array('_controller' => 'App\\Controller\\CadastroController::apagar'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/contato/delete')), array(), array()),
        'lista_enderecos' => array(array(), array('_controller' => 'App\\Controller\\EnderecoController::index'), array(), array(array('text', '/')), array(), array()),
        'endereco_novo' => array(array('id'), array('_controller' => 'App\\Controller\\EnderecoController::novo'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/endereco/novo')), array(), array()),
        'endereco_editar' => array(array('id'), array('_controller' => 'App\\Controller\\EnderecoController::editar'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/endereco/editar')), array(), array()),
        'app_endereco_apagar' => array(array('id'), array('_controller' => 'App\\Controller\\EnderecoController::apagar'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/endereco/delete')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        'index' => array(array(), array('_controller' => 'App\\Controller\\CadastroController::index'), array(), array(array('text', '/')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
