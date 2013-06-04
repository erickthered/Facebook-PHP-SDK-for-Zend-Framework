<?php

/**
 *
 * @author Emidio
 */
interface Facebook_Storage_Interface {
    
/**
   * Stores the given ($key, $value) pair, so that future calls to
   * getPersistentData($key) return $value. This call may be in another request.
   *
   * @param string $key
   * @param array $value
   *
   * @return void
   */
  public function setPersistentData($key, $value);

  /**
   * Get the data for $key, persisted by Facebook_Abstract::setPersistentData()
   *
   * @param string $key The key of the data to retrieve
   * @param boolean $default The default value to return if $key is not found
   *
   * @return mixed
   */
  public function getPersistentData($key, $default = false);

  /**
   * Clear the data with $key from the persistent storage
   *
   * @param string $key
   * @return void
   */
  public function clearPersistentData($key);

  /**
   * Clear all data from the persistent storage
   *
   * @return void
   */
  public function clearAllPersistentData();
}
?>
