<?php
namespace App\Http\Controllers;


use App\BookSection;
use App\BookSubSection;
use App\Chapter;
use App\Http\Requests;
use App\Indirimbo;
use App\Korali;
use App\Umuhanzi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\User;

class AdminController extends Controller {


    /**
	 * Display a listing of the resource.
	 * GET /admin
	 *
	 * @return Response
	 */
	public function index()
	{

        if(Auth::user())
            if(Auth::user()->RoleID==1)
            return view('admin.index');
                else
                    return Redirect::route("User_dashboard")->with('success', 'Welcome back ' . Auth::user()->FirstName . ' ' . Auth::user()->LastName);
        else
            abort(404);

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $bookSections = BookSection::orderBy('SectionID', 'asc')->pluck('SectionName','SectionID');

        $bookSubSections = BookSubSection::where('country_id',getCountryID())->orderBy('SubSectionID', 'asc')->pluck('SubSectionName','SubSectionID');

        return view('admin.indirimbo.create',compact('bookSections','bookSubSections'));
	}
    public function createArtistSong()
	{

        $abahanzi = Umuhanzi::where('country_id',getCountryID())->orderBy('StageName', 'asc')->pluck('StageName','UUID');


        return view('admin.indirimbo.umuhanziSongCreate',compact('abahanzi'));
	}
   public function createChoirSong()
	{

        $korali = Korali::where('country_id',getCountryID())->orderBy('ChoirName', 'asc')->pluck('ChoirName','UUID');


        return view('admin.indirimbo.koraliSongCreate',compact('korali'));
	}


	/**
	 * Store a newly created resource in storage.
	 * POST /admin
	 *
	 * @return Response
	 */
	public function store( Request $request)
	{

        $request->validate([
            //'SongNumber' => 'required|numeric',
            //'bookSection' => 'required',
            'SongName' => 'required',
        ]);


        $indirimbo = new Indirimbo;
        $indirimbo->Description='';
        $indirimbo->country_id=getCountryID();
        $indirimbo->SongNumber = $request->input('SongNumber');
        $indirimbo->SubSectionID = $request->input('bookSubSection')>0?$request->input('bookSubSection'):null;
        $indirimbo->SectionID= $request->input('bookSection');
        $indirimbo->Title = $request->input('SongName');
        $indirimbo->umubare=(string)$request->input('SongNumber');
        $indirimbo->YoutubeLink=$request->input('YoutubeLink');
        $indirimbo->references=$request->input('references');
        $indirimbo->save();
        if($request->input('SongChapter'))
        {
            foreach($request->input('SongChapter') as $key=>$chapterEntry)
            {
                if (strlen(trim($chapterEntry))) {


                    $igice = new Chapter();
                    $igice->SongID = $indirimbo->SongID;
                    $igice->SongNumber = $indirimbo->SongNumber;
                    $igice->ChapterText = $chapterEntry;
//                echo "Check: $key <u>".$chapterEntry."</u><br>";
                    if (isset($_POST["refrain" . ($key + 1)])) {
                        $igice->Chorus = 'Yes';
                        //   echo('Yeap'.$key);
                    } else {
                        // echo('nop'.$key);
                        $igice->Chorus = 'No';
                    }
                    $igice->save();
                }
            }
        }
        return redirect('/admin/indirimbo/create');
		//

    }
    public function saveArtistSong( Request $request)
	{

        $umuhanzi=Umuhanzi::where('UUID',$request->input('Umuhanzi'))->first();
        if(!$umuhanzi)
            abort(404);

        $request->validate([

            'SongName' => 'required',
        ]);


        $indirimbo = new Indirimbo;
        $indirimbo->Description='';
        $indirimbo->country_id=getCountryID();
        $indirimbo->UmuhanziID=$umuhanzi->UmuhanziID;
        $indirimbo->Title = $request->input('SongName');

        $indirimbo->YoutubeLink=$request->input('YoutubeLink');
        $file = $request->file('Audio');
        if($file) {
            $extension = $file->getClientOriginalExtension();
            $storage = '/app/Audios/';
            $fileName = $storage . str_random(100) . $file->getFilename() . '.' . $extension;
            $request->file('Audio')->move(storage_path() . $storage, $fileName);


            $indirimbo->FileName = $fileName;
            $indirimbo->OriginalFileName = $file->getClientOriginalName();
            $indirimbo->mime = $file->getClientMimeType();

        }
        $indirimbo->save();
        if($request->input('SongChapter'))
        {
            foreach($request->input('SongChapter') as $key=>$chapterEntry)
            {
                $igice = new Chapter();
                $igice->SongID = $indirimbo->SongID;
                //$igice->SongNumber = $indirimbo->SongNumber;
                $igice->ChapterText = $chapterEntry;
//                echo "Check: $key <u>".$chapterEntry."</u><br>";
                if(isset($_POST["refrain".($key+1)]))
                {
                    $igice->Chorus = 'Yes';
                 //   echo('Yeap'.$key);
                }
                else {
                   // echo('nop'.$key);
                    $igice->Chorus = 'No';
                }
                $igice->save();
            }
        }
        $request->session()->flash('alert-success', 'Indirimbo ya Korali Has been deleted');

        return redirect()->back();
		//

    }

public function saveChoirSong( Request $request)
	{


    $request->validate([
        'SongName' => 'required|max:255',
        'korali'=>'required',
    ]);

        $korali=Korali::where('UUID',$request->get('korali'))->first();

        //dd($korali);
        if(!$korali)
            abort(404);

        $indirimbo = new Indirimbo;
        $indirimbo->country_id=getCountryID();
        $indirimbo->ChoirID=$korali->ChoirID;

        $indirimbo->Title = $request->input('SongName');

        $indirimbo->YoutubeLink=$request->input('YoutubeLink');



    $file = $request->file('Audio');
    if($file) {
        $extension = $file->getClientOriginalExtension();
        $storage = '/app/Audios/';
        $fileName = $storage . str_random(100) . $file->getFilename() . '.' . $extension;
        $request->file('Audio')->move(storage_path() . $storage, $fileName);


        $indirimbo->FileName = $fileName;
        $indirimbo->OriginalFileName = $file->getClientOriginalName();
        $indirimbo->mime = $file->getClientMimeType();
    }
   // dd($request->input('SongChapter'));
        $indirimbo->save();
        if($request->input('SongChapter'))
        {
            foreach($request->input('SongChapter') as $key=>$chapterEntry)
            {
                if (strlen(trim($chapterEntry))) {
                    $igice = new Chapter();
                    $igice->SongID = $indirimbo->SongID;
                    //$igice->SongNumber = $indirimbo->SongNumber;
                    $igice->ChapterText = $chapterEntry;
//                echo "Check: $key <u>".$chapterEntry."</u><br>";
                    if (isset($_POST["refrain" . ($key + 1)])) {
                        $igice->Chorus = 'Yes';
                        //   echo('Yeap'.$key);
                    } else {
                        // echo('nop'.$key);
                        $igice->Chorus = 'No';
                    }
                    $igice->save();
                }
            }
        }
        $request->session()->flash('alert-success', 'Indirimbo ya Korali Has been deleted');

        return redirect()->back();
		//

    }
    public function fileUpload(Request $request)

