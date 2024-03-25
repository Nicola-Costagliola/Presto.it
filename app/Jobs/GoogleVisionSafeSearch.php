<?php

namespace App\Jobs;

use App\Models\Image;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_id;

    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);
        
        if(! $i) {
            return;
        }

        $image = file_get_contents(storage_path('app/public/' . $i->path )); 

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json') );

        $imageAnnotator = new ImageAnnotatorClient() ;
        $response = $imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();

        $safe = $response->getSafeSearchAnnotation();

        $adult = $safe->getAdult();
        $medical = $safe->getMedical();
        $spoof = $safe->getSpoof();
        $violence = $safe->getViolence();
        $racy = $safe->getRacy();

        $likeLihoodName = [
            'text-secondary bi bi-circle-fill', 'text-success bi bi-circle-fill', 'text-success bi bi-circle-fill',
            'text-warning bi bi-circle-fill', 'text-warning bi bi-circle-fill', 'text-danger bi bi-circle-fill', 
        ];

        $i->adult = $likeLihoodName[$adult];
        $i->medical = $likeLihoodName[$medical];
        $i->spoof = $likeLihoodName[$spoof];
        $i->violence = $likeLihoodName[$violence];
        $i->racy = $likeLihoodName[$racy];

        $i->save();
    }
}
