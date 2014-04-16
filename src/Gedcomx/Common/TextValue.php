<?php

/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

  namespace Gedcomx\Common {

    /**
     * An element representing a text value that may be in a specific language.
     */
    class TextValue  {
    
      /**
       * The language of the text value.
       */
      private $lang;
    
      /**
       * The text value.
       */
      private $value;

      /**
       * Constructs a TextValue from a (parsed) JSON hash
       */
      public function __construct($o = null) {
        if( $o ) {
          $this->initFromArray($o);
        }
      }
      
      /**
       * The language of the text value.
       */
      public function getLang() {
        return $this->lang;
      }
      
      /**
       * The language of the text value.
       */
      public function setLang($lang) {
        $this->lang = $lang;
      }
      /**
       * The text value.
       */
      public function getValue() {
        return $this->value;
      }
      
      /**
       * The text value.
       */
      public function setValue($value) {
        $this->value = $value;
      }
      /**
       * Returns the associative array for this TextValue
       */
      public function toArray() {
        $a = array();
        if( $this->lang ) {
          $a["lang"] = $this->lang;
        }
        if( $this->value ) {
          $a["value"] = $this->value;
        }
        return $a;
      }
      
      /**
       * Returns the JSON string for this TextValue
       */
      public function toJson() {
        return json_encode($this->toArray());
      }

      /**
       * Initializes this TextValue from an associative array
       */
      public function initFromArray($o) {
        if( isset($o['lang']) ) {
          $this->lang = $o["lang"];
        }
        if( isset($o['value']) ) {
          $this->value = $o["value"];
        }
      }
    
    }
    
  }

?>