<?php

namespace App\Actions\Gallery;

use App\Models\Gallery;
use Illuminate\Http\Request;
use ImageResize;
use Lorisleiva\Actions\Concerns\AsAction;

class SaveImageGallery
{
	use AsAction;

	public function handle(Request $request, string $nameInput,string $nameFile,string $path="images"): array
    {   
        if ($files = $request->file($nameInput)) {
            
            //UPLOAD IMAGE
            $destinationPath = public_path($path); // upload path
            $newPathImage = $nameFile."." . $files->getClientOriginalExtension();

            //UPLOAD IMAGE
            $destinationPath = public_path($path); // upload path
            $userImage = 'profile_'.$request->user()->id. $files->getClientOriginalExtension();
            $files->move($destinationPath, $userImage);

            $path_image = '/'.$path.'/'.$userImage; 

            return $path_image;
            }
            else{
                return [];
            }

            
    }

    function sanitize_string($string, $force_lowercase = true, $anal = false) {
    $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
                   "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
                   "â€”", "â€“", ",", "<", ".", ">", "/", "?");
    $clean = trim(str_replace($strip, "", strip_tags($string)));
    $clean = preg_replace('/\s+/', "-", $clean);
    $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;
    return ($force_lowercase) ?
        (function_exists('mb_strtolower')) ?
            mb_strtolower($clean, 'UTF-8') :
            strtolower($clean) :
        $clean;
    }
}