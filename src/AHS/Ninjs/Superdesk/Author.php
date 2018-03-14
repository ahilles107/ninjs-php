<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */
declare(strict_types=1);

namespace AHS\Ninjs\Superdesk;

/**
 * Class Author.
 */
class Author
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $role;

    /**
     * @var string
     */
    protected $biography;

    /**
     * @var string
     */
    protected $avatar_url;

    /**
     * @var JobTitle
     */
    protected $jobtitle;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getBiography(): ?string
    {
        return $this->biography;
    }

    /**
     * @param string $biography
     */
    public function setBiography(string $biography): void
    {
        $this->biography = $biography;
    }

    /**
     * @return string
     */
    public function getAvatarUrl(): ?string
    {
        return $this->avatar_url;
    }

    /**
     * @param string $avatar_url
     */
    public function setAvatarUrl(string $avatar_url): void
    {
        $this->avatar_url = $avatar_url;
    }

    /**
     * @return JobTitle
     */
    public function getJobtitle(): ?JobTitle
    {
        return $this->jobtitle;
    }

    /**
     * @param JobTitle $jobtitle
     */
    public function setJobtitle(JobTitle $jobtitle): void
    {
        $this->jobtitle = $jobtitle;
    }
}
