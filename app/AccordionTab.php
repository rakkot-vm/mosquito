<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AccordionTab extends Model
{
    protected $table = 'accordion_tabs';

    protected $fillable = ['setting_id', 'title', 'img', 'imgAlt', 'imgTitle', 'text'];

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

    public function save(array $options = [])
    {
        if(is_object($this->img)) {
            $this->img = $this->img->store('imgs');

            $this->tryDelOldImg();
        }

        parent::save($options);

    }

    private function tryDelOldImg()
    {
        if($oldModel = AccordionTab::find($this->id)){
            if($oldModel->img && file_exists(public_path($oldModel->img)) ) {
                unlink(public_path($oldModel->img));
            }
        }
    }

    public function delete()
    {
        $this->tryDelOldImg();

        parent::delete();
    }

}
