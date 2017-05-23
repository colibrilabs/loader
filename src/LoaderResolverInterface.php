<?php

namespace Colibri\Loader;

/**
 * Interface LoaderResolverInterface
 * @package Colibri\Loader
 */
interface LoaderResolverInterface
{
  
  /**
   * @param $resource
   * @param $resourceType
   * @return LoaderInterface
   */
  public function resolve($resource, $resourceType);
  
}