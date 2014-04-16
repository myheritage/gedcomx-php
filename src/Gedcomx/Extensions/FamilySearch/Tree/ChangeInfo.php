<?php

/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

  namespace Gedcomx\Extensions\FamilySearch\Tree {

    /**
     * Information about a change.
     */
    class ChangeInfo  {
    
      /**
       * An optional modifier for the object to which the operation applies.
       */
      private $objectModifier;
      /**
       * The operation of the change.
       */
      private $operation;
      /**
       * The reason for the change.
       */
      private $reason;
      /**
       * The type of the object to which the operation applies.
       */
      private $objectType;
    
      /**
       * The subject representing the original value(s) that existed before the change.
       */
      private $original;
      /**
       * The parent change that triggered, caused, or included this change.
       */
      private $parent;
      /**
       * The subject representing the removed value(s) that existed before the change.
       */
      private $removed;
      /**
       * The subject representing the result of the change.
       */
      private $resulting;

      /**
       * Constructs a ChangeInfo from a (parsed) JSON hash
       */
      public function __construct($o = null) {
        if( $o ) {
          $this->initFromArray($o);
        }
      }
      
      /**
       * An optional modifier for the object to which the operation applies.
       */
      public function getObjectModifier() {
        return $this->objectModifier;
      }
      
      /**
       * An optional modifier for the object to which the operation applies.
       */
      public function setObjectModifier($objectModifier) {
        $this->objectModifier = $objectModifier;
      }
      /**
       * The operation of the change.
       */
      public function getOperation() {
        return $this->operation;
      }
      
      /**
       * The operation of the change.
       */
      public function setOperation($operation) {
        $this->operation = $operation;
      }
      /**
       * The reason for the change.
       */
      public function getReason() {
        return $this->reason;
      }
      
      /**
       * The reason for the change.
       */
      public function setReason($reason) {
        $this->reason = $reason;
      }
      /**
       * The type of the object to which the operation applies.
       */
      public function getObjectType() {
        return $this->objectType;
      }
      
      /**
       * The type of the object to which the operation applies.
       */
      public function setObjectType($objectType) {
        $this->objectType = $objectType;
      }
      /**
       * The subject representing the original value(s) that existed before the change.
       */
      public function getOriginal() {
        return $this->original;
      }
      
      /**
       * The subject representing the original value(s) that existed before the change.
       */
      public function setOriginal($original) {
        $this->original = $original;
      }
      /**
       * The parent change that triggered, caused, or included this change.
       */
      public function getParent() {
        return $this->parent;
      }
      
      /**
       * The parent change that triggered, caused, or included this change.
       */
      public function setParent($parent) {
        $this->parent = $parent;
      }
      /**
       * The subject representing the removed value(s) that existed before the change.
       */
      public function getRemoved() {
        return $this->removed;
      }
      
      /**
       * The subject representing the removed value(s) that existed before the change.
       */
      public function setRemoved($removed) {
        $this->removed = $removed;
      }
      /**
       * The subject representing the result of the change.
       */
      public function getResulting() {
        return $this->resulting;
      }
      
      /**
       * The subject representing the result of the change.
       */
      public function setResulting($resulting) {
        $this->resulting = $resulting;
      }
      /**
       * Returns the associative array for this ChangeInfo
       */
      public function toArray() {
        $a = array();
        if( $this->objectModifier ) {
          $a["objectModifier"] = $this->objectModifier;
        }
        if( $this->operation ) {
          $a["operation"] = $this->operation;
        }
        if( $this->reason ) {
          $a["reason"] = $this->reason;
        }
        if( $this->objectType ) {
          $a["objectType"] = $this->objectType;
        }
        if( $this->original ) {
          $a["original"] = $this->original->toArray();
        }
        if( $this->parent ) {
          $a["parent"] = $this->parent->toArray();
        }
        if( $this->removed ) {
          $a["removed"] = $this->removed->toArray();
        }
        if( $this->resulting ) {
          $a["resulting"] = $this->resulting->toArray();
        }
        return $a;
      }
      
      /**
       * Returns the JSON string for this ChangeInfo
       */
      public function toJson() {
        return json_encode($this->toArray());
      }

      /**
       * Initializes this ChangeInfo from an associative array
       */
      public function initFromArray($o) {
        if( isset($o['objectModifier']) ) {
          $this->objectModifier = $o["objectModifier"];
        }
        if( isset($o['operation']) ) {
          $this->operation = $o["operation"];
        }
        if( isset($o['reason']) ) {
          $this->reason = $o["reason"];
        }
        if( isset($o['objectType']) ) {
          $this->objectType = $o["objectType"];
        }
        if( isset($o['original']) ) {
          $this->original = new \Gedcomx\Common\ResourceReference($o["original"]);
        }
        if( isset($o['parent']) ) {
          $this->parent = new \Gedcomx\Common\ResourceReference($o["parent"]);
        }
        if( isset($o['removed']) ) {
          $this->removed = new \Gedcomx\Common\ResourceReference($o["removed"]);
        }
        if( isset($o['resulting']) ) {
          $this->resulting = new \Gedcomx\Common\ResourceReference($o["resulting"]);
        }
      }
    
    }
    
  }

?>