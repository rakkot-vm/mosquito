<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AccordionTab extends Model
{
    protected $table = 'accordion_tabs';

    protected $fillable = ['type', 'title'];

    public function setImg(Request $request)
    {
            $newName = time().'-'.$request->img->getClientOriginalName();

            $file = $request->file()['img'];

            if(!$file->move(public_path('imgs'), $newName)) {
                throw new Exception('Error saving image');
            }

            $this->value = 'imgs/'.$newName;
    }

    public function setting()
    {
        $this->belongsTo('Setting');
    }
}
