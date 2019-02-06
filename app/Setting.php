<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = ['type', 'title'];

    public function setValue(Request $request)
    {
        if($request->all()['value-type'] == 'file'){
            $newName = time().'-'.$request->value->getClientOriginalName();

            $file = $request->file()['value'];

            if(!$file->move(public_path('imgs'), $newName)) {
                throw new Exception('Error saving image');
            }

            $this->value = 'imgs/'.$newName;
        }else{
            $this->value = $request->value;
        }
    }

    public function accordionTabs()
    {
        return $this->hasMany('App\AccordionTab');
    }

    public function saveImgs($file)
    {
        $this->value = $file->store('imgs');

        $this->tryDelOldImg();

        $this->save();
    }

    private function tryDelOldImg()
    {
        $oldModel = new Setting(['id' => $this->id]);
        if($oldModel->value && file_exists(public_path($oldModel->value)) ) {
            unlink(public_path($oldModel->value));
        }
    }
}
