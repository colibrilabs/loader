<?php

namespace Subapp\Loader;

/**
 * Interface LoaderInterface
 * @package Subapp\Loader
 */
interface LoaderInterface
{
  
  /**
   * @param $resource
   * @param $resourceType
   * @return mixed
   */
  public function load($resource, $resourceType);
  
  /**
   * @param $resource
   * @param $resourceType
   * @return boolean
   */
  public function isSupported($resource, $resourceType);
  
}