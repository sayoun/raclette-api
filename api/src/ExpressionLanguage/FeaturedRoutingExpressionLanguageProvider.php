<?php

namespace App\ExpressionLanguage;

use Psr\Container\ContainerInterface;
use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;

class FeaturedRoutingExpressionLanguageProvider implements ExpressionFunctionProviderInterface
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFunctions()
    {
        return [
            new ExpressionFunction('featured_path', function ($str) {
                // Not implemented, we only use the evaluator, but we must return a value
                return $str;
            }, function ($arguments, $request): bool {
                $featureKey = \sprintf('featured_route%s', \str_replace('/', '_', $request->getPathInfo()));
                \dump($featureKey);
                return false;
            }),
        ];
    }
}
