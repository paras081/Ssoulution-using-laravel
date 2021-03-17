<?php

namespace App\Http\Controllers;

use App\Models\ContactTable;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeContact(Request $request)
    {
        $this->validate($request,[
                'FirstName' => 'required',
                'LastName' => 'required',
                'MobileNo' => 'required',
                'Email' => 'required',
                'CompanyName' => 'required',
                'Address' => 'required',
                'Message' => 'required',
            ]);
        $contactTable = new ContactTable();

        $contactTable->FirstName = $request->FirstName;
        $contactTable->LastName =  $request->LastName;
        $contactTable->MobileNo =  $request->MobileNo;
        $contactTable->Email = $request->Email;
        $contactTable->CompanyName =  $request->CompanyName;
        $contactTable->Address =  $request->Address;
        $contactTable->Message =  $request->Message;
        $contactTable->save();

        return redirect(route('storeContact'))->with('contactSuccessMsg','Your Message sent Successfully ! We will be in touch with you');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewContactusMsg()
    {
        $contactData = ContactTable::paginate(5);
        return view('admin.viewContactusMsg',compact('contactData'));
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
    public function delete($id)
    {
        ContactTable::find($id)->delete();
        return redirect(route('viewContactusMsg'))->with('contactSuccessMsg','Record Deleted');
    }
}
