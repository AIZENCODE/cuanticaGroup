<?php

namespace App\Jobs;

use DragonCode\Contracts\Cache\Store;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public $image_url;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($image_url)
    {

        $this->image_url = $image_url;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $image = Storage::get($this->image_url);

        $img = Image::make($image);
        $img->resize(1200,null, function($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        // $img->save();
        $img->stream('jpg');
        Storage::put($this->image_url,$img);
        // $img->save('storage/'.$this->image_url, null, 'jpg');//Solo funciona en fotos que no sean transparentes
    }
}
