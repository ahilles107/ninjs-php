<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */
declare(strict_types=1);

namespace AHS\Ninjs\Superdesk;

use AHS\Ninjs\Item as BaseItem;

/**
 * Class Item.
 */
class Item extends BaseItem
{
    /**
     * @var string
     */
    protected $guid;

    /**
     * @var string
     */
    protected $slugline;

    /**
     * @var int
     */
    protected $priority;

    /**
     * A service e.g. World Photos, UK News etc.
     *
     * @var array
     */
    protected $service;

    /**
     * @var array
     */
    protected $authors;

    /**
     * @var Extra
     */
    protected $extra;

    /**
     * @var array
     */
    protected $keywords = [];

    /**
     * {@inheritdoc}
     */
    public function __construct($uri)
    {
        parent::__construct($uri);

        $this->uri = null;
        $this->setLanguage('en');
        $this->guid = $uri;
    }

    /**
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
    }

    /**
     * @param string $guid
     */
    public function setGuid(string $guid)
    {
        $this->guid = $guid;
    }

    /**
     * @return string
     */
    public function getSlugline()
    {
        return $this->slugline;
    }

    /**
     * @param string $slugline
     */
    public function setSlugline(string $slugline)
    {
        $this->slugline = $slugline;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority)
    {
        $this->priority = $priority;
    }

    /**
     * @param Service $service
     */
    public function addService(Service $service)
    {
        $this->service[] = $service;
    }

    /**
     * @param array $service
     */
    public function setService(array $service)
    {
        $this->service = $service;
    }

    /**
     * @return array
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @return array
     */
    public function getAuthors(): ?array
    {

        return $this->authors;
    }

    /**
     * @param Author $author
     */
    public function addAuthor(Author $author)
    {
        if (null === $this->authors) {
            $this->authors = [];
        }

        $this->authors[] = $author;
    }

    /**
     * @param array $authors
     */
    public function setAuthors(array $authors): void
    {
        $this->authors = $authors;
    }

    /**
     * @return Extra|null
     */
    public function getExtra(): ?Extra
    {
        return $this->extra;
    }

    /**
     * @param Extra $extra
     */
    public function setExtra(Extra $extra): void
    {
        $this->extra = $extra;
    }

    public function getKeywords(): array
    {
        return $this->keywords;
    }

    public function setKeywords(array $keywords): void
    {
        $this->keywords = $keywords;
    }
}
