<?php

namespace Pbxg33k\VocadbBundle\Entity\Album;

use Doctrine\ORM\Mapping as ORM;
use Pbxg33k\VocadbBundle\Entity;

/**
 * Artist
 *
 * @ORM\Table(name="vocadb_album_artist")
 * @ORM\Entity(repositoryClass="Pbxg33k\VocadbBundle\Entity\Album\ArtistRepository")
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
     * @var Entity\Album
     *
     * @ORM\ManyToOne(targetEntity="Pbxg33k\VocadbBundle\Entity\Album", inversedBy="artists")
     * @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     */
    private $album;

    /**
     * @var Entity\Artist
     *
     * @ORM\ManyToOne(targetEntity="Pbxg33k\VocadbBundle\Entity\Artist")
     * @ORM\JoinColumn(name="artist_id", referencedColumnName="id")
     */
    private $artist;

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer")
     */
    private $roleId;


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
     * Set albumId
     *
     * @param Entity\Album $album
     *
     * @return Artist
     */
    public function setAlbum(Entity\Album $album)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get albumId
     *
     * @return Entity\Album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set artistId
     *
     * @param Entity\Artist $artist
     *
     * @return Artist
     */
    public function setArtist(Entity\Artist $artist)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artistId
     *
     * @return Entity\Artist
     */
    public function getArtist()
    {
        return $this->artist;
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
}