    {

        $this->validate($request, [

            'video' => 'required|mimes:mp4,avi,asf,mov,qt,avchd,flv,swf,mpg,mpeg,mpeg-4,wmv,divx,3gp|max:20480',

        ]);


        $videotmp = time();

        $video = $request->file('video');

        $input['video'] = $videotmp.'.'.$video->getClientOriginalExtension();

        $destinationPath = public_path('/videos');

        $video->move($destinationPath, $input['video']);


        if($video->getClientOriginalExtension() != "mp4"){

            CloudConvert::file($destinationPath.'/'.$input['video'])->to('mp4');

            File::delete($destinationPath.'/'. $input['video']);

            $input['video'] = $videotmp.'.mp4';

        }


        return back()->with('success','Video Upload successful');

    }
    public function Audiorules()
    {
        return [
            'name'=>'required|min:3',
            'artist_id'=>'required',
            'audio'=>'required|mimes:mp3',
        ];
    }


    public function edit($songUUID)
    {
        $indirimbo = Indirimbo::where('UUID',$songUUID)->first();

        $bookSections = BookSection::orderBy('SectionID', 'asc')->pluck('SectionName','SectionID');

        $bookSubSections = BookSubSection::orderBy('SubSectionID', 'asc')->pluck('SubSectionName','SubSectionID');




        $abahanzi = Umuhanzi::where('country_id',getCountryID())->orderBy('UmuhanziID', 'asc')->pluck('StageName','UmuhanziID');
        $amakorali = Korali::where('country_id',getCountryID())->orderBy('ChoirID', 'asc')->pluck('ChoirName','ChoirID');

        return view('Account.dashboards.Admin.Songs.EditSong',compact('bookSections','bookSubSections','abahanzi','amakorali'))->withIndirimbo($indirimbo);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $UUID)
    {

        $request->validate([

           // 'SongNumber' => 'required',
            //'SectionID' => 'required',
            'Title' => 'required',
        ]);


        $indirimbo = Indirimbo::where('UUID',$UUID)->first();
        //delete all chapters
        Chapter::where('SongID', $indirimbo->SongID)->delete();

        $indirimbo->SongNumber = $request->input('SongNumber');
        $indirimbo->SubSectionID = $request->input('SubSectionID')>0?$request->input('SubSectionID'):null;
        $indirimbo->SectionID= $request->input('SectionID');
        $indirimbo->Title = $request->input('Title');
        $indirimbo->umubare=(string)$request->input('SongNumber');
        $indirimbo->YoutubeLink=$request->input('YoutubeLink');
        $indirimbo->UmuhanziID=$request->input('UmuhanziID');
        $indirimbo->ChoirID=$request->input('ChoirID');
        $indirimbo->references=$request->input('references');
        $file = $request->file('Audio');

        if($file) {
            $extension = $file->getClientOriginalExtension();
            $storage = '/app/Audios/';
            $fileName = $storage . str_random(100) . $file->getFilename() . '.' . $extension;
            $request->file('Audio')->move(storage_path() . $storage, $fileName);


            $indirimbo->FileName = $fileName;
            $indirimbo->OriginalFileName = $file->getClientOriginalName();
            $indirimbo->mime = $file->getClientMimeType();
        }
        $indirimbo->save();
        if($request->input('SongChapter'))
        {
            foreach($request->input('SongChapter') as $key=>$chapterEntry)
            {
                if (strlen(trim($chapterEntry))) {
                    $igice = new Chapter();
                    $igice->SongID = $indirimbo->SongID;
                    $igice->SongNumber = $indirimbo->SongNumber;
                    $igice->ChapterText = $chapterEntry;
                    if (isset($_POST["refrain" . ($key)])) {
                        $igice->Chorus = 'Yes';
                    } else {
                        // echo('nop'.$key);
                        $igice->Chorus = 'No';
                    }
                    $igice->save();
                }
            }
        }
        return redirect()->back();

    }



}
