<?php

namespace Kukusa\Apis\TraitEntity;

use ApiPlatform\Core\Annotation\ApiProperty;
use Doctrine\ORM\Mapping as ORM;

trait SoftDeleteableTrait
{

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @ApiProperty(writable=false)
     *
     * @var \DateTime|null
     */
    protected $deletedAt;

    /**
     * Set or clear the deleted at timestamp.
     *
     * @return self
     */
    public function setDeletedAt(\DateTime $deletedAt = null)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get the deleted at timestamp value. Will return null if
     * the entity has not been soft deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Check if the entity has been soft deleted.
     *
     * @return bool
     */
    public function isDeleted()
    {
        return null !== $this->deletedAt;
    }
}