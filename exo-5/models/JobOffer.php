<?php

require_once(realpath(dirname(__FILE__)) . "/Tag.php");
require_once(realpath(dirname(__FILE__)) . "/Company.php");

class JobOffer {
    private int $id;
    private bool $isFeatured;
    private Company $company;
    private DateTime $publishedAt;
    private string $jobTitle;
    private string $location;

    public function __construct(string $jobTitle, string $companyName, string $companyImg, bool $isFeatured, DateTime $publishedAt, string $location)
    {
        $this->company = new Company($companyName, $companyImg);
        $this->isFeatured = $isFeatured;
        $this->jobTitle = $jobTitle;
        $this->location = $location;
        $this->publishedAt = $publishedAt;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCompany(): Company
    {
        return $this->company;
    }

    public function setCompany(string $companyName, string $companyImg): void
    {
        $this->company = new Company($companyName, $companyImg);
    }

    public function getIsFeatured(): bool
    {
        return $this->isFeatured;
    }

    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getPublishedAt(): DateTime
    {
        return $this->publishedAt;
    }
}
