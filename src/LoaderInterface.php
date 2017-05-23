<?php

namespace Colibri\Loader;

/**
 * Interface LoaderInterface
 * @package Colibri\Loader
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