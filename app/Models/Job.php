<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    // job belongs to emplyer
    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    // if u call assignTag method it will attach a tag to that job you called it on 
    public function assignTag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);
    }

    // job belongs to many tags
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
