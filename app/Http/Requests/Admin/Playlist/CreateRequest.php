<?php

namespace App\Http\Requests\Admin\Playlist;

use App\Http\Requests\Request;

class CreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'youtube_id' => 'required|alpha_num|unique:playlists,youtube_id',
            'title' => 'required',
        	'release_date' => 'date',
        	'by',
            // 'category',
        	'age' => 'required|numeric',
        	// 'description',
        ];
    }
}
