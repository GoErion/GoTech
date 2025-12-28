<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Hero;
use Illuminate\Support\Facades\Storage;

final readonly class HeroAction
{
    //this method receives validated string heading and validated string path from controller
    public function handle(array $data): Hero
    {
        $hero = Hero::first();

        // If a new image is provided, delete the old one
        if (!empty($data['hero_image']) && $hero?->hero_image) {
            Storage::disk('public')->delete($hero->hero_image);
        }

        if ($hero) {
            // Update existing hero
            $hero->update([
                'heading' => $data['heading'] ?? $hero->heading,
                'hero_image' => $data['hero_image'] ?? $hero->hero_image,
            ]);
        } else {
            // Create new hero
            $hero = Hero::create([
                'user_id'=> auth()->id(),
                'heading' => $data['heading'],
                'hero_image' => $data['hero_image'] ?? null,
            ]);
        }

        return $hero;
    }
}
