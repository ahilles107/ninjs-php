<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */
declare(strict_types=1);

namespace AHS\Ninjs;

use AHS\Ninjs\Schema\Associations;
use AHS\Ninjs\Schema\Renditions;

/**
 * A news item as JSON object -- copyright 2014 IPTC - International Press Telecommunications Council - www.iptc.org
 * This document is published under the Creative Commons Attribution 3.0 license
 * see  http://creativecommons.org/licenses/by/3.0/.
 */
class Item
{
    /**
     * The identifier for this news object.
     *
     * @var string
     */
    protected $uri;

    /**
     * The generic news type of this news object.
     *
     * Possible values: "text", "audio", "video", "picture", "graphic", "composite"
     *
     * @var string
     */
    protected $type = 'text';

    /**
     * A text format description of the content of the item.
     *
     * @var string
     */
    protected $description_text;

    /**
     * A html format description of the content of the item.
     *
     * @var string
     */
    protected $description_html;

    /**
     * A text format body of item.
     *
     * @var string
     */
    protected $body_text;

    /**
     * A html format body of item.
     *
     * @var string
     */
    protected $body_html;

    /**
     * A MIME type which applies to this news object.
     *
     * @var string
     */
    protected $mimeType;

    /**
     * Indicates how complete this representation of a news item is.
     *
     * Possible values: "complete", "incomplete"
     *
     * @var string
     */
    protected $representationtype;

    /**
     * An identifier for the kind of content of this news object.
     *
     * @var string
     */
    protected $profile;

    /**
     * The version of the news object which is identified by the uri property.
     *
     * @var string
     */
    protected $version;

    /**
     * The date and time when this version of the news object was created.
     *
     * @var \DateTime
     */
    protected $versioncreated;

    /**
     * The date and time before which all versions of the news object are embargoed. If absent, this object is not embargoed.
     *
     * @var \DateTime
     */
    protected $embargoed;

    /**
     * The publishing status of the news object, its value is *usable* by default.
     *
     * Possible values: "usable", "withheld", "canceled"
     *
     * @var string
     */
    protected $pubstatus;

    /**
     * The editorial urgency of the content from 1 to 9. 1 represents the highest urgency, 9 the lowest.
     *
     * @var int
     */
    protected $urgency;

    /**
     * The person or organisation claiming the intellectual property for the content.
     *
     * @var string
     */
    protected $copyrightholder;

    /**
     * Any necessary copyright notice for claiming the intellectual property for the content.
     *
     * @var string
     */
    protected $copyrightnotice;

    /**
     * A natural-language statement about the usage terms pertaining to the content.
     *
     * @var string
     */
    protected $usageterms;

    /**
     * The human language used by the content. The value should follow IETF BCP47.
     *
     * @var string
     */
    protected $language;

    /**
     * An individual human being.
     *
     * @var Person[]
     */
    protected $person;

    /**
     * An administrative and functional structure which may act as as a business, as a political party or not-for-profit party.
     *
     * @var Organization[]
     */
    protected $organisation;

    /**
     * The name(s) of the creator(s) of the content.
     *
     * @var string
     */
    protected $byline;

    /**
     * A brief and snappy introduction to the content, designed to catch the reader's attention.
     *
     * @var string
     */
    protected $headline;

    /**
     * The name of the location from which the content originates.
     *
     * @var string
     */
    protected $located;

    /**
     * A named location.
     *
     * propertyPattern ^geometry_[a-zA-Z0-9_]+
     *
     * @var Place[]
     */
    protected $place;

    /**
     * A concept with a relationship to the content.
     *
     * @var Subject[]
     */
    protected $subject;

    /**
     * Something which happens in a planned or unplanned manner.
     *
     * @var Event[]
     */
    protected $event;

    /**
     * Something material, excluding persons.
     *
     * @var object[]
     */
    protected $object;

    /**
     * Wrapper for different renditions of non-textual content of the news object.
     *
     * propertyPattern ^[a-zA-Z0-9]+
     *
     * @var Renditions
     */
    protected $renditions;

    /**
     * Content of news objects which are associated with this news object.
     *
     * propertyPattern ^[a-zA-Z0-9]+
     *
     * @var Associations
     */
    protected $associations;

