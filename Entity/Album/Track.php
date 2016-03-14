<?php

namespace Pbxg33k\VocadbBundle\Entity\Album;

use Doctrine\ORM\Mapping as ORM;
use Pbxg33k\VocadbBundle\Entity;

/**
 * Track
 *
 * @ORM\Table(name="vocadb_album_track")
 * @ORM\Entity(repositoryClass="Pbxg33k\VocadbBundle\Entity\Album\TrackRepository")
 */
class Track
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
     * @ORM\ManyToOne(targetEntity="Pbxg33k\VocadbBundle\Entity\Album", inversedBy="tracks")
     * @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     */
    private $album;

    /**
     * @var Entity\Song
     *
     * @ORM\ManyToOne(targetEntity="Pbxg33k\VocadbBundle\Entity\Song")
     * @ORM\JoinColumn(name="song_id", referencedColumnName="id")
     */
    private $song;

    /**
     * @var integer
     *
     * @ORM\Column(name="track", type="integer")
     */
    private $track;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidden", type="boolean")
     */
    private $hidden;


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
     * @return Track
     */
    public function setAlbum(Entity\Album $album)
    {
        $this->albumId = $albumId;

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
     * Set songId
     *
     * @param Entity\Song $songId
     *
     * @return Track
     */
    public function setSong(Entity\Song $songId)
    {
        $this->songId = $songId;

        return $this;
    }

    /**
     * Get song
     *
     * @return Entity\Song
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * Set track
     *
     * @param integer $track
     *
     * @return Track
     */
    public function setTrack($track)
    {
        $this->track = $track;

        return $this;
    }

    /**
     * Get track
     *
     * @return integer
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     *
     * @return Track
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean
     */
    public function getHidden()
    {
        return $this->hidden;
    }
}

