<?php

namespace Pbxg33k\VocadbBundle\Entity\Song;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artist
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pbxg33k\VocadbBundle\Entity\Song\ArtistRepository")
 */
class Artist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="song_id", type="integer")
     */
    private $songId;

    /**
     * @var integer
     *
     * @ORM\Column(name="artist_id", type="integer")
     */
    private $artistId;

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer")
     */
    private $roleId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="credited", type="boolean")
     */
    private $credited;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set songId
     *
     * @param integer $songId
     *
     * @return Artist
     */
    public function setSongId($songId)
    {
        $this->songId = $songId;

        return $this;
    }

    /**
     * Get songId
     *
     * @return integer
     */
    public function getSongId()
    {
        return $this->songId;
    }

    /**
     * Set artistId
     *
     * @param integer $artistId
     *
     * @return Artist
     */
    public function setArtistId($artistId)
    {
        $this->artistId = $artistId;

        return $this;
    }

    /**
     * Get artistId
     *
     * @return integer
     */
    public function getArtistId()
    {
        return $this->artistId;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return Artist
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set credited
     *
     * @param boolean $credited
     *
     * @return Artist
     */
    public function setCredited($credited)
    {
        $this->credited = $credited;

        return $this;
    }

    /**
     * Get credited
     *
     * @return boolean
     */
    public function getCredited()
    {
        return $this->credited;
    }
}

