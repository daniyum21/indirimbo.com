<?php

namespace App\Http\Controllers;

use App\BookSection;
use App\BookSubSection;
use App\Chapter;
use App\Indirimbo;
use App\Korali;
use App\Umuhanzi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response as FacadeResponse;
use PDF;
class IndirimboController extends Controller
{
    public $indirimbo,$chapter;


    function __construct(Indirimbo $indirimbo,Chapter $chapter) {
        $this->indirimbo=$indirimbo;
        $this->chapter=$chapter;
    }
    public function index()
    {

        return view('indirimbo.home');

    }
    public function abahanzi()
    {
        $abahanzi=Umuhanzi::where('country_id',getCountryID())->paginate(10);


        return view('indirimbo.abahanzi',compact('abahanzi'));
    }
    public function umuhanzi($izina,$umuhanziUUID)
    {

        //return all songs of this artist
        $umuhanzi=Umuhanzi::where('UUID',$umuhanziUUID)->first();
        if(!$umuhanzi)
            abort(404);
          $indirimbo=Indirimbo::where('UmuhanziID',$umuhanzi->UmuhanziID)->paginate(10);
          if(!$indirimbo)
          {
              abort(404);
          }


        return view('indirimbo.umuhanziSongs',compact('indirimbo','umuhanzi'));
    }
    public function viewkorali($name,$koraliUUID)
    {


        //return all songs of this artist
        $korali=Korali::where('UUID',$koraliUUID)->first();
if(!$korali)
    abort(404);
        //Get all songs of this artist
        $indirimbo=Indirimbo::where('ChoirID',$korali->ChoirID)->paginate(10);
        if(!$indirimbo)
            abort(404);


        return view('indirimbo.koraliSongs',compact('indirimbo','korali'));
    }
    public function viewkoraliSong($name,$koraliName,$songUUID)
    {
        //return all songs of this artist
        $indirimbo=Indirimbo::where('UUID',$songUUID)->first();
        //Get all songs of this artist
        if(!$indirimbo)
        {

            abort(404);
        }

        $korali=Korali::findOrFail($indirimbo->ChoirID);
        if(!$korali)
            abort(404);

        return view('indirimbo.koraliSong',compact('indirimbo','korali'));
    }
    public function viewUmuhanziSong($name,$umuhanziName,$songUUID)
    {
        //return all songs of this artist
        $indirimbo=Indirimbo::where('UUID',$songUUID)->first();
        //Get all songs of this artist
        //$indirimbo=Indirimbo::where('ChoirID',$korali->ChoirID)->paginate(10);
        if(!$indirimbo)
        {
            abort(404);
        }

$umuhanzi=Umuhanzi::findOrFail($indirimbo->UmuhanziID);
        if(!$umuhanzi)
            abort(404);
//$umuhanzi=Umuhanzi::where('UUID',$umuhanziID)->first();


        //return view('indirimbo.subsectionListing',compact('indirimbo','sectionTitle','subsectionTitle'));

        return view('indirimbo.umuhanziSong',compact('indirimbo','umuhanzi'));
    }

    public function korali()
    {
        $korali=Korali::where('country_id',getCountryID())->paginate(10);

        //return view('indirimbo.subsectionListing',compact('indirimbo','sectionTitle','subsectionTitle'));

        return view('indirimbo.korali',compact('korali'));
    }


    public function displayGushimisha()
    {
        return $this->displaySection('gushimisha');

        //this wil display all song in the section. Gushimisha oR aGAKIZA.
    }
    public function displayAgakiza()
    {
        return $this->displaySection('agakiza');
    }

    public function subsectionListing($subsectionName)
    {
        $cleanSearch=str_replace('-',' ',$subsectionName);
        if(!($subsection=BookSubSection::where('country_id',getCountryID())->where('SubSectionName','=',$cleanSearch)->first()))
            abort(404);
        $indirimbo=$subsection->indirimbo()->paginate(10);
        $subsectionTitle=ucfirst($cleanSearch);
        $sectionTitle='gushimisha';
        return view('indirimbo.subsectionListing',compact('indirimbo','sectionTitle','subsectionTitle'));
    }

    private function displaySection($sectionName)
    {

        if($sectionName=='agakiza')
        {
            $sectionTitle='agakiza';
            $sectionID = 2;
        }
        else
        {
            $sectionTitle='gushimisha';
            $sectionID = 1;
        }
        //$subsections=BookSubSection::lists('SubSectionName');
        $subsections=BookSubSection::pluck('SubSectionName');

        $tempSong=BookSection::find($sectionID);
        $indirimbo=$tempSong->indirimbo()->paginate(10);

        return view('indirimbo.sectionListing',compact('indirimbo','sectionTitle','subsections'));
    }


