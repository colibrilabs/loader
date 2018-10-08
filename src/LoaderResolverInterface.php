<?php

namespace Subapp\Loader;

/**
 * Interface LoaderResolverInterface
 * @package Subapp\Loader
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