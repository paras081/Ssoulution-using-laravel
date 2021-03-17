<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use App\Models\TechnologyTable;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $portfolioItems = PortfolioItem::all();
        return view('portfolio',compact('portfolioItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertPortfolio()
    {
        return view('admin.insertPortfolio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePortfolio(Request $request)
    {

        $this->validate($request,[
            'FolioHeading' =>'required',
            'FolioShortDesc' =>'required',
            'FolioDesc' => 'required',
            'FolioImageUrl' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'FolioImageUrl2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'FolioWebsiteUrl' => 'string',
        ]);

        //to customise the image name according to date
        $FolioImageUrlName = 'portfolio-'.now().'.'.$request->FolioImageUrl->extension();
        $FolioImageUrl2Name = 'portfolio2-'.now().'.'.$request->FolioImageUrl2->extension();
//        dd(now());
        $request->FolioImageUrl->move(public_path('/demo/img/portfolio_images/'), $FolioImageUrlName);
        $request->FolioImageUrl2->move(public_path('/demo/img/portfolio_images/'), $FolioImageUrl2Name);

        $portfolioItem = new PortfolioItem;
        $portfolioItem->FolioHeading = $request->FolioHeading;
        $portfolioItem->FolioShortDesc =  $request->FolioShortDesc;
        $portfolioItem->FolioDesc =  $request->FolioDesc;
        $portfolioItem->FolioImageUrl =  $FolioImageUrlName;
        $portfolioItem->FolioImageUrl2 =  $FolioImageUrl2Name;
        $portfolioItem->FolioWebsiteUrl =  $request->FolioWebsiteUrlioDesc;
        $portfolioItem->save();
//        dd($portfolioItem);
        session()->flash('successMsg', 'Thank you for registering!');
        return redirect(route('insertPortfolio'));
//        return redirect(route('insertPortfolio'))->with('successMsg','Portfolio Item Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function loadPortfolioModal($id)
    {
        return view('portfolio',['id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
