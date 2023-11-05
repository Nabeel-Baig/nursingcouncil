<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\CardDetail;
use App\Models\Form;
use App\Models\Fund;
use App\Models\News;
use App\Models\PageIntroduction;
use App\Models\PagesContent;
use App\Models\Slide;
use App\Models\Slider;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    public function index()
    {
        $homeIntro = PageIntroduction::where('page_id', 1)->first();
        $newses = News::orderBy('id', 'desc')->take(6)->get();
        $mainNews = News::orderBy('id', 'asc')->first();
        $slider = Slider::where('page_id', 1)->first();
        $slides = Slide::where('slider_id', $slider->id)->get();
        // return $slides;
        return view("front.index", compact('newses', 'mainNews', 'slides', 'homeIntro'));
    }

    public function home(Request $request)
    {

        $path = str_replace('-', '_', $request->path());
        if (view()->exists('front.' . $path)) {
            return view('front.' . $path);
        }
        return abort(404);
    }

    public function news()
    {
        if (request()->ajax()) {
            $newses = News::orderby('id', 'desc')->paginate(20);
            return $newses;
        }
        $newses = News::orderby('id', 'desc')->paginate(20);
        return view("front.news-and-updates", compact("newses"));
    }

    public function governance()
    {
        // page id 4 mean it is governance page
        $slider = Slider::where('page_id', 4)->first();
        $slides = Slide::where('slider_id', $slider->id)->get();
        $card = Card::where('page_id', 4)->first();
        $cardSlides = CardDetail::where('card_id', $card->id)->get();
        // return $slides;
        return view('front.governance', compact('slides', 'cardSlides'));
    }

    public function career()
    {
        // page 3 mean careeer page
        $slider = Slider::where('page_id', 3)->first();
        $slides = Slide::where('slider_id', $slider->id)->get();
        return view('front.careers', compact('slides'));
    }

    public function whatWeDo()
    {
        $content = PagesContent::where('page_id', 13)->first();
        $card = Card::where('page_id', 13)->first();
        $cards = CardDetail::where('card_id', $card->id)->get();
        // return $content;
        return view('front.what-we-do', compact('content', 'cards'));
    }

    public function policy()
    {
        // page 7 mean policy page
        $slider = Slider::where('page_id', 7)->first();
        $slides = Slide::where('slider_id', $slider->id)->get();
        return view('front.policy', compact('slides'));
    }
    public function whoWeWorkWith()
    {
        // page 6 who We Work With page
        $slider = Slider::where('page_id', 6)->first();
        $slides = Slide::where('slider_id', $slider->id)->get();

        return view('front.who-we-work-with', compact('slides'));
    }
    //= 2nd list for nav bar

    public function theCode()
    {
        // page 8  the Code page
        $slider = Slider::where('page_id', 8)->first();
        $slides = Slide::where('slider_id', $slider->id)->get();
        return view('front.the-code', compact('slides'));
    }
    public function revalidation()
    {
        $content = PagesContent::where('page_id', 13)->first();
        return view('front.revalidation', compact('content'));
    }
    public function standardsForNurses()
    {
        // page 9 standards For Nurses page
        $slider = Slider::where('page_id', 9)->first();
        $slides = Slide::where('slider_id', $slider->id)->get();
        $content = PagesContent::where('page_id', 9)->first();
        return view('front.standards-for-nurses', compact('slides', 'content'));
    }
    public function standardsForMidwives()
    {
        // page 11 standards For Midwives page
        $slider = Slider::where('page_id', 11)->get();
        $slides = Slide::where('slider_id', $slider[0]->id)->get();
        $subSlides = Slide::where('slider_id', $slider[1]->id)->get();

        // return $slides;
        $content = PagesContent::where('page_id', 11)->first();
        return view('front.standards-for-midwives', compact('slides', 'subSlides', 'content'));
    }
    public function standardsForNursingAssociates()
    {
        // page 12 standards For Nursing Associates page
        $slider = Slider::where('page_id', 12)->get();
        $slides = Slide::where('slider_id', $slider[0]->id)->get();
        $subSlides = Slide::where('slider_id', $slider[1]->id)->get();
        //  return $slides2;
        $content = PagesContent::where('page_id', 12)->first();
        return view('front.standards-for-nursing-associates', compact('slides', 'subSlides', 'content'));
    }
    public function contactsOfEducationInstitutions()
    {
        $card = Card::where('page_id', 18)->with('cardsslides')->first();
        $cardSlides = $card->cardsslides;
        // return $cardSlides;
        return view('front.contacts-of-education-institutions', compact('cardSlides'));
    }
    // 3rd option list
    public function ourRoleInEducation()
    {
        $content = PagesContent::where('page_id', 15)->first();
        return view('front.our-role-in-education', compact('content'));
    }
    public function becomingANurseMidwifeNursingAssociate()
    {
        $card = Card::where('page_id', 19)->first();
        $cardSlides = CardDetail::where('card_id', $card->id)->get();
        return view('front.becoming-a-nurse-midwife-nursing-associate', compact('cardSlides'));
    }
    public function approvedProgrammes()
    {
        $content = PagesContent::where('page_id', 16)->first();
        return view('front.approved-programmes', compact('content'));
    }
    public function registrationForms()
    {
        $forms = Form::get();
        return view('front.registration-forms', compact('forms'));
    }

    public function events()
    {
        $content = PagesContent::where('page_id', 17)->first();
        return view('front.events', compact('content'));
    }
}