    public function showSong($bookTitle,$songName,$songNumber,$pdf=false)
    {
        if($pdf==='pdf')
            $pdf=true;
        else
            $pdf=false;

        if($bookTitle=='agakiza')
            $bookSection = 1;
        elseif ($bookTitle=='gushimisha')
            $bookSection=2;
        else
           abort(404);
        // Authors::where($column , '=', $id)->first();

        $indirimbo = Indirimbo::where('UUID','=',$songNumber)->first();
        if(!$indirimbo)
            abort(404);
        $pageTitle=$indirimbo->Title;
        if($indirimbo->section->SectionName=="Indirimbo zo Gushimisha")
            $subSectionName=$indirimbo->SubSection->SubSectionName;
        else
            $subSectionName=null;

        $subsections=BookSubSection::pluck('SubSectionName');
        if(!$pdf)
        return view('indirimbo.viewSong',compact('indirimbo','pageTitle','subSectionName','subsections'));

        $pdf = PDF::loadView('indirimbo.viewSong', compact('indirimbo','pageTitle','subSectionName','subsections'));
        return $pdf->download('indirimbo.pdf');

    }

    /*
     * Function for search
     * */
    public function search(Request $request)
    {
        $searchText = $request->input('search');
        $saveText=$searchText;
        //$first = DB::table('users')->whereNull('first_name');
        if(is_numeric($searchText) and $searchText>0)
        {
            $results=DB::table('Indirimbo')->select('title as TITLE','UUID','SongID','SongNumber','SectionID','UmuhanziID','ChoirID','title as realTitle')->whereRaw(
                'songNumber=? and country_id=?',
                [array($searchText),getCountryID()]
            )->get();
            //dd($chapters);
        }
        else
        {
            $searchText=$this->clean($searchText);
            //dd($searchText);
            //dd($searchText);


            /*  $titleNumber =DB::table('Indirimbo')->select('title as TITLE','SongID','SongNumber','SectionID','title as realTitle')->whereRaw(
                  "MATCH(umubare,Title,Description) AGAINST(+? IN BOOLEAN MODE)",
                  array($searchText)
              );*/

//this below is how we were getting results, which wouldn't return partial match, therefore was renamed Oldresults

            //$Oldresults =DB::table('Chapters')->select("ChapterText as TITLE","Indirimbo.SongID",'Indirimbo.SongNumber','SectionID','Indirimbo.title as realTitle',DB::raw("MATCH(ChapterText) AGAINST (?) as post_score"))->leftJoin('Indirimbo','Indirimbo.SongID','=','Chapters.SongID')->whereRaw(
            //"MATCH(ChapterText) AGAINST(? IN BOOLEAN MODE)",
            //array($searchText,$searchText)
            // )/*->union($titleNumber)*/->orderBy('post_score','desc')->take(10)->get();
            $searchArray = explode(" ", trim($searchText));
            $i=0;
            $results3='';
            foreach ($searchArray as $word) {
                $wordTemp=substr($word, 0, -1);
                $results3 .= "".$wordTemp."* ";
            }
           // dd($results3);
//die($results3);
            $results =DB::table('Chapters')->select("ChapterText as TITLE","Indirimbo.SongID","Indirimbo.UUID",'UmuhanziID','ChoirID','Indirimbo.SongNumber','SectionID','Indirimbo.title as realTitle',
                DB::raw("MATCH(ChapterText) AGAINST ('".$results3."' IN BOOLEAN MODE) as post_score"))->leftJoin('Indirimbo','Indirimbo.SongID','=','Chapters.SongID')->whereRaw(
                "MATCH(ChapterText) AGAINST('".$results3."' IN BOOLEAN MODE)")->orderBy('post_score','desc')->take(20)->get();
$searchText=$saveText;

        }

        foreach($results as $index=>$result) {


            if(!$result->SongID)
            {

                unset($results[$index]);
            }
            else
            {
                if($result->UmuhanziID)
                {
                    $umuhanzi=Umuhanzi::findorfail($result->UmuhanziID);
                    $result->StageName=$umuhanzi->StageName;
                }
                else if($result->ChoirID)
                {
                    $korali=Korali::findorfail($result->ChoirID);
                    $result->ChoirName=$korali->ChoirName;
                }
                $result->TITLE = highlight($result->TITLE, trim($searchText));
//dd($result->TITLE);
            }
        }
//dd($results);

        return view('search.results', ['results'=>$results,'searchText'=>$searchText]);
    }
    public function displaySong($SongUUID)
    {

        $song=Indirimbo::where('UUID',$SongUUID)->first();


 if(!$song)
            abort(404);
//        dd(storage_path() );
        $path = storage_path(). $song->FileName;

        if(!File::exists($path))
        {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);
        $responses = FacadeResponse::make($file, 200);

        $responses->header("Content-Type", $type);
        $responses->header("Cache-Control", "no-cache");
        $responses->header("Pragma", "no-cache");

        return $responses;

    }
    function clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

         $string=preg_replace('/[^A-Za-z0-9\-]/',' ', $string); // Removes special chars.
        $string = preg_replace('/\s+/', ' ',$string);

        //dd($string);
        $string = str_replace('-', ' ', $string); // Replaces all spaces with hyphens.

        return $string;
    }

}

