<?php
<<<<<<< HEAD

=======
>>>>>>> eab99fa567ca44ca7478660ad509a0423eb44aaa
namespace App\Http\Controllers;

use App\Models\Multipleuploads;
use Illuminate\Http\Request;

class MultipleuploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======
        return view('multipleuploads');
>>>>>>> eab99fa567ca44ca7478660ad509a0423eb44aaa
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        $request->validate([
            'filename'   => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000',
        ]);
        if ($request->hasfile('filename')) {
            $files = [];
            foreach ($request->file('filename') as $file) {
                if ($file->isValid()) {
                    $filename = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
                    $file->move(public_path('images'), $filename);
                    $files[] = [
                        'filename' => $filename,
                    ];
                }
            }
            Multipleuploads::insert($files);
            echo 'Success';
        } else {
            echo 'Gagal';
        }
>>>>>>> eab99fa567ca44ca7478660ad509a0423eb44aaa
    }

    /**
     * Display the specified resource.
     */
    public function show(Multipleuploads $multipleuploads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Multipleuploads $multipleuploads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Multipleuploads $multipleuploads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Multipleuploads $multipleuploads)
    {
        //
    }
}
