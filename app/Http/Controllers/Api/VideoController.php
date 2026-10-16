<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Resources\VideoResource;

class VideoController extends Controller
{

    public function show($id)
    {
        $video=Video::findOrFail($id);

        return new VideoResource($video);
    }

}
