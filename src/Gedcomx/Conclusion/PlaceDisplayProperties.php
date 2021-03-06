<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Conclusion;

/**
 * A set of display properties for places for the convenience of quick display, such as for
     * a Web-based application. All display properties are provided in the default locale for the current
     * application context and are NOT considered canonical for the purposes of data exchange.
 */
class PlaceDisplayProperties extends \Gedcomx\Common\ExtensibleData
{

    /**
     * The displayable full name of the place.
     *
     * @var string
     */
    private $fullName;

    /**
     * The displayable name of the place.
     *
     * @var string
     */
    private $name;

    /**
     * The displayable type of the place.
     *
     * @var string
     */
    private $type;

    /**
     * Constructs a PlaceDisplayProperties from a (parsed) JSON hash
     *
     * @param mixed $o Either an array (JSON) or an XMLReader.
     */
    public function __construct($o = null)
    {
        if (is_array($o)) {
            $this->initFromArray($o);
        }
        else if ($o instanceof \XMLReader) {
            $success = true;
            while ($success && $o->nodeType != \XMLReader::ELEMENT) {
                $success = $o->read();
            }
            if ($o->nodeType != \XMLReader::ELEMENT) {
                throw new \Exception("Unable to read XML: no start element found.");
            }

            $this->initFromReader($o);
        }
    }

    /**
     * The displayable full name of the place.
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * The displayable full name of the place.
     *
     * @param string $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
    /**
     * The displayable name of the place.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The displayable name of the place.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * The displayable type of the place.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The displayable type of the place.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * Returns the associative array for this PlaceDisplayProperties
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->fullName) {
            $a["fullName"] = $this->fullName;
        }
        if ($this->name) {
            $a["name"] = $this->name;
        }
        if ($this->type) {
            $a["type"] = $this->type;
        }
        return $a;
    }


    /**
     * Initializes this PlaceDisplayProperties from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['fullName'])) {
            $this->fullName = $o["fullName"];
        }
        if (isset($o['name'])) {
            $this->name = $o["name"];
        }
        if (isset($o['type'])) {
            $this->type = $o["type"];
        }
    }

    /**
     * Sets a known child element of PlaceDisplayProperties from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether a child element was set.
     */
    protected function setKnownChildElement($xml) {
        $happened = parent::setKnownChildElement($xml);
        if ($happened) {
          return true;
        }
        else if (($xml->localName == 'fullName') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->fullName = $child;
            $happened = true;
        }
        else if (($xml->localName == 'name') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->name = $child;
            $happened = true;
        }
        else if (($xml->localName == 'type') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->type = $child;
            $happened = true;
        }
        return $happened;
    }

    /**
     * Sets a known attribute of PlaceDisplayProperties from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether an attribute was set.
     */
    protected function setKnownAttribute($xml) {
        if (parent::setKnownAttribute($xml)) {
            return true;
        }

        return false;
    }

    /**
     * Writes the contents of this PlaceDisplayProperties to an XML writer. The startElement is expected to be already provided.
     *
     * @param \XMLWriter $writer The XML writer.
     */
    public function writeXmlContents($writer)
    {
        parent::writeXmlContents($writer);
        if ($this->fullName) {
            $writer->startElementNs('gx', 'fullName', null);
            $writer->text($this->fullName);
            $writer->endElement();
        }
        if ($this->name) {
            $writer->startElementNs('gx', 'name', null);
            $writer->text($this->name);
            $writer->endElement();
        }
        if ($this->type) {
            $writer->startElementNs('gx', 'type', null);
            $writer->text($this->type);
            $writer->endElement();
        }
    }
}
