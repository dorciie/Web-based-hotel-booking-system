<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Php74\Rector\Property\TypedPropertyRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    // $parameters = $containerConfigurator->parameters();
    // $parameters->set(Option::PATHS, [
    //     ___DIR . '/src'
    // ]);

    // Define what rule sets will be applied
    $containerConfigurator->import(LevelSetList::UP_TO_PHP_74);

     // here we can define, what sets of rules will be applied
    // tip: use "SetList" class to autocomplete sets
    $containerConfigurator->import(SetList::CODE_QUALITY);
    $containerConfigurator->import(SetList::PHP_74);

    // register single rule
    $services = $containerConfigurator->services();
    $services->set(TypedPropertyRector::class);
}; 