    /**
     * Item constructor.
     *
     * @param string $uri
     */
    public function __construct(string $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri(string $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDescriptionText()
    {
        return $this->description_text;
    }

    /**
     * @param string $description_text
     */
    public function setDescriptionText(string $description_text)
    {
        $this->description_text = $description_text;
    }

    /**
     * @return string
     */
    public function getDescriptionHtml()
    {
        return $this->description_html;
    }

    /**
     * @param string $description_html
     */
    public function setDescriptionHtml(string $description_html)
    {
        $this->description_html = $description_html;
    }

    /**
     * @return string
     */
    public function getBodyText()
    {
        return $this->body_text;
    }

    /**
     * @param string $body_text
     */
    public function setBodyText(string $body_text)
    {
        $this->body_text = $body_text;
    }

    /**
     * @return string
     */
    public function getBodyHtml()
    {
        return $this->body_html;
    }

    /**
     * @param string $body_html
     */
    public function setBodyHtml(string $body_html)
    {
        $this->body_html = $body_html;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     */
    public function setMimeType(string $mimeType)
    {
        $this->mimeType = $mimeType;
    }

    /**
     * @return string
     */
    public function getRepresentationtype()
    {
        return $this->representationtype;
    }

    /**
     * @param string $representationtype
     */
    public function setRepresentationtype(string $representationtype)
    {
        $this->representationtype = $representationtype;
    }

    /**
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param string $profile
     */
    public function setProfile(string $profile)
    {
        $this->profile = $profile;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getVersioncreated()
    {
        return $this->versioncreated;
    }

    /**
     * @param \DateTime $versioncreated
     */
    public function setVersioncreated(\DateTime $versioncreated)
    {
        $versioncreated->setTimeZone(new \DateTimeZone('UTC'));
        $this->versioncreated = $versioncreated->format(\DateTime::ISO8601);
    }

    /**
     * @return \DateTime
     */
    public function getEmbargoed()
    {
        return $this->embargoed;
    }

    /**
     * @param \DateTime $embargoed
     */
    public function setEmbargoed(\DateTime $embargoed)
    {
        $this->embargoed = $embargoed;
    }

    /**
     * @return string
     */
    public function getPubstatus()
    {
        return $this->pubstatus;
    }

    /**
     * @param string $pubstatus
     */
    public function setPubstatus(string $pubstatus)
    {
        $this->pubstatus = $pubstatus;
    }

    /**
     * @return int
     */
    public function getUrgency()
    {
        return $this->urgency;
    }

    /**
     * @param int $urgency
     */
    public function setUrgency(int $urgency)
    {
        $this->urgency = $urgency;
    }

    /**
     * @return string
     */
    public function getCopyrightholder()
    {
        return $this->copyrightholder;
    }

    /**
     * @param string $copyrightholder
     */
    public function setCopyrightholder(string $copyrightholder)
    {
        $this->copyrightholder = $copyrightholder;
    }

    /**
     * @return string
     */
    public function getCopyrightnotice()
    {
        return $this->copyrightnotice;
    }

    /**
     * @param string $copyrightnotice
     */
    public function setCopyrightnotice(string $copyrightnotice)
    {
        $this->copyrightnotice = $copyrightnotice;
    }

    /**
     * @return string
     */
    public function getUsageterms()
    {
        return $this->usageterms;
    }

    /**
     * @param string $usageterms
     */
    public function setUsageterms(string $usageterms)
    {
        $this->usageterms = $usageterms;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    /**
     * @return Person[]
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param Person[] $person
     */
    public function setPerson(array $person)
    {
        $this->person = $person;
    }

    /**
     * @return Organization[]
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * @param Organization[] $organisation
     */
    public function setOrganisation(array $organisation)
    {
        $this->organisation = $organisation;
    }

    /**
     * @return string
     */
    public function getByline()
    {
        return $this->byline;
    }

    /**
     * @param string $byline
     */
    public function setByline(string $byline)
    {
        $this->byline = $byline;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @param string $headline
     */
    public function setHeadline(string $headline)
    {
        $this->headline = $headline;
    }

    /**
     * @return string
     */
    public function getLocated()
    {
        return $this->located;
    }

    /**
     * @param string $located
     */
    public function setLocated(string $located)
    {
        $this->located = $located;
    }

    /**
     * @return Place[]
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param Place[] $place
     */
    public function setPlace(array $place)
    {
        $this->place = $place;
    }

    /**
     * @return Subject[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param Subject[] $subject
     */
    public function setSubject(array $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return Event[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event[] $event
     */
    public function setEvent(array $event)
    {
        $this->event = $event;
    }

    /**
     * @return \Object[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param \Object[] $object
     */
    public function setObject(array $object)
    {
        $this->object = $object;
    }

    /**
     * @return null|Renditions
     */
    public function getRenditions()
    {
        return $this->renditions;
    }

    /**
     * @param Renditions $renditions
     */
    public function setRenditions(Renditions $renditions)
    {
        $this->renditions = $renditions;
    }

    /**
     * @return null|Associations
     */
    public function getAssociations()
    {
        return $this->associations;
    }

    /**
     * @param null|Associations $associations
     */
    public function setAssociations($associations)
    {
        $this->associations = $associations;
    }
}
