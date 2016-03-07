<?php

namespace Filmoteca\Models\Exhibitions;

use Carbon\Carbon;
use Codesleeve\Stapler\ORM\EloquentTrait;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Filmoteca\Exhibition\Type\Film as FilmInterface;
use Filmoteca\Exhibition\Type\ImageAttachment;

/**
 * Class Film
 * @package Filmoteca\Models
 */
class Film extends Eloquent implements StaplerableInterface, FilmInterface
{
    use EloquentTrait;

    protected $guarded = [];

    protected $appends = ['cover'];

    protected $fillable = [
        'id',
        'title',
        'original_title',
        'duration',
        'genre_id',
        'director',
        'script',
        'photographic',
        'music',
        'edition',
        'production',
        'cast',
        'synopsis',
        'trailer',
        'notes',
        'years',
        'image'
    ];

    /**
     * @var ImageAttachment
     */
    protected $attachment;

    public function __construct(array $attributes = array())
    {
        $this->hasAttachedFile('image', [
            'styles' => [
                'medium' => '300x300',
                'thumbnail' => '150x150']]);

        parent::__construct($attributes);
    }

    /*
     |-----------------------------------------------------------------------------------------------------------------
     | Relationships
     |-----------------------------------------------------------------------------------------------------------------
     */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function exhibitionFilm()
    {
        return $this->hasOne('Filmoteca\Models\Exhibitions\ExhibitionFilm');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genre()
    {
        return $this->belongsTo('Filmoteca\Models\Exhibitions\Genre');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function countries()
    {

        return $this->belongsToMany('Filmoteca\Models\Exhibitions\Country');
    }

    /**
     * @return array
     */
    public function getCoverAttribute()
    {
        return [
            'thumbnail' => $this->image->url('thumbnail'),
            'medium' => $this->image->url('medium')
        ];
    }

    public function getYearsAttribute($value)
    {
        return explode(',', $value);
    }

    public function setYearsAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['years'] = $value;

            return;
        }

        if (is_numeric($value)) {
            $this->attributes['years'] = '' . $value;

            return;
        }

        $this->attributes['years'] = implode(',', $value);
    }

    /**
     * Convert to minutes.
     * @param  String $value [description]
     * @return String        [description]
     */
    public function getDurationAttribute($value)
    {
        $parts = explode(':', $value);

        $minutes = ($parts[0] * Carbon::MINUTES_PER_HOUR) + $parts[1];

        return $minutes;
    }

    /**
     * @param String $strMinutes
     */
    public function setDurationAttribute($strMinutes)
    {
        $min = (int)$strMinutes;

        $minutes = $min % Carbon::MINUTES_PER_HOUR;
        $hours = floor($min / Carbon::MINUTES_PER_HOUR);

        $paddedMinutes = str_pad($minutes, 2, '0', STR_PAD_LEFT);
        $paddedHours = str_pad($hours, 2, '0', STR_PAD_LEFT);

        $this->attributes['duration'] = $paddedHours . ':' . $paddedMinutes . ':00';
    }

    public function toArray()
    {
        $relations = [
            'genre' => $this->genre,
            'countries' => $this->countries
        ];

        return array_merge(parent::toArray(), $relations);
    }

    /*
     |-----------------------------------------------------------------------------------------------------------------
     | Setters and Getters
     |-----------------------------------------------------------------------------------------------------------------
     */

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id =$id;
    }

    /**
     * @return String
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param String $title
     */
    public function setTitle($title)
    {
        // TODO: Implement setTitle() method.
    }

    /**
     * @return String
     */
    public function getOriginalTile()
    {
        // TODO: Implement getOriginalTile() method.
    }

    /**
     * @param String $originalTile
     */
    public function setOriginalTile($originalTile)
    {
        // TODO: Implement setOriginalTile() method.
    }

    /**
     * @return \DateTime
     */
    public function getDuration()
    {
        // TODO: Implement getDuration() method.
    }

    /**
     * @param \DateTime $duration
     */
    public function setDuration($duration)
    {
        // TODO: Implement setDuration() method.
    }

    /**
     * @return array
     */
    public function getYears()
    {
        // TODO: Implement getYears() method.
    }

    /**
     * @param array $years
     */
    public function setYears($years)
    {
        // TODO: Implement setYears() method.
    }

    /**
     * @return String
     */
    public function getGenre()
    {
        // TODO: Implement getGenre() method.
    }

    /**
     * @param String $genre
     */
    public function setGenre($genre)
    {
        // TODO: Implement setGenre() method.
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        // TODO: Implement getDirector() method.
    }

    /**
     * @param mixed $director
     */
    public function setDirector($director)
    {
        // TODO: Implement setDirector() method.
    }

    /**
     * @return String
     */
    public function getScript()
    {
        // TODO: Implement getScript() method.
    }

    /**
     * @param String $script
     */
    public function setScript($script)
    {
        // TODO: Implement setScript() method.
    }

    /**
     * @return String
     */
    public function getPhotographic()
    {
        // TODO: Implement getPhotographic() method.
    }

    /**
     * @param String $photographic
     */
    public function setPhotographic($photographic)
    {
        // TODO: Implement setPhotographic() method.
    }

    /**
     * @return String
     */
    public function getMusic()
    {
        // TODO: Implement getMusic() method.
    }

    /**
     * @param String $music
     */
    public function setMusic($music)
    {
        // TODO: Implement setMusic() method.
    }

    /**
     * @return String
     */
    public function getEdition()
    {
        // TODO: Implement getEdition() method.
    }

    /**
     * @param String $edition
     */
    public function setEdition($edition)
    {
        // TODO: Implement setEdition() method.
    }

    /**
     * @return String
     */
    public function getProduction()
    {
        // TODO: Implement getProduction() method.
    }

    /**
     * @param String $production
     */
    public function setProduction($production)
    {
        // TODO: Implement setProduction() method.
    }

    /**
     * @return String
     */
    public function getCast()
    {
        // TODO: Implement getCast() method.
    }

    /**
     * @param String $cast
     */
    public function setCast($cast)
    {
        // TODO: Implement setCast() method.
    }

    /**
     * @return String
     */
    public function getSynopsis()
    {
        // TODO: Implement getSynopsis() method.
    }

    /**
     * @param String $synopsis
     */
    public function setSynopsis($synopsis)
    {
        // TODO: Implement setSynopsis() method.
    }

    /**
     * @return String
     */
    public function getTrailer()
    {
        // TODO: Implement getTrailer() method.
    }

    /**
     * @param String $trailer
     */
    public function setTrailer($trailer)
    {
        // TODO: Implement setTrailer() method.
    }

    /**
     * @return ImageAttachment
     */
    public function getCover()
    {
        if ($this->attachment ==! null) {
            return $this->attachment;
        }

        $attachment = new ImageAttachment();
        $attachment->setSmallImageUrl($this->image->url('thumbnail'));
        $attachment->setOriginalImageUrl($this->image->url('original'));
        $attachment->setMediumImageUrl($this->image->url('medium'));

        $this->attachment = $attachment;

        return $attachment;
    }

    /**
     * @param ImageAttachment $attachment
     */
    public function setCover(ImageAttachment $attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * @return String
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param String $notes
     */
    public function setNotes($notes)
    {
        // TODO: Implement setNotes() method.
    }


}
